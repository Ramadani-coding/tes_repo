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
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('spot_id')->constrained();
            $table->foreignId('doctor_id')->constrained();
            $table->enum('status', ['accepted', 'declined', 'pending']);
            $table->text('disease_history');
            $table->text('current_symptoms');
            $table->text('doctor_notes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultations');
    }
};
