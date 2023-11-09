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
        Schema::create('nodes', function (Blueprint $table) {
            $table->id();
            $table->integer('tree_id')->unsigned();
            $table->integer('client_id')->unsigned()->nullable()->comment('cliente asignado a ese nodo');
            $table->integer('head')->unsigned()->nullable()->comment('cabeza del nodo');
            $table->integer('left_arm')->unsigned()->nullable()->comment('brazo izquierdo del nodo');
            $table->integer('right_arm')->unsigned()->nullable()->comment('brazo derecho del nodo');
            $table->string('status')->comment('usado para manjer diversas situaciones que se puedan presentar en los nodos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nodes');
    }
};
