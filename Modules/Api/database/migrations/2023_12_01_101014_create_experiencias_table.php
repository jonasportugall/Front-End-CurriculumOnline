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
        Schema::create('experiencias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pessoa_id')->constrained()->cascadeOnDelete();
            $table->string('office');
            $table->string('company');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiencias');
    }
};
