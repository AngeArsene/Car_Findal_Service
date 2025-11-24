<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone_number', 45)->after('email')->unique();
            $table->string('google_id')->after('email_verified_at')->unique()->nullable();
            $table->string('facebook_id')->after('google_id')->unique()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->removeColumn('google_id');
            $table->removeColumn('facebook_id');
            $table->removeColumn('phone_number');
        });
    }
};
