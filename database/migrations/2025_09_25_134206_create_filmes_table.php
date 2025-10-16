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
        Schema::create('filmes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->date('lancamento')->nullable();
            $table->integer('classificacao')->nullable();
            $table->integer('duracao')->nullable();
            $table->text('descricao')->nullable();
            $table->string('poster');
            $table->string('capa');
            $table->foreignId('diretor_id')->constrained('diretores','id')->nullable();
            $table->foreignId('produtora_id')->constrained()->nullable();
            $table->foreignId('nacionalidade_id')->constrained()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filmes');
    }
};
