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
      <a class="nav-link" href="pagedacceuil.php">Accueil</a></li>             
      <a class="nav-link" href="categories.php">Catégories</a></li>                      
      <a class="nav-link" href="connexion.php">Vendre</a></li>
      <a class="nav-link" href="connexion.php">Admin</a></li>
      <a class="nav-link" href="profil.php">Ma Page</a></li>
      <a class="nav-link" href="panier.php" id ="pan">Mon panier<img src="panier_noir.svg" style="width: 40px; height: 40px; margin-right: -5px"></a>
    </nav>
  </div>
  <!-- Division contenant le slogan, superposé au carrousel et qui rest en haut de l'écran lorsque l'on scroll -->
  <div id="slogan">
    <h3 style="margin-top: 10px"><center>Négociez votre bonheur</center></h3>
  </div>


	<!-- Formulaire de connexion -->
		<form action = "connect.php" method="post" style="width:50%; height: 100%; display: flex;flex-direction:  column; justify-content: center; align-content: center; " id=first>
  			<div class="form-group">
       			<label for="email" class="col-md-3 control-label">Email</label>
          		<div class="col-md-9">
               		<input type="text" class="form-control" id="email" name="email" placeholder="Adresse email" required>
          		</div>
  			</div>
                                    
     		<div class="form-group">
          		<label for="register_password" class="col-md-3 control-label">Mot de passe</label>
            	<div class="col-md-9">
             		<input type="password" id="register_password" data-minlength="8" class="form-control" name="password" placeholder="mot de passe" required>
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


