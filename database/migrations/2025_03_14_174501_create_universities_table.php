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
        Schema::create('universities', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->text("description");
            $table->text("detail");
            $table->foreignId('destination_id')->constrained('destinations')->onDelete('cascade');
            $table->foreignId('city_id')->constrained('cities')->onDelete('cascade');
            $table->integer('ranking')->nullable();
            $table->enum('type', ['Public', 'Private']);
            $table->string('website_url');
            $table->string("contact_email");
            $table->decimal('tuition_fee', 10, 2);
            $table->string('image_url')->nullable();
            $table->string('image_public_id')->nullable();
            $table->string('logo_url')->nullable();
            $table->string('logo_public_id')->nullable();
            $table->boolean("is_popular")->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('universities');
    }
};
