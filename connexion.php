<head>
  <title>Connexion</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>

	<!-- Barre de navigation contenant le logo et le menu burger -->
  <div class="menu">
    <img src="logo.svg" id="logo" style="display: block; margin-left: auto; margin-right: auto; margin-top: -15px; height: 130px; width: 130px">
    <input type="checkbox" class="burger">
    <nav>
      <div id = "trait"></div>
      <a class="nav-link" id ="pan" href="Connexion.php">Connexion</a></li>             

    </nav>
  </div>
  <!-- Division contenant le slogan, superposé au carrousel et qui rest en haut de l'écran lorsque l'on scroll -->
  <div id="slogan">
    <h3 style="margin-top: 10px"><center>Négociez votre bonheur</center></h3>
  </div>


	<!-- Formulaire de connexion -->
  <header class="page-header header container-fluid">
      <div class = "overlay"></div>
    <form action = "connect.php" method="post" style="width:50%; height: 100%; display: flex;flex-direction:  column; justify-content: center; align-content: center; ">
        <div class="form-group">
            <label for="mail" class="col-md-3 control-label"  style="color:Black;">Adresse email :</label>
              <div class="col-md-9">
                  <input type="text" class="form-control" id="mail" name="mail" placeholder="Adresse email" required>
              </div>
        </div>
                                    
        <div class="form-group">
              <label for="pseudo" class="col-md-3 control-label" style="color:Black;">Pseudonyme :</label>
              <div class="col-md-9">
                <input type="text" id="pseudo"  class="form-control" name="pseudo" placeholder="Pseudonyme" required>
                </div>
        </div>

        <!-- Boutton d'enregistrement -->
        <div class="form-group" >                                        
            <div class="col-md-offset-3 col-md-9" style=" margin-top:20px;">
                <input id="btn-signin" type="submit" class="btn btn-info col-md-12" value ="Se connecter" ><i class="icon-hand-right"></i>
                </div>
        </div>
        <!-- Lien vers la page d'inscription -->
      <p style="color : black; margin-left: 17px">Pas encore membre ? <a href="inscription.php">Inscrivez-vous</a></p>
    </form>
  </header>

	<!-- Footer -->
  <footer class="page-footer">
    <div id = "footer">
      <div id = "contact">   
        <h4> CONTACT: </h4>
      </div>
      <div id = "info">
        <p>37 quai de Grenelle, 75015 Paris, France<br>info.webdynamique@ece.fr</p>
      </div>
      <div id = "tel">
        <p>+33901234567 <br> +33901234561</p>
      </div>
      <div id = "follow">
        <h4>SUIVEZ-NOUS ! FOLLOW-US !<a href="https://www.facebook.com/"><img src="facebook.svg"></a><a href="https://www.instagram.com/"><img src="instagram.svg" style="margin-top: 5px"></a></h4>
      </div>
    </div>

  </footer>

</body>


