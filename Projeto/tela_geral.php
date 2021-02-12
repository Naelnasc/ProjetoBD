<html lang="pt-br" dir = "ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Tela Principal</title>
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
          <li><a href="tela_geral.html">Home</a></li>
          <li><a href="indexA.php">Artista</a></li>
          <li><a href="#">Ouvinte</a></li>
          <li><a href="#">Música</a></li>
          <li><a href="#">Playlist</a></li>
          <?php
                //session_start();
                //include('includes/verifica_sessao.php');
              ?>
              <!--<li>Usuário:<?php// echo $_SESSION['usuario'];?></li>
              <li><a href="includes/logout.php">Sair</a></li>-->
        </ul>
      </div>
    </nav>


  </body>
  </html>
