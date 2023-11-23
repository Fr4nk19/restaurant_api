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
        Schema::create('restaurant_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_company');
            $table->unsignedBigInteger('id_branch');
            $table->unsignedBigInteger('id_role');
            $table->string('name');
            $table->string('email');
            $table->string('password', 255);
            $table->timestamps();

            $table->foreign('id_company')->references('id')->on('companies')->onDelete('cascade');
            $table->foreign('id_branch')->references('id')->on('branches')->onDelete('cascade');
            $table->foreign('id_role')->references('id')->on('roles')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurant_users');
    }
};
