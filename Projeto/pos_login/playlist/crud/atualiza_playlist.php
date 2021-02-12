<?php
    session_start();
    include_once '../Projeto/conexao.php';

    

    if(isset($_POST['btn-editar'])):
    $idNome = mysqli_escape_string($conexao,$_POST['id']);
    $nomeN = mysqli_escape_string($conexao,$_POST['nome']);
    $email = mysqli_escape_string($conexao,$_POST['email']);
    $data = mysqli_escape_string($conexao,$_POST['data']);
    $status = mysqli_escape_string($conexao,$_POST['status']);
    


    $sql1 = "SELECT * FROM deezefy.usuario WHERE email = '$email';";
    $sql2 = "UPDATE deezefy.playlist SET nome = '$nomeN',email = '$email',data_da_criacao = '$data',status = '$status' WHERE nome = '$idNome';";

    if(mysqli_query($conexao,$sql1) and mysqli_query($conexao,$sql2)):
        $_SESSION['mensagemP'] = "Atualizado com sucesso!";
        header('Location: ../indexP.php');
        else:
            $_SESSION['mensagemP'] = "Erro ao atualizar";
            header('Location: ../indexP.php');
        endif;
    endif;
?>