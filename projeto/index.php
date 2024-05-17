<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projeto Empresa</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Marketicode</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="home.html">Home</a></li>
            <li><a href="sobre.html">Sobre</a></li>
            <li><a href="contato.html">Contato</a></li>
            <li><a href="equipe.html">Equipe</a></li>
            <li><a href="Depoimento.html">Depoimento</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
   
   




    <div class="box">
      <section class="banner">
        <div class="overlay"></div>
        <div class="container chamada-banner">
          <div class="row">
              <div class="col-md-12 text-center">
                  <h2><?php echo htmlentities('<'); ?>Marketicode<?php echo htmlentities('>');  ?></h2>
                  <p>Empresa voltada para desenvolvimento web e marketing digital</p>
                  <a href="./Saiba.html">Saiba Mais!</a>
              </div><!--col-md-12-->
          </div><!--row-->
        </div>
      </section>
      <section class="cadastro-lead">
          <div class="container">
            <div class="row text-center">
                <div class="col-md-6">
                  <h2><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Entre na nossa lista!</h2>
                </div>
                <div class="col-md-6">
                  <form method="post">
                    <input type="text" name="nome" /><input type="submit" value="Enviar" />
                  </form>
                </div>
            </div>
          </div>
      </section>

    
    

      
      </section>


     
      <footer>
        <p class="text-center">Todos os direitos reservados!</p>
      </footer>

    </div><!--box-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>