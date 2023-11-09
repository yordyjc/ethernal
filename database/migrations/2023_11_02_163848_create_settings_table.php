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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->decimal('withdrawal_fee', 5, 2)->nullable()->comment('comision de retiro');
            $table->decimal('send_fee', 5, 2)->nullable()->comment('comision de envios');
            $table->decimal('normal_membership', 5, 2)
                    ->nullable()
                    ->comment('valor maximo normal de la membresia en funcion del precio');
            $table->decimal('bonus_membership', 5, 2)
                    ->nullable()
                    ->comment('valor maximo del bonus de la membresia en funcion del precio');
            $table->time('withdrawal_start_time')
                    ->default('6:00:00')
                    ->comment('Hora en la que se habilitara el boton de withdrawal');
            $table->integer('withdrawal_duration')
                    ->default(1)
                    ->unsigned()
                    ->comment('Tiempo que estara activo el boton de withdrawal');
            $table->decimal('min_withdrawal', 10, 8)->comment('monto minimo de retiro');
            $table->decimal('max_withdrawal', 10, 8)->comment('monto maximo de retiro');
            $table->string('timezone',10)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
