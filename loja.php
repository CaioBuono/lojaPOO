<?php

require_once 'src/Modelo/Endereco.php';
require_once 'src/Modelo/Pessoa.php';
require_once 'src/Modelo/CPF.php';
require_once 'src/Funcionarios/Funcionario.php';
require_once 'src/Funcionarios/Desenvolvedor.php';
require_once 'src/Services/Validacao.php';
require_once 'src/Funcionarios/Gerente.php';


use Projeto\Caio\Funcionarios\Desenvolvedor;
use Projeto\Caio\Funcionarios\Gerente;
use Projeto\Caio\Modelo\CPF;

$enderecoUm = [
    'cidade' => ['Uma cidade qualquer'],
    'bairro' => ['Um bairro qualquer'],
    'rua' => ['Uma rua qualquer'],
    'numero' => ['71B']
];

$enderecoDois = [
    'cidade' => ['Cidade do gerente'],
    'bairro' => ['Bairro do gerente'],
    'rua' => ['Rua do gerente'],
    'numero' => ['71B']
];

$funcionario = new Desenvolvedor('Caio Buono', 'M', new CPF('123.456.789-10'), $enderecoUm, 3000);
$outroFuncionario = new Gerente('Mariana', 'F', new CPF('456.987.888-11'), $enderecoDois, 5800);

$outroFuncionario->validarAcesso('1234');

echo '<pre>Primeiro:<br>'; print_r($funcionario); echo '</pre>';
echo '<pre>Segundo:<br>'; print_r($outroFuncionario); echo '</pre>';