<?php

$usuario = 'root';
$senha = 'prof@etec';
$database = 'nvi';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database, 3306);

if ($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}
