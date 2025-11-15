<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class CustomerSubscription extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'subscription_plan_id',
        'address_id',
        'status',
        'start_date',
        'next_delivery_date',
        'last_delivery_date',
        'delivery_day',
        'delivery_time_preference',
        'price',
        'discount',
        'final_price',
        'payment_method',
        'payment_gateway_subscription_id',
        'paused_at',
        'cancelled_at',
        'cancellation_reason',
        'deliveries_completed',
    ];

    protected $casts = [
        'start_date' => 'date',
        'next_delivery_date' => 'date',
        'last_delivery_date' => 'date',
        'price' => 'decimal:2',
        'discount' => 'decimal:2',
        'final_price' => 'decimal:2',
        'paused_at' => 'datetime',
        'cancelled_at' => 'datetime',
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function plan()
    {
        return $this->belongsTo(SubscriptionPlan::class, 'subscription_plan_id');
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function items()
    {
        return $this->hasMany(SubscriptionItem::class);
    }

    public function deliveries()
    {
        return $this->hasMany(SubscriptionDelivery::class);
    }

    public function upcomingDeliveries()
    {
        return $this->hasMany(SubscriptionDelivery::class)
            ->where('scheduled_date', '>=', Carbon::today())
            ->where('status', '!=', 'skipped')
            ->orderBy('scheduled_date');
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function scopeDueForDelivery($query, $date = null)
    {
        $date = $date ?? Carbon::today();
        return $query->where('status', 'active')
            ->where('next_delivery_date', '<=', $date);
    }

    // Methods
    public function pause()
    {
        $this->status = 'paused';
        $this->paused_at = Carbon::now();
        $this->save();
    }

    public function resume()
    {
        $this->status = 'active';
        $this->paused_at = null;
        $this->calculateNextDeliveryDate();
        $this->save();
    }

    public function cancel($reason = null)
    {
        $this->status = 'cancelled';
        $this->cancelled_at = Carbon::now();
        $this->cancellation_reason = $reason;
        $this->save();
    }

    public function calculateNextDeliveryDate()
    {
        if (!$this->last_delivery_date) {
            $this->next_delivery_date = $this->start_date;
            return;
        }

        $frequency = $this->plan->frequency;
        $interval = $this->plan->frequency_interval;

        switch ($frequency) {
            case 'weekly':
                $this->next_delivery_date = Carbon::parse($this->last_delivery_date)->addWeeks($interval);
                break;
            case 'biweekly':
                $this->next_delivery_date = Carbon::parse($this->last_delivery_date)->addWeeks(2 * $interval);
                break;
            case 'monthly':
                $this->next_delivery_date = Carbon::parse($this->last_delivery_date)->addMonths($interval);
                break;
        }

        // Adjust to preferred delivery day
        $this->adjustToDeliveryDay();
    }

    protected function adjustToDeliveryDay()
    {
        $dayOfWeek = Carbon::parse($this->next_delivery_date)->dayOfWeek;
        
        if ($this->delivery_day === 'saturday' && $dayOfWeek !== Carbon::SATURDAY) {
            $this->next_delivery_date = Carbon::parse($this->next_delivery_date)->next(Carbon::SATURDAY);
        } elseif ($this->delivery_day === 'sunday' && $dayOfWeek !== Carbon::SUNDAY) {
            $this->next_delivery_date = Carbon::parse($this->next_delivery_date)->next(Carbon::SUNDAY);
        }
    }
}
