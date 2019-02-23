<?php
//   ARRAYS

$carros = array("Saveiro", "Corsa", "Monza");
echo "<pre>";
echo $carros[2];
echo "<hr>";
print_r($carros);

$objetos = array(   0=>"faca",
                    1=>"coher",
                    2=>"tesoura",
                    3=>"camisa"
);

print_r($objetos);
$objetos[] = "panela";
print_r($objetos);

$clientes = [      "Rafael",
                   "Gustavo",
                   "Bruna",
                   "Fernando"];
print_r($clientes);
// CONTAR ELEMENTOS DO ARRAY
echo "<h1> Total de elementos no Array: ".count($clientes). "</h1>";

// FOREACH

foreach ($clientes as $c){
    echo "$c <br>";
}

