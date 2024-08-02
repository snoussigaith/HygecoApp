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
        Schema::table('users', function (Blueprint $table) {
             $table->string('last_name')->nullable()->after('name');
            $table->string('phone')->nullable()->after('last_name');
            $table->string('address')->nullable()->after('phone');
            $table->string('apt_suite')->nullable()->after('address');
            $table->string('city')->nullable()->after('apt_suite');
            $table->string('zip')->nullable()->after('city');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
             $table->dropColumn(['last_name', 'phone', 'address', 'apt_suite', 'city', 'zip']);
        });
    }
};
