<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('coffees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->decimal('price');
            $table->string('size');
            $table->string('heat');
            $table->integer('volume_ml');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('coffees');
    }
};
