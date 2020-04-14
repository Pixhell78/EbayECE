<!DOCTYPE html>
<html>
<head>
  <title>Page d'accueil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

  <style>
    body
    {
      font-family: 'Roboto', sans-serif;
    }
    .carousel-control-prev, .carousel-control-next
    {
      height: 100px;
      margin-top: 300px;
    }

    .carousel-control-prev-icon, .carousel-control-next-icon
    {
      height: 75px; 
      width: 75px;  
      background-image: none;
      margin-top: -290px;
    }

    .carousel-control-next-icon:after 
    { 
      content: '>'; 
      font-size: 100px; 
      color: black;
    } 

    .carousel-control-prev-icon:after 
    { 
      content: '<'; 
      font-size: 100px; 
      color: black;
    }

    .carousel img
    {
      height: 490px;
    }

    #carrousel
    {
      margin-top: 100px;
    }

   
    .container img
    {
      width: 300px;
      height: 400px;
      border: 2px black solid;
    }

    .menu
    {
      background-color: white;
      border-bottom: 2px black solid;
      height: 100px;
      position: fixed;
      top:0;
      width: 100%;
      z-index: 99;
    }

    .menu .burger
    {
      appearance:none;
      -moz-appearance:none;
      -webkit-appearance:none;
      color:inherit;
      cursor:pointer;
      margin:0;
      outline:0;
      padding:0;
      position:absolute;
      top:0;
      right:-15px;
      width:100px;
      z-index: 4;
    }

    .menu .burger:before
    {
      content:"";
      display:inline-block;
      width:100px;
      height:100px;
      background:url(menu_burger.svg) no-repeat;
      background-size:100%;
      margin-top: 10px;
    }

    .menu .burger:checked:before
    {
     content:"";
     display:inline-block;
     width:100px;
     height:100px;
     background:url(menu_burger.svg) no-repeat;
     background-size:100%;
     margin-top: 10px;
   }

   .menu .burger:checked + nav
   {
    height:calc(100vh - 50px);
   }

  .menu nav
  {
    background:inherit;
    font-size:20px;
    font-weight:bold;
    height:0;
    overflow:hidden;
    text-transform:uppercase;
    transition:height .2s;
    z-index:2;
    position:absolute;
    background-color: white;
    margin-top: -115px;
    margin-left: 1100px;
    width: 249px;
    max-height: 412px;
  }

  .menu nav > *
  {
    display:block;
    letter-spacing:1px;
    line-height:2.5;
    padding:0 20px;
    width:100%;
    border: 2px black solid;
    border-bottom: none;
    color: black;
  }

  #pan
  {
    border-bottom: 2px black solid;
  }
  .menu nav input
  {
    background:rgba(0,0,0,.2);
    border:none;
    color:#fff;
  }

  #trait
  {
    height: 98px;
    border-bottom: none;
    z-index: 3;
  }

  #slogan
  {
    background-color: white;
    width: 400px;
    z-index:2;
    position:absolute;
    border-right: 2px black solid;
    border-bottom: 2px black solid;
    text-transform: uppercase;
    display: block;
    position: fixed;
    z-index: 99;
  }

  #texte
  {
    background-color: white;
    width: 450px;
    height: 10px;
    z-index:2;
    position:absolute;
    border: 2px black solid;
    margin-left: 630px;
    margin-bottom: 30px;
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
      <a class="nav-link" href="connexion.php">Vendre</a></li>
      <a class="nav-link" href="connexion.php">Admin</a></li>
      <a class="nav-link" href="profil.php">Ma Page</a></li>
      <a class="nav-link" href="panier.php" id ="pan">Mon panier<img src="panier_noir.svg" style="width: 40px; height: 40px; margin-right: -5px"></a>
    </nav>
  </div>
<div id="slogan">
            <h3 style="margin-top: 10px"><center>Négociez votre bonheur</center></h3>
          </div>
  <!-- Header contenant le carrousel -->
    <div id="carrousel" class="carousel slide carousel-fade" data-ride = "carousel">
      <div class="carousel-inner" role = "listbox">
        <div class="carousel-item active">
          
          <img src="bal.jpg" class="d-block w-100">
          <div class="carousel-caption" id="texte">
            <h3 style="margin-top: -17px;"><center>Nos promotions en achats directs !</center></h3>
          </div>
        </div>
        <div class="carousel-item">
          <div id="slogan">
            <h3 style="margin-top: 10px"><center>Négociez votre bonheur</center></h3>
          </div>
          <img src="bal.jpg" class="d-block w-100">
          <div class="carousel-caption" id="texte">
            <h3 style="margin-top: -17px;"><center>Les produits aux enchères !</center></h3>
          </div>
        </div>
        <div class="carousel-item">
          <div id="slogan">
            <h3 style="margin-top: 10px"><center>Négociez votre bonheur</center></h3>
          </div>
          <img src="bal.jpg" class="d-block w-100">
          <div class="carousel-caption" id="texte">
            <h3 style="margin-top: -17px;"><center>Les meilleurs offres !</center></h3>
          </div>
      </div>
    </div>
    <!-- Bouttons de changement d'image du carrousel -->
    <a class="carousel-control-prev" href="#carrousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true" style="color : black"></span>
      <span class="sr-only">Précédent</span>
    </a>
    <a class="carousel-control-next" href="#carrousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true" style="color : black"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<!-- Division avec les images des promotions d'achats directs -->
<div class="container features">
  <center><h3 style="width: 500px; border: 2px black solid; font-family: 'Roboto', sans-serif;"><center>Les dernières promo en achat direct !</center></h3></center>
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12">
      <a href="guitare.php"><img src="guitare.jpg" class="img-fluid" style="margin-top: 50px;"></a>
      <p>Guitare fender, idéale pour un niveau intermédiaire <br>
        <span>Prix : 350€ </span><span style=" text-decoration: line-through;">Prix réel: 537€</span></p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <a href="musee.php"><img src="veste_jean.jpg" class="img-fluid" style="margin-top: 50px;"></a>
        <p>Veste en jean bleue jamais portée <br>
          <span>Prix : 30€ </span><span style=" text-decoration: line-through;">Prix réel: 50€</span></p> </p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <a href="vip.php"><img src="collier_nacre.jpg" class="img-fluid" style="margin-top: 50px;"></a>
          <p>Collier d'alliage nacre/argent véritable <br>
            <span>Prix : 100€ </span><span style="text-decoration: line-through;">Prix réel: 115€</span></p></p>
          </div> 
        </div> 
      </div>

      <!-- Division avec les images de produit mis en vente aux enchères -->
      <div class="container features">
        <center><h3 style="width: 300px; border: 2px black solid; font-family: 'Roboto', sans-serif;"><center>Ventes aux enchères</center></h3></center> 
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12">
            <a href="guitare.php"><img src="montre.jpg" class="img-fluid" style="margin-top: 50px;"></a>
            <p>Montre en quartz <br>
              <span>Prix de base : 1000€ </span></p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <a href="musee.php"><img src="vase.jpg" class="img-fluid" style="margin-top: 50px;"></a>
              <p>Vase en céramique <br>
                <span>Prix de base : 10€</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <a href="vip.php"><img src="ballon_or.jpg" class="img-fluid" style="margin-top: 50px;"></a>
                  <p>Réplique du ballon d'or <br>
                    <span>Prix de base : 200€</p>
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
            </html>