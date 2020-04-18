<!DOCTYPE html>
<html>
<head>
  <title>Produit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

  <style type="text/css">
  	#produit
  	{
  		margin-top: 200px;
  	}

  	#nom
  	{
  		font-family: 'Roboto-bold', sans-serif;
  		margin-top: 200px;
  		margin-left: -44px;
  	}

  	#description
  	{
  		margin-top: 250px;
  		margin-left: -376px;
  	}

  	#prix
  	{
  		margin-top: 350px;
  		margin-left: -376px;
  	}

  	#paiement
  	{
  		margin-top: 400px;
  		margin-left: -376px;
  		width: 300px; 
      	background-color: black;
      	border: 2px black solid;font-family: 'Roboto-bold', sans-serif;
  	}
  	#paiement:hover
  	{
  		background-color: white;
  		color: black;
  	}
  </style>
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
    <a class="nav-link" href="vendre.php">Vendre</a></li>
    <a class="nav-link" href="admin.php">Admin</a></li>
    <a class="nav-link" href="profil.php">Ma Page</a></li>
    <a class="nav-link" href="panier.php">Mon panier<img src="panier_noir.svg" style="width: 40px; height: 40px; margin-right: -5px"></a>
    <a class="nav-link" href="disconnect.php" id ="pan">Déconnexion</a></li>
  </nav>
</div>

<!-- Division contenant le slogan, superposé au carrousel et qui rest en haut de l'écran lorsque l'on scroll -->
<div id="slogan" style="margin-top: -100px">
  <h3 style="margin-top: 10px"><center>Négociez votre bonheur</center></h3>
</div>

<div class="container features" id="produit">
	
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-12">
			<img src="guitare.jpg">
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12" id="nom">
			<h4>Guitare Fender</h4>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12" id="description">
			<p>Guitare achetée à Zanzibar, presque neuve, idéale pour les joueurs de niveau intermédiaire</p>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12" id="prix">
			<h4>Prix: 0,00€</h4>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12" id="bouton">
           	<button class="btn btn-lg btn-block btn-success text-uppercase" id="paiement">Payer</button>
        </div>
	</div>
</div>