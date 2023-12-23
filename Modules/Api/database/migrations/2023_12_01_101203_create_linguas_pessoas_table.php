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
        Schema::create('linguas_pessoas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lingua_id')->constrained()->cascadeOnDelete();
            $table->foreignId('pessoa_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('linguas_pessoas');
    }
};
