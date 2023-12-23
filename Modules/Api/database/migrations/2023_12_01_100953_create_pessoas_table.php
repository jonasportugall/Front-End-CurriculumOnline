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
        Schema::create('pessoas', function (Blueprint $table){
            $table->id();
            $table->foreignId('provincia_id')->constrained()->cascadeOnDelete();
            $table->foreignId('municipio_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->char('gender',1);
            $table->string('telephone');
            $table->string('address');
            $table->date('date_of_birth');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoas');
    }
};
