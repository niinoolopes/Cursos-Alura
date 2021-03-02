<?php
function buscaProduto($conexao)
{
  $query = "select * from produtos";
  $resultado = mysqli_query($conexao, $query); 
  return $resultado;
}

function adicionaProduto($conexao, $produto, $preco)
{
  $query = "INSERT INTO produtos (nome,preco) VALUES ('{$produto}',{$preco});";
  $resultado = mysqli_query($conexao, $query);
  return $resultado;
}
