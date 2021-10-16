<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="content-language" content="pt-br"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Red Moon Bar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <header>
           <center><img src="imagens/imagem bar.jpg" width="20%" height="20%"/><center>
            <nav class="navbar navbar-expand-lg navbar-ligth bg-ligth">
                <div class="container-fluid" style = "background-color:">
                    <h3><b>Red Moon Bar</b></h3><center>
                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Inserir Registro</button>
                </div>
            </nav>
        </header>
        <div class="container-fluid">
            <section>
                <br/>
                <div class="row justify-content-center row-cols-2 row-cols-md-1 mb-3">
                    <div class="col">
                        <div class="card mb-2 rounded-2 shadow-sm">
                            <div class="card-hearder py-2 text-center">
                                <h4 class="my-0 fw-normal"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/></svg>&nbsp;<b>Editar Registro</b></h4>
                            </div>
                            <div class="card-body text-left">
                               <?php
                                    include 'conecta.php';
                                    $id = $_GET['id'];
                                    $sql = "SELECT * FROM pessoa WHERE id=$id";
                                    $query = $conn->query($sql);
                                    while($dados = $query->fetch_assoc()){
                                        $nome = $dados['nome'];
                                        $email = $dados['email'];
                                        $celular = $dados['celular'];
                                        $cidade = $dados['cidade'];
                                        $data_nascimento = $dados['data_nascimento'];
                                    }
                               ?>
                            <form action="editar.php?id=<?php echo $id; ?>" method="POST">
                                <div class="form-group col-7">
                                    <label>Nome</label>
                                    <input type="text" class="form-control" name="nome" value="<?php echo $nome; ?>" required/>
                                    <br/>
                                    <label>E-mail</label>
                                    <input type="texte" class="form-control" name="email" value="<?php echo $email; ?>" required/>
                                    <br/>
                                    <label>Celular</label>
                                    <input type="number" class="form-control" name="celular" value="<?php echo $celular; ?>" required/>
                                    <br/>
                                    <label>Cidade</label>
                                    <input type="text" class="form-control" name="cidade" value="<?php echo $cidade; ?>" required/>
                                    <br/>
                                    <label>Data_Nascimento</label>
                                    <input type="date" class="form-control" name="data_nascimento" value="<?php echo $data_nascimneto; ?>" required/>
                                    <br/>
                                    <button type="submit" class="btn btn-outline-dark">Editar</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-outline-dark" href="index.php" role="button">Voltar</a>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Inserir Registro</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?php
                            include 'cadastro.php';
                        ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <hr/>
            <center><b>Acesso a Banco de Dados - Desenvolvida pelo aluno Paulo Gomes - 2021</b></center>
        </footer>
    </body>
</html>