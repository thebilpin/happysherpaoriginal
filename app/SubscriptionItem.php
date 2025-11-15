<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubscriptionItem extends Model
{
    protected $fillable = [
        'customer_subscription_id',
        'item_id',
        'quantity',
        'price',
        'is_default',
        'locked',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'is_default' => 'boolean',
        'locked' => 'boolean',
    ];

    // Relationships
    public function subscription()
    {
        return $this->belongsTo(CustomerSubscription::class, 'customer_subscription_id');
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    // Accessors
    public function getTotalPriceAttribute()
    {
        return $this->quantity * $this->price;
    }
}
