<?php
require_once("config/init.php");

require_once("_cabecalho.php");
?>
<div class="container">

  <!-- breadcrumb -->
  <?php breadcrumb([
    ["texto" => "Home"],
  ]); ?>

  <!-- jumbotron -->
  <div class="jumbotron mb-4 py-2 px-4">
    <h1 class="display-2 p-0 m-0">Bem vindo!</h1>
    <p class="lead  m-0">Seja bem vindo pa Loja Niinoo Story, você irá conhecer o que ha de novidade aqui e agora neste momento, clique abaixo para conferir tudo!</p>
    <hr class="my-2">
    <!-- <p>Ele usa classes utilitárias para tipografia e espaçamento de conteúdo, dentro do maior container.</p> -->
    <a class="btn btn-primary btn-sm m-0" href="<?= $path ?>/produto-lista.php" role="button">Lista de produtos</a>
  </div>
  
  <?php render_card_open(); ?>

  <?php render_card_close(); ?>

</div>

<?php require_once("_rodape.php"); ?>