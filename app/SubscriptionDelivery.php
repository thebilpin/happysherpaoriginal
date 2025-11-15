<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class SubscriptionDelivery extends Model
{
    protected $fillable = [
        'customer_subscription_id',
        'order_id',
        'scheduled_date',
        'status',
        'skip_reason',
        'skipped_at',
        'order_created_at',
    ];

    protected $casts = [
        'scheduled_date' => 'date',
        'skipped_at' => 'datetime',
        'order_created_at' => 'datetime',
    ];

    // Relationships
    public function subscription()
    {
        return $this->belongsTo(CustomerSubscription::class, 'customer_subscription_id');
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // Scopes
    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    public function scopeScheduledFor($query, $date)
    {
        return $query->where('scheduled_date', $date);
    }

    public function scopeUpcoming($query)
    {
        return $query->where('scheduled_date', '>=', Carbon::today())
            ->where('status', 'pending')
            ->orderBy('scheduled_date');
    }

    // Methods
    public function skip($reason = null)
    {
        $this->status = 'skipped';
        $this->skip_reason = $reason;
        $this->skipped_at = Carbon::now();
        $this->save();
    }

    public function createOrder()
    {
        // This will be implemented when we build the order generation system
        // Will create an Order from the subscription items
    }
}
