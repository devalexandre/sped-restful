<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmitentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emitentes', function (Blueprint $table) {
            $table->increments('id');
            $table->string("fantasia",100);
            $table->string("razao",100);
            $table->string("logradouro",45);
            $table->string("numero",5);
            $table->string("complemento",5);
            $table->string("municipio",45);
            $table->string("UF",2);
            $table->string("cep",8);
            $table->text("logo");
            $table->string("cnpj",15);
            $table->string("ie",20);
            $table->string("im",20);
            $table->string("CNAE",45);
            $table->string("CSC");
            $table->string("CSC_id");
            $table->string("IBPT");
            $table->string("email");
            $table->string("pass");
            $table->string("smtp");
            $table->string("port");
            $table->string("ssl");
            $table->string("fromname");
            $table->string("replyto");
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
        Schema::dropIfExists('emitentes');
    }
}


