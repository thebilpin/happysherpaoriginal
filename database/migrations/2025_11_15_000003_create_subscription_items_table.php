<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionItemsTable extends Migration
{
    public function up()
    {
        Schema::create('subscription_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_subscription_id');
            $table->unsignedBigInteger('item_id'); // Product/Item from items table
            $table->integer('quantity')->default(1);
            $table->decimal('price', 10, 2); // Price per item
            $table->boolean('is_default')->default(false); // Default item or customer-added?
            $table->boolean('locked')->default(false); // Can customer remove this item?
            $table->timestamps();
            
            $table->foreign('customer_subscription_id')->references('id')->on('customer_subscriptions')->onDelete('cascade');
            $table->foreign('item_id')->references('id')->on('items')->onDelete('restrict');
            
            $table->unique(['customer_subscription_id', 'item_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('subscription_items');
    }
}
