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
        Schema::create('comandas', function (Blueprint $table) {
            $table->id();
            $table->decimal('total', 8, 2)->default(0);
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('mesa_id');
            $table->boolean('status')->default(true);
            $table->timestamps();

            // Definindo as chaves estrangeiras
             $table->foreign('cliente_id')->references('id')->on('clientes');
             $table->foreign('mesa_id')->references('id')->on('mesas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comandas');
    }
};
