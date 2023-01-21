<!DOCTYPE html>

<?php
include('conn.php');
$query = "SELECT * FROM userss";
$result = mysqli_query($conn, $query);

?>
<html>

<head>
  <title>CRUD </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>

  <div class="container justify-content-center">
    <di v class="d-flex justify-content-around align-items-center">
      <h1 class="text-center my-5 text-white">CRUD</h1>
      <div>
        <button class="btn btn-success" data-toggle='modal' data-target='#ModalCadastro'>Cadastrar</button>
        <a href="HMM.PHP"><button class="btn btn-dark">Carregar DB - jsonplaceholder</button></a>
      </div>

  </div>

  <table class="table table-bordered table-striped container">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Website</th>
        <th>Rua</th>
        <th>Numero</th>
        <th>Cidade</th>
        <th>CEP</th>

        <th>Nome Empresa</th>
        <th>Ação</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while ($row = mysqli_fetch_assoc($result)) {
        $address = json_decode($row['address'], true);
        $company = json_decode($row['company'], true); // Adicionei a opção true para que o json_decode retorne um array ao invés de um objeto
        echo "<tr id=" . $row['id'] . ">";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['phone'] . "</td>";
        echo "<td>" . $row['website'] . "</td>";
        echo "<td>" . $address['street'] . "</td>";
        echo "<td>" . $address['suite'] . "</td>";
        echo "<td>" . $address['city'] . "</td>";
        echo "<td>" . $address['zipcode'] . "</td>";

        echo "<td>" . $company['name'] . "</td>";
        echo "<td class='d-flex justify-content-center align-items-center' style='border-bottom: none; border-left: none;'>
<button class='btn btn-primary editBtn mr-lg-3' data-toggle='modal' data-target='#editModal' onclick='edit_record(" . $row['id'] . ")'>Editar</button>
<button class='btn btn-info  mr-lg-3' onclick='tarefas(" . $row['id'] . ")'>Tarefas</button>
<button class='btn btn-danger delete' onclick='delete_record(" . $row['id'] . ")'>Excluir</button>
</td>";
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>




  <!-- Button trigger modal -->


  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Editar Informações</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <input type="hidden" class="form-control" id="editID" name="editID">
            </div>
            <div class="form-group">
              <label for="editNome">Nome</label>
              <input type="text" class="form-control" id="editNome" name="editNome">
            </div>
            <div class="form-group">
              <label for="editEmail">Email</label>
              <input type="email" class="form-control" id="editEmail" name="editEmail">
            </div>
            <div class="form-group">
              <label for="editTelefone">Telefone</label>
              <input type="tel" class="form-control" id="editTelefone" name="editTelefone">
            </div>
            <div class="form-group">
              <label for="editWebsite">Website</label>
              <input type="url" class="form-control" id="editWebsite" name="editWebsite">
            </div>
            <div class="form-group">
              <label for="editRua">Rua</label>
              <input type="text" class="form-control" id="editRua" name="editRua">
            </div>
            <div class="form-group">
              <label for="editNumero">Número</label>
              <input type="number" class="form-control" id="editNumero" name="editNumero">
            </div>
            <div class="form-group">
              <label for="editCidade">Cidade</label>
              <input type="text" class="form-control" id="editCidade" name="editCidade">
            </div>
            <div class="form-group">
              <label for="editCEP">CEP</label>
              <input type="text" class="form-control" id="editCEP" name="editCEP">
            </div>

            <div class="form-group">
              <label for="editNomeEmpresa">Nome da Empresa</label>
              <input type="text" class="form-control" id="editNomeEmpresa" name="editNomeEmpresa">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-primary" id="saveChanges">Salvar Alterações</button>
        </div>
      </div>

    </div>
  </div>

  <!-- MODAL DO CADASTRO -->
  <div class="modal fade" id="ModalCadastro" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Cadastrar Informações</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <input type="hidden" class="form-control" id="id" name="id">
            </div>
            <div class="form-group">
              <label for="nnome">Nome</label>
              <input type="text" class="form-control" id="nnome" name="nnome">
            </div>
            <div class="form-group">
              <label for="eemail">Email</label>
              <input type="email" class="form-control" id="eemail" name="eemail">
            </div>
            <div class="form-group">
              <label for="ttelefone">Telefone</label>
              <input type="tel" class="form-control" id="ttelefone" name="ttelefone">
            </div>
            <div class="form-group">
              <label for="wwebsite">Website</label>
              <input type="url" class="form-control" id="wwebsite" name="wwebsite">
            </div>
            <div class="form-group">
              <label for="rrua">Rua</label>
              <input type="text" class="form-control" id="rrua" name="rrua">
            </div>
            <div class="form-group">
              <label for="nnumero">Número</label>
              <input type="number" class="form-control" id="nnumero" name="nnumero">
            </div>
            <div class="form-group">
              <label for="ccidade">Cidade</label>
              <input type="text" class="form-control" id="ccidade" name="ccidade">
            </div>
            <div class="form-group">
              <label for="ccep">CEP</label>
              <input type="text" class="form-control" id="ccep" name="ccep">
            </div>

            <div class="form-group">
              <label for="eempresa">Nome da Empresa</label>
              <input type="text" class="form-control" id="eempresa" name="eempresa">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-primary" id="saveCadastro">Salvar Alterações</button>
        </div>
      </div>

    </div>
  </div>

  <!-- MODAL TAREFAS -->

  <!-- Large modal -->

  <div class="modal fade text" id="ModalTarefas" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      
      <div id="rap"></div>

    </div>
  </div>
</div>




  <script src="js.js"></script>
  <style>
    body {
      background-color: #333333;
    }

    p,
    h1,
    td,
    tr {
      color: white;
      text-align: center;
      justify-content: center;
      align-items: center;
      vertical-align: inherit !important;
    }
  </style>