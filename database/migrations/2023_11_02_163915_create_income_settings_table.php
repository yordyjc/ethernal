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
        Schema::create('income_settings', function (Blueprint $table) {
            $table->id();
            $table->string('type')->comment('nombre del tipo de ingreso');
            $table->string('payment_period')->comment('es solo informativo');
            $table->string('payment_method')->comment('es solo informativo');
            $table->datetime('payment_date')
                    ->nullable()
                    ->comment('fecha en la que se habilitara el boton de claim en la pantalla income passive');
            $table->time('start_time')
                    ->nullable()
                    ->comment('hora de inicio en la que se habilitara el boton de claim en la pantalla income passive');
            $table->integer('duration')
                    ->nullable()
                    ->comment('tiempo que estara habilitado el boton de claim');
            $table->decimal('monthly_profit')
                    ->nullable()
                    ->comment('porcentaje de ganancia mensula. El prorcentaje se aplica al precio de la menbresia');
            $table->decimal('profit')
                    ->nullable()
                    ->comment('porcentaje de ganancia mensula. El prorcentaje se aplica al precio de la menbresia');
            $table->decimal('normal_profit')
                    ->nullable()
                    ->comment('porcentaje que utilizara el binario cuando el rango alcanzado no tenga habilitado el binary plus');
            $table->decimal('plus_profit')
                    ->nullable()
                    ->comment('porcentaje que utilizara el binario cuando el rango alcanzado tenga habilitado el binary plus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('income_settings');
    }
};
