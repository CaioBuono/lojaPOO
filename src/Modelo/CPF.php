<?php

namespace Projeto\Caio\Modelo;

class CPF
{
    private $cpf = null;

    public function __construct($cpf)
    {
        $this->validarCpf($cpf);
        $this->cpf = $cpf;
    }

    public function recuperarCpf()
    {
        return $this->cpf;
    }

    public static function validarCpf($cpf)
    {
        if(strlen($cpf) < 11){
            echo 'Cpf inválido';
            exit();
        }
    }
}