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
        Schema::create('honorarios', function (Blueprint $table) {
            $table->id();
            $table->decimal('preco_cover', 8, 2)->default(0.00); // Preço do cover (por exemplo, 8.00)
            $table->decimal('porcentagem_garcom', 5, 1)->default(0.00); // Porcentagem do garçom (por exemplo, 10.00 para 10%)
            $table->decimal('taxa_reserva', 8, 2)->default(0.00);
            $table->decimal('taxa_cortesia', 8, 2)->default(0.00); // Taxa de cortesia
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('honorarios');
    }
};
