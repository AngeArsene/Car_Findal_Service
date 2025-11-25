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
        Schema::table('cars', function (Blueprint $table) {
            $table->after('id', function (Blueprint $table) {
                $table->integer('year', unsigned: true);
                $table->integer('price', unsigned: true);
                $table->foreignId('neighborhood_id')->constrained('neighborhoods');
                $table->string('vin', 255);
                $table->integer('mileage', unsigned: true);
                $table->longText('description')->nullable();
                $table->foreignId('user_id')->constrained('users');
                $table->foreignId('maker_id')->constrained('makers');
                $table->foreignId('model_id')->constrained('models');
                $table->foreignId('car_type_id')->constrained('car_types');
                $table->foreignId('fuel_type_id')->constrained('fuel_types');
                $table->foreignId('city_id')->constrained('cities');
            });

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->dropColumn('year');
            $table->dropColumn('price');
            $table->dropColumn('neighborhood_id');
            $table->dropColumn('vin');
            $table->dropColumn('mileage');
            $table->dropColumn('description');
            $table->dropColumn('user_id');
            $table->dropColumn('maker_id');
            $table->dropColumn('model_id');
            $table->dropColumn('car_type_id');
            $table->dropColumn('fuel_type_id');
            $table->dropColumn('city_id');
            $table->dropSoftDeletes();
        });
    }
};
