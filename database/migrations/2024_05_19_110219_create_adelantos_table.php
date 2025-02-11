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
        Schema::create('adelantos', function (Blueprint $table) {
            $table->id();

            $table->decimal('monto', 10, 2);
            $table->boolean('es_adelanto')->default(false);
            $table->string('terminos_pago');
            $table->string('forma_pago');
            $table->date('fecha_pago')->nullable();

            $table->unsignedBigInteger('pedido_id');
            $table->unsignedBigInteger('cliente_id');

            $table->foreign('pedido_id')->references('id')->on('pedidos')->onDelete('cascade');
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adelantos');
    }
};
