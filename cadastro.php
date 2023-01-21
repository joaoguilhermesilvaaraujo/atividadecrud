<?php
include("conn.php");

$nome = htmlspecialchars($_POST['nome'], ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
$telefone = htmlspecialchars($_POST['telefone'], ENT_QUOTES, 'UTF-8');
$website = htmlspecialchars($_POST['website'], ENT_QUOTES, 'UTF-8');
$address = '{"street": "'.$_POST["rua"].'","suite": "'.$_POST["numero"].'","city": "'.$_POST["cidade"].'","zipcode": "'.$_POST["cep"].'"}';
$company = '{"name": "'.$_POST["nomeEmpresa"].'"}';

$query = "INSERT INTO userss (id,name, email, address, phone, website, company) VALUES ('" . rand(1,20) . "','" . $nome . "', '" . $email . "', '" . $address . "', '" . $telefone . "', '" . $website . "', '" . $company . "');";
$result = mysqli_query($conn, $query);

if ($result) {
    echo 1;
} else {
    echo 0;
}