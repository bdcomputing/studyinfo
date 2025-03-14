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
            $table->string('name');
            $table->foreignId('destination_id')->constrained('destinations')->onDelete('cascade');
            $table->string('city')->nullable();
            $table->integer('ranking')->nullable();
            $table->enum('type', ['Public', 'Private']);
            $table->string('website_url')->nullable();
            $table->decimal('tuition_fee', 10, 2)->nullable();
            $table->text('admission_requirements')->nullable();
            $table->text('student_life')->nullable();
            $table->string('image_url')->nullable();
            $table->string('logo_url')->nullable();
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
