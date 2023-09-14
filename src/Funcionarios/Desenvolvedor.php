<?php

namespace Projeto\Caio\Funcionarios;

use Projeto\Caio\Modelo\CPF;

class Desenvolvedor extends Funcionario
{
    public function __construct($nome, $genero, CPF $cpf, $endereco, $salario)
    {
        parent::__construct($nome, $genero, $cpf, $endereco, $salario);
    }
}