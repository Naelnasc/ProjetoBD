<?php
    session_start();
    require_once 'conexao.php';

    if(isset($_POST['btn-deletar'])):
    $idEmail = mysqli_escape_string($connect,$_POST['id']);


    $sql1 = "DELETE FROM deezefy.artista WHERE email = '$idEmail'";
    $sql2 = "DELETE FROM deezefy.usuario WHERE email = '$idEmail'";

    if(mysqli_query($connect,$sql1) and mysqli_query($connect,$sql2)):
        $_SESSION['mensagem'] = "Deletado com sucesso!";
        header('Location: ../indexA.php');
        else:
            $_SESSION['mensagem'] = "Erro ao deletar!";
            header('Location: ../indexA.php');
        endif;
    endif;
?>