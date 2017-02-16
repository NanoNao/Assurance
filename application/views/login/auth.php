
<!DOCTYPE html>
<html lang="en">

<!--header-->
<body style="background-color:#707070 ;">
  <!--SteelSheet-->

  <style media="screen">

  body{
    background-color: #66757F;
  }
  #blokgri{
    background-color: #dddddd;
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


  <div class ="row">  <!-- Bouton connectez vous -->
    <div class="col-md-6 col-md-offset-3 well">
      <h2 class="text-center">Connectez-vous</h2>
    </div>
    <div class="col-md-6 col-md-offset-3 well  ">
      <div class = "row">
        <div class="col-xs-12">
          <div class="col">
            <div class="col-xs-3 col-md-offset-3"> <!-- Indication -->
              <p><label>Identifiant:</label></p>
              <p><label>Mot de passe:</label></p>
            </div>
            <div class="col-xs-3"> <!-- Zone de saisie des identifiant -->
              <p><input type="text" name="username" id="name" placeholder="Identifiant"/></p>
              <p><input type="password" name="password" id="password" placeholder="**********"/></p>
              <button type="button" name="button"  class ="btn-primary btn btn-block">Envoyer</button>
            </div>

          </div>
        </div>
      </div>


    <!--footer-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
  </html>
