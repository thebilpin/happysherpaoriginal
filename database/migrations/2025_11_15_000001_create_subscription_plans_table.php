<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionPlansTable extends Migration
{
    public function up()
    {
        Schema::create('subscription_plans', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // e.g., "Weekly Veggie Box"
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2); // Base price
            $table->enum('frequency', ['weekly', 'biweekly', 'monthly'])->default('weekly');
            $table->integer('frequency_interval')->default(1); // e.g., every 1 week
            $table->integer('box_size')->nullable(); // Small=1, Medium=2, Large=3
            $table->boolean('customizable')->default(true); // Can customer customize items?
            $table->integer('max_items')->nullable(); // Max items allowed if customizable
            $table->boolean('active')->default(true);
            $table->integer('sort_order')->default(0);
            $table->json('default_items')->nullable(); // Default items included
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('subscription_plans');
    }
}
