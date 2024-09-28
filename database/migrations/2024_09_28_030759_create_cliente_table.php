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
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->string('nome'); // Adicionando campo para o nome
            $table->string('email')->unique(); // Adicionando campo para o e-mail
            $table->string('telefone')->nullable(); // Adicionando campo para o telefone
            $table->foreignId('cidade_id')->constrained('cidade'); // Adicionando chave estrangeira para Cidade
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente');
    }
};
