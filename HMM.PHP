<?php
$url = "https://jsonplaceholder.typicode.com/users";
$response = json_decode(file_get_contents($url));
include("conn.php");
$queries = array();
foreach ($response as $item) {
    $id = mysqli_real_escape_string($conn, $item->id);
    $name = mysqli_real_escape_string($conn, $item->name);
    $username = mysqli_real_escape_string($conn, $item->username);
    $email = mysqli_real_escape_string($conn, $item->email);
    $phone = mysqli_real_escape_string($conn, $item->phone);
    $website = mysqli_real_escape_string($conn, $item->website);
    $query = "INSERT INTO userss (id,name, username, email, address, phone, website, company) VALUES ('".$id."','".$name."', '".$username."', '".$email."', '".json_encode($item->address)."', '".$phone."', '".$website."', '".json_encode($item->company)."');";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("A query falhou: " . mysqli_error($conn));
    }
    if ($result) {

        header('Location: '.'index.php');

    }
}
