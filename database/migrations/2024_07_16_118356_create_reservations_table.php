<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id');
            $table->string('service_name'); // Add this line

            $table->json('options')->nullable();
            $table->integer('chambre_count');
            $table->integer('bain_count');
            $table->integer('cuisine_count');
            $table->integer('carpet_count');
            $table->string('frequency')->nullable();
            $table->string('etat'); 
            $table->decimal('total_price', 8, 2);

            $table->timestamps();

            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
