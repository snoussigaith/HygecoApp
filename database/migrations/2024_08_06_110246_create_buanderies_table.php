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
        Schema::create('buanderies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->integer('couette_double');
            $table->integer('couette_queen');
            $table->integer('couette_king');
            $table->integer('oreiller');
            $table->integer('sac');
            $table->datetime('collecte');
            $table->datetime('livraison');
            $table->text('adresse');
            $table->text('facultatif')->nullable();
            $table->string('ville');
            $table->string('zip');
            $table->text('instruction');
            $table->text('summary')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buanderies');
    }
};
