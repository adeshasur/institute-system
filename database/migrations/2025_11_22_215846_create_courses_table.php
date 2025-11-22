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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // උදා: 2025 A/L Physics (Theory)
            $table->string('teacher_name'); // උගන්වන ගුරුවරයා
            $table->decimal('monthly_fee', 8, 2); // පන්ති ගාස්තුව (උදා: 2500.00)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};