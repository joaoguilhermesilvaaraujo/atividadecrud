<?php
include("conn.php");
$id = mysqli_real_escape_string($conn, $_POST['id']);
$nome = htmlspecialchars($_POST['nome'], ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
$telefone = htmlspecialchars($_POST['telefone'], ENT_QUOTES, 'UTF-8');
$website = htmlspecialchars($_POST['website'], ENT_QUOTES, 'UTF-8');
$address = '{"street": "'.$_POST["rua"].'","suite": "'.$_POST["numero"].'","city": "'.$_POST["cidade"].'","zipcode": "'.$_POST["cep"].'"}';

$company = '{"name": "'.$_POST["nomeEmpresa"].'"}';
$query = "UPDATE userss SET name=?, email=?, address=?, phone=?, website=?, company=? WHERE id=?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "ssssssi", $nome, $email, $address, $telefone, $website, $company, $id);
$result = mysqli_stmt_execute($stmt);

if ($result) {
    echo 1;
} else {
    echo 0;
}
?>