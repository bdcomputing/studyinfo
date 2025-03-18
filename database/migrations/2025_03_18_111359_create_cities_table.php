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
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->foreignId("destination_id")->constrained('destinations')->onDelete('cascade');
            $table->string('state')->nullable(); // Optional: State/Province name
            $table->string('timezone')->nullable(); // City timezone
            $table->integer('population')->nullable(); // Optional: City population
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
