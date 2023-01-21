<?php
    // include database conn
    include 'conn.php';
    $id = $_POST['id'];
    // select all data
    $query = "SELECT * FROM userss WHERE id = " . $id;
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    if($row !== null){
    $address = json_decode($row['address'], true);
     $company = json_decode($row['company'], true);
      echo $row['id'].',';
      echo $row['name'].',';
      echo $row['email'].',';
      echo $row['phone'].',';
      echo $row['website'].',';
      echo $address['street'].',';
      echo $address['suite'].',';
      echo $address['city'].',';
      echo $address['zipcode'].',';
      echo $company['name'].',';
}
else{
echo "Não foi encontrado dados para o ID especificado.";
}
