<?php
    session_start();
    require_once 'conexao.php';

    if(isset($_POST['btn-cadastrar'])):
    $email = mysqli_escape_string($connect,$_POST['email']);
    $senha = mysqli_escape_string($connect,$_POST['senha']);
    $nomeArtistico = mysqli_escape_string($connect,$_POST['nomeArtistico']);
    $biografia = mysqli_escape_string($connect,$_POST['biografia']);
    $ano = mysqli_escape_string($connect,$_POST['ano']);
    $data = mysqli_escape_string($connect,$_POST['data']);


    $sql1 = "INSERT INTO deezefy.usuario VALUES('$email',md5('$senha'),'$data')";
    $sql2 = "INSERT INTO deezefy.artista VALUES('$email','$nomeArtistico','$biografia','$ano')";

    if(mysqli_query($connect,$sql1) and mysqli_query($connect,$sql2)):
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ../indexA.php');
        else:
            $_SESSION['mensagem'] = "Erro ao cadastrar";
            header('Location: ../indexA.php');
        endif;
    endif;
?>