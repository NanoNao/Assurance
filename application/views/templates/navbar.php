<!--
  Navbar assurance urapeda, elle sera adapter au niveau de droit des utilisateurs
-->

  <nav class="navbar navbar-default">
    <div class="container-fluid"><!--Debut de la navbar-->

      <div class="navbar-header">
        <a class="navbar-brand" href="#">Urapeda</a>
      </div>

      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Page 1</a></li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><button type="button" name="button"><span class="glyphicon glyphicon-user"></span> Mon Compte</button></li>
        <li><a href="#">A propos</a></li>
      </ul>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

        <ul class="nav navbar-nav navbar-right">
            <?
              if(isset    ($this->session->userdata['logged_in']))
              {
                  $var = $this->session->userdata["logged_in"];
                  echo "<li><a>Welcome ".$var['username']."</a></li>";
                  echo'<li><a href="'.site_url().'auth/logout/'.'">Log out</a></li>';
              }
            else
            {
               echo' <li><a href="'.site_url().'auth/'.'">Log here</a></li>';
            }
            ?>


        </ul>
      </div><!-- /.navbar-collapse -->
  </nav><!--Fin de la navbar-->


  <!--La div container fluid reste ouverte jusqu'au footer-->
