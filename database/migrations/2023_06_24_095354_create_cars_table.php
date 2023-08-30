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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('brand');
            $table->string('model');
            $table->string('year_of_manufacture');
            $table->string('color');
            $table->string('transmission');
            $table->string('mileage');
            $table->integer('door');
            $table->string('brake');
            $table->string('engine');
            $table->integer('passengers');
            $table->string('baggage');
            $table->string('type_of_fuel');
            $table->float('price_by_day');
            $table->boolean("is_available")->default(true);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
};
