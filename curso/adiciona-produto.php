<?php
require_once("config/init.php");

require_once("_cabecalho.php");

// variaveis
$produto = $_GET['produto'];
$preco = $_GET['preco'];

$result = adicionaProduto($conexao, $produto, $preco);
mysqli_close($conexao);
?>

<div class="container">

  <?php render_card_open(); ?>

  <?php if ($result) { ?>
    <p class="text-success">Produto <?= $produto ?>,<?= $preco ?> adicionado com sucesso!</p>
  <?php } else {
    $msg = mysqli_error($conexao);
    ?>
    <p class="text-danger">Produto não adicionado: <?= $msg ?></p>
  <?php } ?>

  <?php render_card_close(); ?>
</div>

<?php require_once("_rodape.php"); ?>