<?php
require_once("config/variaveis.php");

function dd($array)
{
  echo "<pre>";
  echo print_r($array);
  echo "</pre>";
  exit;
}

function pt($array)
{
  echo "<pre>";
  echo print_r($array);
}


// RENDERS
function render_card_open(){
  echo '<div class="card p-3 h-50">';
}
function render_card_close(){
  echo '</div>';
}

function breadcrumb($arrs)
{
  $thml = "<nav aria-label='breadcrumb'>";
  $thml .= " <ol class='breadcrumb my-2 py-2'>";
  foreach ($arrs as $key => $arr) :

    $active = isset($arr['active']) ? "active" : "";
    $thml .= "<li class='breadcrumb-item {$active}' aria-current='page'>";

    if (isset($arr['link'])) {
      $thml .= "<a href='/cursos/alura-PHPeMYSQL/curso/{$arr['link']}'>";
      $thml .= "{$arr['texto']}";
      $thml .= "</a>";
    } else {
      $thml .= "{$arr['texto']}";
    }
    $thml .= "</li>";

  endforeach;
  $thml .= " </ol>";
  $thml .= "</nav>";
  echo $thml;
}
