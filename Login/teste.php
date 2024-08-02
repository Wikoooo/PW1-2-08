<?php
include 'Contato.class.php';
$contato = new Contato();

$contato->setNome("Wiko");
$contato->setEmail("descendonaboquinhadagarrafa@gmail.com");
$contato->setSenha("123");

echo"<h2>Nome: ".$contato->getNome()."<br>";
echo "Email: ".$contato->getEmail()."<br>";
echo "Senha: ". $contato->getSenha()."<br>";


