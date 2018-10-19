<?php

namespace Tests\Unit;

use App\Emitente;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EmitenteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testListar()
    {
        $result = Emitente::all();

        $this->assertInternalType('array', $result);
    }

    public function testCadastrar()
    {

        $result = Emitente::create([
            "fantasia" => "",
            "razao" => "",
            "logradouro" => "",
            "numero" => "",
            "complemento" => "",
            "municipio" => "",
            "UF" => "",
            "cep" => "",
            "logo" => "",
            "cnpj" => "",
            "ie" => "",
            "im" => "",
            "CNAE" => "",
            "CSC" => "",
            "CSC_id" => "",
            "IBPT" => "",
            "email" => "",
            "pass" => "",
            "smtp" => "",
            "port" => "",
            "ssl" => "",
            "fromname" => "",
            "replyto" => ""
        ]);

        $this->assertInternalType('Emitente', $result);


    }

    public function testUpdate(){
        $result = Emitente::updateOrCreate(
            ["id" => 1],
            ["fantasia" => "",
            "razao" => "",
            "logradouro" => "",
            "numero" => "",
            "complemento" => "",
            "municipio" => "",
            "UF" => "",
            "cep" => "",
            "logo" => "",
            "cnpj" => "",
            "ie" => "",
            "im" => "",
            "CNAE" => "",
            "CSC" => "",
            "CSC_id" => "",
            "IBPT" => "",
            "email" => "",
            "pass" => "",
            "smtp" => "",
            "port" => "",
            "ssl" => "",
            "fromname" => "",
            "replyto" => ""]
        );

        $this->assertInternalType('Emitente', $result);
    }

    public function testDelete(){

        $result = Emitente::destroy(1);

        $this->assertEquals(1,$result);
    }
}
