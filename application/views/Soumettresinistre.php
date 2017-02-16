
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap 101 Template</title>

  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>
<!--header-->
<body style="background-color:#707070 ;">
  <!--navbar-->
  <style media="screen">
  .navbar{
    border-radius:0px;
    color: white;
    margin-bottom: 75px;
  }
  body{
    background-color: #66757F;
  }
  #blokgri{
    background-color: #dddddd;
  }
  #tabl{
    color: black;
  }
  .well{
    color: white;
    border-color: #404040;
    background-color: #404040;
  }
  h3{
    font-size: 2.5em;
    text-align: center;
  }
  textarea {
    resize: none;
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
        <a class="navbar-brand" href="#">Brand</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
          <li><a href="#">Link</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>
        <style media="screen">

        </style>
        <ul class="nav navbar-nav navbar-right">
          <li><button type="submit" class="btn btn-success " style="margin-top:8px;"><span class="glyphicon glyphicon-user"></span>  Connecter</button></li>


        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <!--Fin Navbar-->

  <div class="container-fluid">

    <div class="col">
      <div class="col-md-10 col-md-offset-1 col-xs-12"  >
        <div class="row">
          <div class="col-xs-12 well">
            <h3 class ="text-center">Soumettre un sinistre</h3>
          </div>
          <div class="col-xs-12 well">
            <div class="col">
              <div class="col-xs-12 col-md-6">
                <div class="row">
                  <div class="col-xs-10">
                    <h6>Type de sinistre</h6> <!-- Choix du type du sinistre -->
                    <div class="dropdown">
                      <select class="form-control" name="type">
                        <option value="a">Tomber dans les toilettes</option>
                        <option value="a">A exploser</option>
                        <option value="a">Manger par votre chien</option>
                        <option value="a">Patate</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-xs-10">   <!-- Choix de la dates du sinistre -->
                    <h6>Date du sinistre</h6>

                    <div class="row">
                      <div class='col-sm-6'>
                        <div class="form-group">
                          <div class='input-group date' id='datetimepicker1'>
                            <input type='text' class="form-control" />
                            <span class="input-group-addon">
                              <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                          </div>
                        </div>
                      </div>
                      <script type="text/javascript">
                      $(function () {
                        $('#datetimepicker1').datetimepicker();
                      });
                      </script>
                    </div>

                  </div> <!--Fin du date picker-->

                  <div class="col-xs-10">   <!-- Il y a til un tiers resp ? -->
                    <h6>Il y'a t'il un tiers responsable </h6>
                    <label class="radio-inline"><input type="radio" name="radiotier">Oui</label>
                    <label class="radio-inline"><input type="radio"  name="radiotier">Non</label>
                  </div> <!-- Fi ndu tier -->

                  <div class="col-xs-10">   <!-- Adresse du responsable-->
                    <h6>Si oui, adresse du responsable </h6>
                    <textarea class="form-control" rows="2" placeholder="9 rue des tulipes 21000 Dijon"></textarea>
                  </div>


                </div>
              </div>
              <div class="col-xs-12 col-md-6">
                <div class="row">
                  <div class="col-xs-12">   <!-- Temoin -->
                    <h6>Il y'a t'il un temoin </h6>
                    <label class="radio-inline"><input type="radio" name="radiotier">Oui</label>
                    <label class="radio-inline"><input type="radio"  name="radiotier">Non</label>
                  </div>
                  <div class="col-xs-12">   <!-- Adresse du responsable-->
                    <h6>Si oui, coordonnées du temoin </h6>
                    <textarea class="form-control" rows="2" placeholder="9 rue des tulipes 21000 Dijon"></textarea>
                  </div>
                  <div class="col-xs-12">

                    <h6>Description du sinistre</h6>
                    <textarea class="form-control" rows="3"></textarea>
                  </div>
                  <div class="col-xs-12">
                    <button type="button" name="button"  class ="btn-primary btn btn-block">Envoyer</button>
                  </div>

                </div>
              </div>

            </div>
            <div class="col-xs-12">
            <br><button type="button" name="button"  class ="btn-primary btn btn-block">Ajout piéces jointes</button><br>

            </div>
            <div class="col-xs-12" id="tabl">
              <!-- Affichage du tableau des sinistres-->
              <div class="panel panel-default">
                <div class="panel-heading">Liste des piéces jointes</div>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>NomDeLaPiéce</th>
                      <th>Action </th>
                    </tr>
                  </thead>
                  <tr>
                    <th scope="row" >1
                      <td>ID CARD</td><td>ACTIONS</td>
                      <tr>
                        <th scope="row" >2</th>
                        <td>Photo</td><td>ACTIONS</td>
                      </table>
                    </div>
                  </div>
                </div>
              </div>




              <!--footer-->
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <script src="bootstrap/js/bootstrap.min.js"></script>
            </body>
            </html>
          </div>
