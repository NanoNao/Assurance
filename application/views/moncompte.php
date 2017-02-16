<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 101 Template</title>


    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">


  </head>
  <body style="background-color:#707070 ;">

    <!--DEBUT CONTENU-->

    <!--navbar-->
    <style media="screen">
      .navbar{
        border-radius:0px;
        color: white;
        margin-bottom: 75px;

      }
      .well{
        color: white;
        border-color: #404040;
        background-color: #404040;
      }
      .btn-warning{
        background-color: #ff9900;
      }
      .btn-warning:hover{
        background-color: #b36b00;
        border-color: #b36b00;
      }

    </style>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">URAPEDA</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">Contrats</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" class="btn btn-success"><span class="glyphicon glyphicon-user"></span>  Connecter</a></li>
        <li><a href="#">A propos</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--Fin Navbar-->



    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">

              <div class="col-md-12">
                <h3 class="well">Mon Compte</h3>
                  <style media="screen">
                    h3{
                      font-size: 2.5em;
                      text-align: center;
                    }
                  </style>
              </div>


              <div class="col-md-6">
                <div class="well">
                  <h4>Nom :  Bouancheau </h4>
                </div>

                <div class="well">
                  <h4>adresse : 2 rue de la gare </h4>
                </div>

                <div class="well">
                  <h4>tel :06 12 34 56 78 </h4>
                </div>

              </div>


              <div class="col-md-6">
                <div class="well">
                  <h4>Prenom : Alexandre</h4>
                </div>

                <div class="well">
                  <h4>E-mail : bouancheau.alexandre@bubulle.com </h4>
                </div>

                <div class="well">
                  <h4>Sexe : Masculin</h4>
                </div>




              </div>
              <div class="col-md-12">
                <button class="btn btn-warning btn-block" type="button" name="button" style="font-size:2.5em;">Modifier</button>
              </div>


          </div>
        </div>
      </div>
    </div>

    <!--FIN CONTENU-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
