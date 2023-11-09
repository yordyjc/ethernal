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
        Schema::create('exchange_rates', function (Blueprint $table) {
            $table->id();
            $table->integer('blockchain_id')->unsigned();
            $table->decimal('regular_exchange',10, 3)->comment('tipo de cambio del network');
            $table->decimal('new_exchange',10, 3)->comment('tipo de cambio nuevo');
            $table->decimal('variation', 10, 5)->default(0)->comment('porcentaje de variacion del tipo de cambio');
            $table->enum('variation_type', ['deposits', 'withdrawals']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exchange_rates');
    }
};
