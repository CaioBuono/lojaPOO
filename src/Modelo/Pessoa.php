<?php

namespace Projeto\Caio\Modelo;

abstract class Pessoa extends Endereco
{
    private $nome = null;
    private $genero = null;
    private $cpf = null;

    public function __construct($nome, $genero, CPF $cpf, $endereco)
    {
        parent::__construct($endereco);
        $this->validarNome($nome);
        $this->nome = $nome;
        $this->genero = $genero;
        $this->cpf = $cpf;
    }

    public function recuperarNome()
    {
        return $this->nome;
    }

    public function recuperarGenero()
    {
        return $this->genero;
    }

    public function recuperarCpf()
    {
        return $this->cpf->recuperarCpf();
    }

    public function validarNome($nome)
    {
        if(strlen($nome) < 5){
            echo 'Insira um nome válido';
            exit();
        }
    }

}