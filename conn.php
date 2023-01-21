<?php

// Dados de conexão com o banco de dados
$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'crud';

// Conecta ao banco de dados
$conn = mysqli_connect($host, $username, $password, $db_name);

// Verifica se a conexão foi bem-sucedida
if (!$conn) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}
