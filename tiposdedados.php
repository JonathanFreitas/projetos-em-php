<?php
######## Tipo de dados Compostos ###########
echo '<pre>';
$carros = array("gol","uno", "palio", "camaro");
var_dump($carros);

$r = is_array($carros)?"E um array": "Não e um array";
echo $r;

// Object

class Cliente{
    private $nome;
    
    public function atribuirNome($nome){
        $this->setNome($nome);
    }
    
    function getNome() {
        return $this->nome;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }


}

$c = new Cliente();
$c->atribuirNome("Jonathan");

var_dump($c);
echo"<br>";
if (is_object($c)) {
    echo "E um Objeto";
}else{
    echo 'Não e um objeto';    
}

