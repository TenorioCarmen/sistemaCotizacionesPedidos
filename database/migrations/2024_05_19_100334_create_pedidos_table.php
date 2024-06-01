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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();

            $table->enum('estado', ['pendiente', 'entregado', 'facturado'])->default('pendiente');
            $table->date('fecha_entrega_estimada');
            $table->string('tipo_envio');
            $table->string('tiempo_entrega');
            
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
