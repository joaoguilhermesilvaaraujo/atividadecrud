

<table class="table table-bordered table-striped container">

    <thead style="background-color: #c2c2c2;">
      <tr class="text-black">
        <th style="color: black;">Nome</th>
        <th style="color: black;">Titulo</th>
        <th style="color: black;">Finalizada</th>
      </tr>
    </thead>
    <tbody style="background-color: black; color: black;">
      <?php
      include('conn.php');
      $id = $_POST['id'];
      $query = "SELECT * FROM userss where id like '$id'";
      $result = mysqli_query($conn, $query);
      $row = mysqli_fetch_assoc($result);
      
      $name = $row['name'];

      $query = "SELECT * FROM tasks where userId like '$id'";
      $result = mysqli_query($conn, $query);
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $name . "</td>";
        echo "<td>" . $row['title'] . "</td>";
        echo "<td>";
        if($row['completed'] == 1){
            echo '<p style="color:green;">SIM</p>';
        }else{
            echo '<p style="color:red;">NÃO</p>';
        }
        echo "</td>";

      
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>


  