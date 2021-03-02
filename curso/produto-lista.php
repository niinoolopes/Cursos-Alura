<?php
require_once("config/init.php");

require_once("_cabecalho.php");

$produtos = buscaProduto($conexao);
?>
<div class="container">

  <!-- breadcrumb -->
  <?php breadcrumb([
    ["texto" => "Home", "link" => "/"],
    ["texto" => "Listagem"],
  ]); ?>

  <!-- jumbotron -->
  <div class="jumbotron mb-4 py-2 px-4">
    <h1 class="display-4 p-0 m-0">Lista de Produtos!</h1>
    <hr class="my-2">
    <p class="lead  m-0">Aproveite, veja os produtos disponiveis e esperamos que encontre aquilo que possa tornar o seu dia mais feliz!</p>
  </div>

  <?php render_card_open(); ?>

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Preço</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php if (sizeof($produtos)) { ?>
        <?php while ($produto = mysqli_fetch_assoc($produtos)) : ?>
          <tr>
            <th class="py-1" scope="row"><?= $produto["id"] ?></th>
            <td class="py-1"><?= $produto["nome"] ?></td>
            <td class="py-1"><?= $produto["preco"] ?></td>
            <td class="py-1">
              <a href="remover-produto.php?id=<?= $produto['id'] ?>">Remover</a>
            </td>
          </tr>
        <?php endwhile; ?>
      <?php } else { ?>
        <tr>
          <td colspan="3">Não temos produtos no momento!</td>
        </tr>
      <?php } ?>

    </tbody>
  </table>

  <?php render_card_close(); ?>


</div>

<?php require_once("_rodape.php"); ?>