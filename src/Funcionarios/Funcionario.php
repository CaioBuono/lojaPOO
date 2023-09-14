<?php

namespace Projeto\Caio\Funcionarios;

use Projeto\Caio\Modelo\{CPF, Pessoa};

abstract class Funcionario extends Pessoa
{
    private $salario = null;

    public function __construct($nome, $genero, CPF $cpf, $endereco, $salario)
    {
        parent::__construct($nome, $genero, $cpf, $endereco);
        $this->salario = $salario;
    }

    public function recuperarSalario()
    {
        return $this->salario;
    }
}