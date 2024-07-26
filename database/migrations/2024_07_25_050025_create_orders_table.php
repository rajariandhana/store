<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('email');
            $table->string('province_id');
            $table->string('city_id');
            $table->string('address');
            $table->string('courier');
            $table->string('courierService');
            $table->string('deliveryTime');
            $table->integer('weight');
            $table->integer('deliveryCost');
            $table->integer('subTotal');
            $table->integer('totalCost');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
