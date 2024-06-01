<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cotizacion_pedido', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_solicitud_pedido');

            $table->unsignedBigInteger('cotizacion_id');
            $table->unsignedBigInteger('pedido_id');

            $table->foreign('cotizacion_id')->references('id')->on('cotizacions')->onDelete('cascade');
            $table->foreign('pedido_id')->references('id')->on('pedidos')->onDelete('cascade');

            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cotizacion_pedido');
    }
};
