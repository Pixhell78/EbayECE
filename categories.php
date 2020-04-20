<!DOCTYPE html>
<html>
<head>
  <title>Catégories</title>
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
    <a class="nav-link" href="vendre.php">Vendre</a></li>
    <a class="nav-link" href="admin.php">Admin</a></li>
    <a class="nav-link" href="profil.php">Ma Page</a></li>
    <a class="nav-link" href="panier.php">Mon panier<img src="panier_noir.svg" style="width: 40px; height: 40px; margin-right: -5px"></a>
    <a class="nav-link" href="disconnect.php" id ="pan">Déconnexion</a></li>
  </nav>
</div>

<!-- Division contenant le slogan, superposé au carrousel et qui rest en haut de l'écran lorsque l'on scroll -->
<div id="slogan">
  <h3 style="margin-top: 10px"><center>Négociez votre bonheur</center></h3>
</div>

<!-- Division avec des images liens vers les différentes catégories de produits -->
<div class="container features" id="first"> 
  <center><h3 style="width: 400px"><center>Catégories de produits</center></h3></center>  
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12">
      <a href="tresor.php"><img src="ferraille.jpg" class="img-fluid"></a>
      <center><h4 style="margin-top: 15px; margin-right: 45px">Trésors ou ferraille</h4></center>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
      <a href="musee.php" ><img src="musee.jpg" class="img-fluid"></a>
      <center><h4 style="margin-top: 15px; margin-right: 45px">Musée</h4></center>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
      <a href="vip.php"><img src="vip.jpg" class="img-fluid"></a>
      <center><h4 style="margin-top: 15px; margin-right: 45px">Accésoires VIP</h4></center>
    </div> 
  </div> 
</div> 
<!-- Division avec des images liens vers les différentes catégories de ventes -->    
<div class="container features"> 
  <center><h3 style="width: 400px"><center>Catégories de vente</center></h3></center>   
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12">
      <a href="encheres.php"><img src="login.jpg" class="img-fluid"></a>
      <center><h4 style="margin-top: 15px; margin-right: 45px">Produits aux enchères</h4></center>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
      <a href="rapide.php" ><img src="achats.jpg" class="img-fluid"></a>
      <center><h4 style="margin-top: 15px; margin-right: 45px">Achats directs</h4></center>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
      <a href="meilleur.php"><img src="meilleures_ventes.jpg" class="img-fluid"></a>
      <center><h4 style="margin-top: 15px; margin-right: 45px">Meilleures ventes</h4></center>
    </div> 
  </div> 
</div> 




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