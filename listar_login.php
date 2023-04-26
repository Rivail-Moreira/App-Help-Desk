<?php
require_once('./controller/listarUsuario.php');
?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="imagens/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk 
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="./controller/logoff.php">Sair</a>
        </li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de Usuiario
            </div>
            
            <div class="card-body">
              <div class="card mb-3 bg-light">
                <div class="card-body">
                <?php while ($linha = mysqli_fetch_array($queryusuario)) {?>
                  <h5 class="card-title"><?php echo $linha['nome_usuario']?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?php echo $linha['email_usuario']?></h6>
                  <p class="card-text"><?php echo $linha['nome_perfil']?>
                  <a href="./controller/excluirUsuario.php?id=<?php echo $linha['id_usuario']?>">
                  <img src="imagens/excluir.png" width="25" height="25" style="padding:5;">
                  </a>
                  <a href="editar_login.php?id=<?php echo $linha['id_usuario']?>">
                  <img src="imagens/editar.png" width="25" height="25" style="padding:5;">
                  </a> 
                  </p>
                  <?php }?>
                </div>
              </div>
              <div class="row mt-5">
                <div class="col-6">
                  <button class="btn btn-lg btn-warning btn-block" type="submit" onclick="voltar()">Voltar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
<script>
function voltar() {
 window.open('home.php','_self');
}
</script>