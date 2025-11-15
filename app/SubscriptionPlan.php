<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubscriptionPlan extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'frequency',
        'frequency_interval',
        'box_size',
        'customizable',
        'max_items',
        'active',
        'sort_order',
        'default_items',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'customizable' => 'boolean',
        'active' => 'boolean',
        'default_items' => 'array',
    ];

    // Relationships
    public function subscriptions()
    {
        return $this->hasMany(CustomerSubscription::class);
    }

    public function activeSubscriptions()
    {
        return $this->hasMany(CustomerSubscription::class)->where('status', 'active');
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order');
    }

    // Accessors
    public function getFrequencyLabelAttribute()
    {
        $labels = [
            'weekly' => 'Weekly',
            'biweekly' => 'Bi-Weekly',
            'monthly' => 'Monthly',
        ];
        return $labels[$this->frequency] ?? $this->frequency;
    }

    public function getBoxSizeLabelAttribute()
    {
        $sizes = [
            1 => 'Small',
            2 => 'Medium',
            3 => 'Large',
        ];
        return $sizes[$this->box_size] ?? 'Standard';
    }
}
