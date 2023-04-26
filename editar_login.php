<?php
require_once('./controller/listarPerfil.php');

$id = $_GET['id'];
$sql =  "Select u.* from usuario u where id_usuario = $id ";
$queryusuario = mysqli_query($db,$sql);
$usuario = mysqli_fetch_array($queryusuario)

?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-abrir-chamado {
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

        <div class="card-abrir-chamado">
          <div class="card">
            <div class="card-header">
              Editar Usuario 
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                  <form action="./controller/editarUsuario.php" method="get">
                  
                  <div class="form-group">
                      <label>ID</label>
                      <input type="text" name="txtid" value="<?php echo $usuario['id_usuario']?>" class="form-control" >
                    </div>
                    <div class="form-group">
                      <label>Nome</label>
                      <input type="text" name="txtnome" value="<?php echo $usuario['nome_usuario']?>" class="form-control" >
                    </div>

                    <div class="form-group">
                      <label>E-mail</label>
                      <input type="email" name="txtemail" value="<?php echo $usuario['email_usuario']?>" class="form-control" >
                    </div>

                    <div class="form-group">
                      <label>Senha</label>
                      <input type="password" name="txtpassword" value="<?php echo $usuario['senha_usuario']?>" class="form-control" >
                    </div>
                    
                    <div class="form-group">
                      <label>Perfil</label>                     
                      <select class="form-control" name="optperfil">  
                      <?php while ($linha = mysqli_fetch_array($queryperfil)) {?>                     
                          <option value=<?php echo $linha['id_perfil']?>><?php echo $linha['nome_perfil']?></option>;
                      <?php }?>                   
                      </select>
                    </div>

                    <div class="row mt-5">
                      <div class="col-6">
                        <button class="btn btn-lg btn-warning btn-block" type="submit" onclick="voltar()">Voltar</button>
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg btn-info btn-block" type="submit" >Abrir</button>
                      </div>
                    </div>
                  </form>

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
 window.open('home.php');
}
</script>