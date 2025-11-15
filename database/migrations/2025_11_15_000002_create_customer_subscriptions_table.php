<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerSubscriptionsTable extends Migration
{
    public function up()
    {
        Schema::create('customer_subscriptions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('subscription_plan_id');
            $table->unsignedBigInteger('address_id'); // Delivery address
            $table->enum('status', ['active', 'paused', 'cancelled', 'expired'])->default('active');
            
            // Scheduling
            $table->date('start_date');
            $table->date('next_delivery_date')->nullable();
            $table->date('last_delivery_date')->nullable();
            $table->enum('delivery_day', ['saturday', 'sunday', 'both'])->default('saturday');
            $table->time('delivery_time_preference')->nullable();
            
            // Pricing
            $table->decimal('price', 10, 2); // Price at time of subscription
            $table->decimal('discount', 10, 2)->default(0);
            $table->decimal('final_price', 10, 2);
            
            // Payment
            $table->string('payment_method')->nullable();
            $table->string('payment_gateway_subscription_id')->nullable(); // For Stripe/PayPal subscription IDs
            
            // Status tracking
            $table->timestamp('paused_at')->nullable();
            $table->timestamp('cancelled_at')->nullable();
            $table->text('cancellation_reason')->nullable();
            $table->integer('deliveries_completed')->default(0);
            
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('subscription_plan_id')->references('id')->on('subscription_plans')->onDelete('restrict');
            $table->foreign('address_id')->references('id')->on('addresses')->onDelete('restrict');
            
            $table->index(['user_id', 'status']);
            $table->index('next_delivery_date');
        });
    }

    public function down()
    {
        Schema::dropIfExists('customer_subscriptions');
    }
}
