<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
<!-- Latest compiled and minified CSS & JS -->
<link rel="stylesheet" media="screen" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
<link rel="stylesheet" media="screen" href="src/model/css/style.css"/>
<script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<head>
    <title>Fácil Consulta - Painel</title>
</head>




<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <a class="navbar-brand" href="#">

            <img src="src/img/icon.png" width="30" height="30" class="" alt=""/> Fácil Consulta

        </a>


    </div>



</nav>



                        <!-- Navbar -->

<?php require_once 'src/config.php'; ?>

<?php
        $mysqli = new mysqli('localhost', 'root', '', 'crud') or die(mysqli_error($mysqli));
            $result = $mysqli->query(" SELECT * FROM `banco-dados` ") or die($mysqli->error);
        ?>

<body class="panel-body">


<div class="jumbotron login">
        	<span class="container text-center align-middle">
        		<h1>
                    Cadastro de Médicos Fácil Consulta
                </h1>
        		<p>Seja bem-vindo a nossa plataforma!</p>

        	</span>
</div>


<!-- Botões





<!-- MODAL -->

<!-- Button trigger modal -->

    <div class="d-flex justify-content-center">


            <div class="row" style="margin-top: 30px">
                

                <div class="col">
                    <button type="button" class="btn btn-primary btn-lg " data-toggle="modal" data-target="#exampleModal">Criar Cadastro</button>

                </div>

            </div>
    </div>
<!-- Modal -->



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalTitle">Editar Dados</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="myModalBody">


                <?php

                        if(isset($_SESSION['message'])): ?>

                <div class="alert alert-<?=$_SESSION['msg_type']?>" >
                    <?php
                            echo $_SESSION['message'];
                            unset($_SESSION['message']);
                            ?>

                </div>

                <?php endif ?>




                <form action="src/config.php" method="POST" data-toggle="validator" role="form" id="MyForm">
                    <input type="hidden" name="id" value="<?php echo $id ?>"/>


                           <!-- FORM NO MODAL -->

                    <div class="form-group has-feedback">
                        <label for="nome" class="control-label">Nome</label>

                        <div class="input-group">
                            <input type="text"
                                   minlength="6"
                                   class="form-control"
                                   name="nome"
                                   placeholder="Ex.: João Maria"
                                   value="<?php echo $nome ?>"
                                   required/>
                        </div>
                        <div class="help-block with-errors">Preencha seu nome</div>
                    </div>

                    <div class="form-group has-feedback">
                        <label for="email" class="control-label">Email</label>
                        <div class="input-group">
                            <input type="email"
                                   minlength="6"
                                   class="form-control"
                                   name="email"
                                   placeholder="seu@email.com"
                                   value="<?php echo $email ?>"
                                   required/>
                        </div>
                        <div class="help-block with-errors">Preencha seu e-mail</div>
                    </div>


                    <div class="form-group has-feedback">
                        <label for="endereco_consultorio" class="control-label">Endereço</label>
                        <div class="input-group">
                            <input type="text"
                                   minlength="6"
                                   class="form-control"
                                   name="endereco_consultorio"
                                   placeholder="Av. principal, 2"
                                   value="<?php echo $endereco_consultorio ?>"
                                   required/>
                        </div>
                        <div class="help-block with-errors">Preencha seu Endereço</div>
                    </div>



                    <div class="form-group has-feedback">
                        <label for="senha1" class="control-label">Senha</label>
                        <div class="input-group">
                            <input type="password"
                                   minlength="6"
                                   class="form-control"
                                   name="senha"
                                   placeholder="Sua senha"
                                   value="<?php echo $senha ?>"

                                   required/>
                        </div>
                        <div class="help-block with-errors">Crie uma senha use letras e números (0-9 | A-Z)</div>
                    </div>



                    <div class="form-group">


                        <button type="submit" name='update' class="btn btn-info">Alterar</button>

                        <button type="submit" name='save' class="btn btn-primary">Cadastrar</button>

                    </div>
                </form>

            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>








<!-- Modal -->



                <!-- TABELA CRUD -->

            <div class="jumbotron align-middle login">
                <table class="table table-hover table-dark table-style">
                    <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Endereço</th>
                        <th scope="col align-middle">Ações</th>
                    </tr>
                    </thead>
                    <?php
                            while ($jumbotron = $result->fetch_assoc()): ?>


                    <tbody>
                    <tr class="align-middle">
                        <td><?php echo $jumbotron['nome']; ?></td>
                        <td><?php echo $jumbotron['endereco_consultorio']; ?></td>
                        <td><a href="?edit=<?php echo $jumbotron['id']; ?>"
                               name="edit"
                               class="btn btn-info btn-panel"
                               id="editar"

                        >Editar</a>
                            <a
                                href="src/config.php?delete=<?php echo $jumbotron['id'];?>"
                                name='delete'
                                class="btn btn-danger">Excluir</a></td>
                    </tr>


                    <?php endwhile; ?>
                </table>


            </div>





</body>

<script type="text/javascript">


    $(window).on('load',function(){
        $('#exampleModal').modal('show');

});
</script>

</html>