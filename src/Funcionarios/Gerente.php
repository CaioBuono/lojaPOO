<?php

namespace Projeto\Caio\Funcionarios;

use Projeto\Caio\Modelo\CPF;
use Validacao;

class Gerente extends Funcionario implements Validacao
{
    public function __construct($nome, $genero, CPF $cpf, $endereco, $salario)
    {
        parent::__construct($nome, $genero, $cpf, $endereco, $salario);
    }

    public function validarAcesso($senha)
    {
        if($senha === '1234'){
            echo 'Acesso liberado ao gerente. <br>';
            return;
        }
        echo 'Acesso negado';
        exit();
    }
}