<?php

namespace Projeto\Caio\Modelo;

class Endereco
{
    private $cidade = null;
    private $bairro = null;
    private $rua = null;
    private $numero = null;

    public function __construct(array $arrayEndereco)
    {
        $this->cidade = $arrayEndereco['cidade'];
        $this->bairro = $arrayEndereco['bairro'];
        $this->rua = $arrayEndereco['rua'];
        $this->numero = $arrayEndereco['numero'];
    }

    public function recuperarCidade()
    {
        return $this->cidade;
    }

    public function recuperarBairro()
    {
        return $this->bairro;
    }

    public function recuperarRua()
    {
        return $this->rua;
    }

    public function recuperarNumero()
    {
        return $this->numero;
    }

}