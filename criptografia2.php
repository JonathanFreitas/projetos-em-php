<?php

$senha = 123456;

$senhaSegura = password_hash($senha, PASSWORD_DEFAULT);

echo "Senha com hash: ".$senhaSegura;

echo "<br> ";

$options = [
                'cost' => 10
];

$senhaSegura2 = password_hash($senha, PASSWORD_DEFAULT, $options);
echo "Senha com hash2: ".$senhaSegura2;

echo "<hr> ";

echo "VERIFICAÇÂO";
$senha_db = '$2y$10$khMlIiBsM8xBrdHDUmlmlOuqpXX4zp0nSjYlU/l6DVsoucgi6mOVW';
if(password_verify($senha, $senha_db)){
    echo "<br>senha valida";
} else {
    echo "<br>senha invalida";
}