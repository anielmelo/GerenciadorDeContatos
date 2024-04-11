<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('id_contato')->references('id')->on('contatos')->onDelete('cascade')->onUpdate('cascade');
            $table->string('rua');
            $table->integer('numero');
            $table->integer('cep');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('complemento');
            $table->string('estado',2);
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
        Schema::dropIfExists('enderecos');
    }
}
