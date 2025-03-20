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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('university_id')->constrained('universities')->onDelete('cascade');
            $table->string('name');
            $table->enum('level', ['Undergraduate', 'Graduate', 'PhD', 'Short Course', 'Language Course']);
            $table->text('description')->nullable();
            $table->text("detail");
            $table->string('duration')->nullable();
            $table->enum('intake_period', ['Fall', 'Spring', 'Summer', 'Year-round']);
            $table->enum('mode_of_study', ['on-campus', 'hybrid', 'online']);
            $table->string('field_of_study');
            $table->string('language_of_instruction');
            $table->decimal('program_fee', 10, 2);
            $table->date('application_deadline');
            $table->boolean("is_popular");
            $table->boolean("has_scholarship");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
