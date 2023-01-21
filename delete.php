<?php
include("conn.php");
$id = $_POST['id'];

$query = "DELETE FROM users WHERE id = " . $id;
$result = mysqli_query($conn, $query);

if ($result) {
    echo 1;
} else {
    echo 0;
}

?>