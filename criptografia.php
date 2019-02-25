<?php

$senha = "123456";

$nomasenha = base64_encode($senha);

echo "base64: ".$nomasenha."<br>";
echo "Sua senha e ".base64_decode($nomasenha);


echo "<hr>";
//md5 nao pode descriptocrafar
echo "md5: ".md5($senha);

echo "<br>";
//sha1 nao pode descriptocrafar
echo "sha1: ".sha1($senha);