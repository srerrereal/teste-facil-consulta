<?php


        session_start();


        $mysqli = new mysqli('localhost', 'root', '', 'crud' )or die(mysqli_error($mysqli));

        $id = 0;
        $nome = '';
        $senha = '';
        $email = '';
        $endereco_consultorio = '';
        $update = false;


        if (isset($_POST['save'])){

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $endereco_consultorio = $_POST["endereco_consultorio"];



        $mysqli->query("INSERT INTO `banco-dados` (`nome`, `email`, `senha`, `endereco_consultorio`) VALUES ('$nome', '$email', '$senha', '$endereco_consultorio') ") or
        die($mysqli->error);

          $_SESSION['message'] = "Cadastro realizado com sucesso!";
          $_SESSION['msg_type'] = 'success';

          header('location:/modelo-fc-master/index.php');

        }

        if (isset($_GET['delete'])){
            $id = $_GET['delete'];
        $mysqli->query("DELETE FROM `banco-dados` WHERE `id` = '$id' ") or die($mysqli->error);

        $_SESSION['message'] = 'Usuário apagado com sucesso!';
        $_SESSION['msg_type'] = 'danger';

         header("location:/modelo-fc-master/index.php");

        }
     if (isset($_GET['edit'])){
        $id = $_GET['edit'];
        $result = $mysqli->query("SELECT * FROM `banco-dados` WHERE `id`='$id' ") or die ($msqli->error());

        if($result->num_rows){
        $jumbotron = $result->fetch_array();
            $nome = $jumbotron["nome"];
            $email = $jumbotron["email"];
            $senha = $jumbotron["senha"];
            $endereco_consultorio = $jumbotron["endereco_consultorio"];

        }

    }

        if(isset($_POST["update"])){
            $id = $_POST["id"];
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $endereco_consultorio = $_POST["endereco_consultorio"];


        $mysqli-> query("UPDATE `banco-dados` SET data_alteracao=now(), `nome`='$nome', `email`='$email', `senha`='$senha', `endereco_consultorio`='$endereco_consultorio' WHERE `id`='$id' ") or
        die($mysqli->error());

        $_SESSION['message'] = "As Informações foram alteradas!";
        $_SESSION['msg_type'] = "success";

        header('location:/modelo-fc-master/index.php');
}


        ?>