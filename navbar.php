<?php
    if ( isset($_SESSION['usuario_logado']) && !empty($_SESSION['usuario_logado']) &&
        isset($_SESSION['usuario_logado']['id']) && !empty($_SESSION['usuario_logado']['id']) && 
        isset($_SESSION['usuario_logado']['nome']) && !empty($_SESSION['usuario_logado']['nome']) &&
        isset($_SESSION['usuario_logado']['email']) && !empty($_SESSION['usuario_logado']['email']) )
      $link_login_cadastro = 'anunciar.php';
    else
      $link_login_cadastro = 'login.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Serviço Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./estilo.css" />

<style>
    
</style>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="./index.php">
          <img src="img/logo2.png" width="150" height="150" alt="Logo" href="./index.php">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="collapse navbar-collapse d-lg-flex justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo $link_login_cadastro; ?>">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php">Início </a>
              </li>
            </ul>
          </div>
      
        </div>
      </nav>
