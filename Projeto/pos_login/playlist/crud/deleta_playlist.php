<?php
    session_start();
    include_once '../Projeto/conexao.php';
    

    if(isset($_POST['btn-deletar'])):
    $idNome = mysqli_escape_string($conexao,$_POST['id']);


    $sql1 = "DELETE FROM deezefy.playlist WHERE nome = '$idNome'";

    if(mysqli_query($conexao,$sql1)):
        $_SESSION['mensagemP'] = "Deletado com sucesso!";
        header('Location: ../indexP.php');
        else:
            $_SESSION['mensagemP'] = "Erro ao deletar!";
            header('Location: ../indexP.php');
        endif;
    endif;
?>