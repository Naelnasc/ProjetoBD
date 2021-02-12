<?php
    session_start();
    include_once '../Projeto/conexao.php';

    if(isset($_POST['btn-cadastrar'])):
        $nomeP = mysqli_escape_string($conexao,$_POST['nome']);
        $emailP = mysqli_escape_string($conexao,$_POST['email']);
        $dataP = mysqli_escape_string($conexao,$_POST['data']);
        $statusP = mysqli_escape_string($conexao,$_POST['status']);


    //verifica se o usuario está cadastrado e depois inseri,na condição if ,logo a baixo
    $sql1 = "SELECT * FROM deezefy.usuario WHERE email = '$emailP';";
    $sql2 = "INSERT INTO deezefy.playlist VALUES('$nomeP','$emailP','$dataP','$statusP');";

    
    //Verificando se foi possível o cadastro ou não
    //Dependendo da resposta do banco, aparece uma mensagem na página principal
    //caso tenha cadastrado ou não
    if(mysqli_query($conexao,$sql1) and mysqli_query($conexao,$sql2)):
        $_SESSION['mensagemP'] = "Cadastrado com sucesso!";
        header('Location: ../indexP.php');
        else:
            $_SESSION['mensagemP'] = "Erro ao cadastrar";
            header('Location: ../indexP.php');
        endif;
    endif;
?>