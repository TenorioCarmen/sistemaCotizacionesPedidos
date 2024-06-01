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
        Schema::create('cotizacions', function (Blueprint $table) {
            $table->id();

            $table->decimal('descuento',10,2);
            $table->decimal('iva',10,2);
            $table->decimal('neto',10,2);
            $table->decimal('total_precio_cantidad',10,2);
            $table->decimal('monto_total',10,2);

            $table->enum('estado', ['revisar', 'en proceso', 'aceptado', 'rechazado', 'expirado'])->default('revisar');
            $table->timestamp('fecha_cotizacion');

           
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
        Schema::dropIfExists('cotizacions');
    }
};
