<html>

<head>
  <title>Minha Loja</title>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/loja.css">
  <script src="js/jquery-3.4.1.js"></script>

</head>

<body>
  <nav class="navbar-expand-lg navbar navbar-dark bg-dark">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand text-white-50" href="<?= $path ?>">Minha Loja</a>

        <ul class="nav navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">Produtos</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?= $path ?>/produto-lista.php">Lista de produtos</a>
              <a class="dropdown-item" href="<?= $path ?>/produto-formulario.php">Adicionar novo produto</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">Paginas</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?= $path ?>/produto-formulario.php">Sobre</a>
            </div>
          </li>

          <!-- 
            <li class="nav-item">
              <a class="nav-link text-white" href="<?= $path ?>/sobre.php">Sobre</a>
            </li> 
          -->
        </ul>

      </div>
    </div>
  </nav>