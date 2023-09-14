<?php

spl_autoload_register(function($classeRecebida){
    $chamaClasse = str_replace('Projeto\Caio', 'src', $classeRecebida);
    $chamaClasse = str_replace('\\', DIRECTORY_SEPARATOR, $chamaClasse);
    $chamaClasse = '.php';

    if(file_exists($chamaClasse)){
        require_once $chamaClasse;
    }
});