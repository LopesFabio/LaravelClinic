<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->date('nascimento');
            $table->string('cpf')->unique()->nullable();
            $table->string('rg')->nullable();
            $table->string('rne')->nullable();
            $table->string('estado_civil');
            $table->string('sexo');
            $table->string('nacionalidade');
            $table->string('endereco');
            $table->integer('numero');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('cep');
            $table->string('estado', 2);
            $table->string('telefone1')->nullable();
            $table->string('email')->nullable();
            $table->string('telefone2');
            $table->string('situacao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}
