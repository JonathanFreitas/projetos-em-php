<?php


$nome= "Fabio Santos";

echo '<pre>';
echo "TESTE ESCOPO DE VARIAVEL";
echo "<br>";
function exibeNome(){
    global $nome;
    echo "$nome";
}

exibeNome();

########################################
echo "<br>";

function exibeCidade(){
    //ESCOPO LOCAL
    global $cidade;
    $cidade = "Brasilia";
    
}

exibeCidade();
echo $cidade;
echo "<hr> <br>";

$a = 3;
$b = 5;

function soma(){
    echo $GLOBALS['a'] + $GLOBALS['b'];
}

soma();