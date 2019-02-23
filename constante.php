<?php
//CONSTANTES
define("NOME", "Maria");
define("IDADE",34);
define("ALTURA", 1.60);
define("CASADA", "true");
echo "<pre>";
var_dump(NOME, IDADE, ALTURA, CASADA);

define("TIMES", ['Flamengo', 'Vasco', 'Fluminense']);

var_dump(TIMES);
echo TIMES[0];

function exibeNome(){
    echo NOME;
}

exibeNome();