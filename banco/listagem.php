<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="content-language" content="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SENAI - Serviços</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <div class="row row-cols-2 row-cols-md-1 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-body">
            <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Celular</th>
                <th scope="col">Cidade</th>
                <th scope="col">Data de Nascimento</th>
            </tr>
            </thead>
            <tbody>
            <?php
              include 'conecta.php';
              $pesquisa = mysqli_query($conn,"SELECT * FROM pessoa");
              $row = mysqli_num_rows($pesquisa);
              if($row > 0)
              {
                while($registro = $pesquisa->fetch_array()){
                  $data = $registro['data_nascimento'];
                  $id = $registro['id'];
                  echo '<tr>';
                  echo '<td>'.$registro['nome'].'</td>';
                  echo '<td>'.$registro['email'].'</td>';
                  echo '<td>'.$registro['celular'].'</td>';
                  echo '<td>'.$registro['cidade'].'</td>';
                  echo '<td>'.date("d/m/Y", strtotime($data)).'</td>';
                  echo '<td><a href="edita.php?id='.$id.'" class="btn btn-outline-danger">Editar</a>  | <a href="exclui.php?id='.$id.'" class="btn btn-outline-danger">Excluir</a></td>';
                  echo '</tr>';
                }
                echo '</tbody>';
                echo '</table>';
              }
              else {
                echo "Não há registros para listar!";
                echo "</tbody>";
                echo "</table>";
              }
            ?>
          </div>
        </div>
      </div>
    </div>
    </div>
  </body>
</html>