<?php
require_once("config/init.php");

require_once("_cabecalho.php");
?>
<div class="container">

  <!-- breadcrumb -->
  <?php breadcrumb([
    ["texto" => "Home", "link" => "/"],
    ["texto" => "Adicionar"],
  ]); ?>

  <!-- jumbotron -->
  <div class="jumbotron mb-4 py-2 px-4">
    <h1 class="display-4 p-0 m-0">Adicionar Produto</h1>
    <hr class="my-2">
    <p class="lead m-0">Cadastre novos produtos, assim sempre teremos novos clientes novas pessoas felizes!</p>
  </div>

  <?php render_card_open(); ?>

  <form action="<?= $path ?>adiciona-produto.php">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="produto">Nome</label>
        <input type="text" class="form-control" name="produto" id="produto">
      </div>
      <div class="form-group col-md-6">
        <label for="preco">Preço</label>
        <input type="number" class="form-control" step="0.01" name="preco" id="preco">
      </div>
    </div>
    <button type="submit" class="btn btn-primary btn-sm">Cadastrar</button>
  </form>

  <?php render_card_close(); ?>

</div>

<?php require_once("_rodape.php"); ?>