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
            $table->id();
            $table->unsignedBigInteger('id_table');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_status');
            $table->date('order_time');
            $table->float('total_price', 10, 2);
            $table->timestamps();

            $table->foreign('id_table')->references('id')->on('tables')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('restaurant_users')->onDelete('cascade');
            $table->foreign('id_status')->references('id')->on('order_status')->onDelete('cascade');
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
