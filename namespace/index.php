<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Gabrielle Fernandes");
$cad->setEmail("gabriellelfernandesn@gmail.com");
$cad->setSenha("*********");

$cad->registrarVenda();

?>