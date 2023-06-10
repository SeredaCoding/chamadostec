<?php
  require_once "validador_acesso.php";
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>Home - Chamados Técnicos</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-home {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>
    <?php
      require_once "menu.php";
    ?>

    <div class="container">    
      <div class="row">

        <div class="card-home">
          <div class="card">
            <div class="card-header">
              Menu
            </div>
            <div class="card-body">
              <div class="row">

                <div class="col-6 d-flex justify-content-center">
                  <a href="abrir_chamado.php">
                    <img class="ml-4 p-1" src="img/formulario_abrir_chamado.png" width="70" height="70">
                    <h5>Abrir chamado</h5>
                  </a>   
                </div>

                <div class="col-6 d-flex justify-content-center">
                  <a href="consultar_chamado.php">
                    <img class="ml-5 p-1" src="img/formulario_consultar_chamado.png" width="70" height="70">
                    <h5>Consultar chamado</h5>
                  </a>
                </div>

              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>