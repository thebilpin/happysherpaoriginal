<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionDeliveriesTable extends Migration
{
    public function up()
    {
        Schema::create('subscription_deliveries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_subscription_id');
            $table->unsignedBigInteger('order_id')->nullable(); // Links to orders table when order is created
            $table->date('scheduled_date');
            $table->enum('status', ['pending', 'order_created', 'skipped', 'delivered', 'failed'])->default('pending');
            $table->text('skip_reason')->nullable();
            $table->timestamp('skipped_at')->nullable();
            $table->timestamp('order_created_at')->nullable();
            $table->timestamps();
            
            $table->foreign('customer_subscription_id')->references('id')->on('customer_subscriptions')->onDelete('cascade');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('set null');
            
            $table->index(['customer_subscription_id', 'scheduled_date']);
            $table->index(['scheduled_date', 'status']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('subscription_deliveries');
    }
}
