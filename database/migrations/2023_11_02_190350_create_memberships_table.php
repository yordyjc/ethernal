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
        Schema::create('memberships', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code')->unique();
            $table->decimal('price', 10, 8)->comment('precio de la membresia en USD');
            $table->enum('type', ['normal', 'corporate'])
                    ->comment('normal->membresia con todas las funciones, se compra en la pantalla buy | corporate->entregada solo por administrativos');
            $table->string('front_image')->nullable();
            $table->string('after_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('memberships');
    }
};
