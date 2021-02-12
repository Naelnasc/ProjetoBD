<?php
    session_start();
    require_once 'conexao.php';

    if(isset($_POST['btn-editar'])):
    $email = mysqli_escape_string($connect,$_POST['email']);
    $senha = mysqli_escape_string($connect,$_POST['senha']);
    $nomeArtistico = mysqli_escape_string($connect,$_POST['nomeArtistico']);
    $biografia = mysqli_escape_string($connect,$_POST['biografia']);
    $ano = mysqli_escape_string($connect,$_POST['ano']);
    $data = mysqli_escape_string($connect,$_POST['data']);
    $idEmail = mysqli_escape_string($connect,$_POST['id']);


    $sql1 = "UPDATE deezefy.usuario SET email = '$email',senha = md5('$senha'),data_de_nascimento = '$data' WHERE email = '$idEmail';";
    $sql2 = "UPDATE deezefy.artista SET nome_artistico = '$nomeArtistico',biografia = '$biografia',ano_formacao = '$ano' 
    WHERE email = '$email';";

    if(mysqli_query($connect,$sql1) and mysqli_query($connect,$sql2)):
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        header('Location: ../indexA.php');
        else:
            $_SESSION['mensagem'] = "Erro ao atualizar";
            header('Location: ../indexA.php');
        endif;
    endif;
?>