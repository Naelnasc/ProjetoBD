<?php
  //incluindo a conexao
  include_once '../Projeto/conexao.php';
//select's
  if(isset($_GET['id'])):
    $nomeBD = mysqli_escape_string($conexao,$_GET['id']);
    $sql = "SELECT nome,email,data_da_criacao,status FROM deezefy.playlist WHERE nome = '$nomeBD';";
    $resultado = mysqli_query($conexao,$sql);
    $dados = mysqli_fetch_array($resultado);
  endif;
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Editar Playlist </title>
        <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

      </head>

      <body>
      <nav>
          <div class="nav-wrapper">
            <a href="#" class="brand-logo">Menu</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a href="#">Home</a></li>
              <li><a href="indexP.php">Playlist</a></li>
            </ul>
          </div>
        </nav>

    <div class="row">
      <div class="col s12 m6 push-m3">
        <h3 class="light">Nova Playlist</h3>
        <form action="crud/atualiza_playlist.php" method="POST">

          <div class="input-field col s12">
            <input type="hidden" name="id" value="<?php echo $dados[0];?>">
            <input type="text" name="nome" id="nome" value="<?php echo $dados['nome'];?>">
            <label for="nome">Nome</label>
          </div>

          <div class="input-field col s12">
            <input type="text" name="email" id="email" value="<?php echo $dados['email'];?>">
            <label for="email">Email</label>
          </div>

    
          <div class="input-field col s12">
            <input type="text" name="data" id="data" placeholder="DD-MM-YYYY" required pattern="[0-9]{2}-[0-9]{2}-[0-9]{4}" value="<?php echo $dados['data_da_criacao'];?>">
            <label for="data">Data da Criação</label>
          </div>

          <div class="input-field col s12">
            <input type="text" title="Ativo/Inativo" name="status" id="status" value="<?php echo $dados['status'];?>">
            <label for="status">status</label>
          </div>


          <button type="submit" name="btn-editar" class="btn">Atualizar</button>
          <a href="indexP.php" class="btn green">Lista de Playlist</a>
        </form>
      </div>
    </div>
  </body>
</html>