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
        Schema::create('detalles_comandas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idComanda');
            $table->foreign('idComanda')
                ->references('id')
                ->on('comandas');
            $table->unsignedBigInteger('idProducto');
            $table->foreign('idProducto')
                ->references('id')
                ->on('productos');
            $table->integer('cantidadProducto');
            $table->integer('totalLinea');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalles_comandas');
    }
};
