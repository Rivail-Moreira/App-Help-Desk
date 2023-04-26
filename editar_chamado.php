<?php
//require_once('versessao.php');
require_once('./controller/listarCategoria.php');
include("./controller/conecta.php");

$id = $_GET['id'];
$sql =  "Select c.* from chamado c where id_chamado = $id ";
$querychamado = mysqli_query($db,$sql);
$chamado = mysqli_fetch_array($querychamado)
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
              Abertura de chamado
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                  <form action="./controller/editarUsuario.php" method="get">
                  <div class="form-group">
                      <label>ID</label>
                      <input type="text" name="txtid" value="<?php echo $chamado['id_chamado']?>" class="form-control">
                    </div>
                  
                    <div class="form-group">
                      <label>Título</label>
                      <input type="text" name="txttitulo" value="<?php echo $chamado['titulo_chamado']?>" class="form-control">
                    </div>
                    
                    <div class="form-group">
                      <label>Categoria</label>                     
                      <select class="form-control" name="optcategoria" >  
                      <?php while ($linha = mysqli_fetch_array($querycategoria)) {?>                     
                          <option value=<?php echo $linha['id_categoria']?>><?php echo $linha['nome_categoria']?></option>;
                      <?php }?>                   
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label>Descrição</label>
                      <textarea class="form-control" name="txtdescricao" rows="3"><?php echo $chamado['descricao_chamado']?></textarea>
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
 window.open('home.php','_self');
}
</script>