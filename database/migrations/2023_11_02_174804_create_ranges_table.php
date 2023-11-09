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
        Schema::create('ranges', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('min_volume')->comment('limite inferior del rango en puntos');
            $table->integer('max_volume')->comment('limite superior del rango en puntos');
            $table->string('image')->nullable()->comment('imagen de representacion del rango');
            $table->integer('position')->comment('posicion en la cual aparecera el rango en la pantalla achievement');
            $table->integer('image_awar')->nullable()->comment('imagen de los premios por conseguir el rango');
            $table->text('description')->nullable();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ranges');
    }
};
