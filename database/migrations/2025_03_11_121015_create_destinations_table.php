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
        Schema::create('destinations', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();  //e.g. United Kingdom
            $table->string("slug")->unique();                // Destination name (e.g., USA, UK)
            $table->text('description')->nullable();       // Brief description
            $table->text('detail')->nullable();       // Detailed description
            $table->string('cost_of_living')->nullable();  // Cost of living info
            $table->string('language')->nullable();        // Language spoken
            $table->string('image_url')->nullable();
            $table->string('image_public_id')->nullable();
            $table->string("currency")->nullable();
            $table->foreignId("continent_id")->constrained("continents", "id");
            $table->string("flag_url")->nullable();
            $table->string("flag_public_id")->nullable();
            $table->boolean("is_popular")->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destinations');
    }
};
