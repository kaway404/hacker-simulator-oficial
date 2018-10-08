<?php
// Configurações do site
$namesite = "Hacker Simulator";
$language = "pt";
date_default_timezone_set('America/Sao_Paulo');
$dataAtual = date('d/m/Y H:i:s');

// ----------------------

// Conexão com banco de dados

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "hackersimulator";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);