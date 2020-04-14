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
  <style>
    /* Paramètre d'affichages du carrousel et des images des autres divisions */
    .carousel-inner img {
      width: 70%;
      margin: auto;
      max-height:600px;
    }

    @media (max-width: 400px) {
      .carousel-caption {
        display: none; 
      }
    }
    .carousel-control-prev, .carousel-control-next
    {
      height: 100px;
      margin-top: 200px;
    }

    .carousel-control-prev-icon, .carousel-control-next-icon
    {
      height: 35px; 
      width: 35px; 
      outline: black; 
      background-size: 100%, 100%; 
      border-radius: 50%; 
      border: 1px solid black; 
      background-image: none;
    }

    .carousel-control-next-icon:after 
    { 
      content: '>'; 
      font-size: 20px; 
      color: black; 
    } 

    .carousel-control-prev-icon:after 
    { 
      content: '<'; 
      font-size: 20px; 
      color: black;
    }

    .header
    {
      width: 500px;
      height: 300px;
      margin-top: 15px;
      border-bottom: 1px black solid;
    }

    .header img
    {
      width : 100px;
      height : 200px;
    }

    .container
    {
      border-bottom: 1px black solid;
    }
  </style>
</head>

 
<body>
  <!-- Première barre de navigation contenant un lien vers les autres pages importantes -->
  <nav class="navbar navbar-expand-md" id="liens">
    <div class="collapse navbar-collapse" id="main-navigation">
      <ul class="navbar-nav"> 
       <?php
            session_start();
            echo '<li class="nav-item"><a style="color: #f1f1f1;float :left;  ">Connecté en tant que </br>'.$_SESSION['PSEUDO'].'</a></li>';

        ?>            
        <li class="nav-item"><a class="nav-link" href="pagedacceuil.php">Accueil</a></li>             
        <li class="nav-item"><a class="nav-link" href="categories.php">Catégories</a></li>                      
        <li class="nav-item"><a class="nav-link" href="connexion.php">Vendre</a></li>
        <li class="nav-item"><a class="nav-link" href="connexion.php">Admin</a></li>
        <li class="nav-item"><a class="nav-link" href="profil.php">Ma Page</a></li>
        <li class="nav-item"><a class="nav-link" href="panier.php"><img src="panier.jpg" style="width: 30px; height: 20px; margin-right: -5px">Mon panier</a></li>        
      </ul>         
    </div> 
  </nav>
  <!-- Deuxième barre de navigation contenant le logo -->
  <nav class="navbar navbar-expand-md" id="logo">
    <a class="navbar-brand" href="#"><img src="logo.jpg" style="width : 100px; height : 75px;"></a>
  </nav>

  <!-- Header contenant le carrousel -->
  <header class="page-header header container-fluid">
    <div id="carrousel" class="carousel slide carousel-fade" data-ride = "carousel">
      <h3><center>Nos différentes catégories de ventes</center></h3>
      <ul class="carousel-indicators">
        <li data-target="#carrousel" data-slide-to="0" class="active"></li>
        <li data-target="#carrousel" data-slide-to="1"></li>
        <li data-target="#carrousel" data-slide-to="2"></li>
      </ul>

      <div class="carousel-inner" role = "listbox">
        <div class="carousel-item active" data-interval="4000">
          <img src="meilleures_ventes.jpg" alt="Image" class="d-block w-100" style="display: block; margin-left: auto; margin-right: auto; margin-top: 15px">
          <h5><center>Meilleures ventes</center></h5>
        </div>
        <div class="carousel-item" data-interval="2000">
          <img src="achats.jpg" alt="Image" class="d-block w-100" style="display: block; margin-left: auto; margin-right: auto;  margin-top: 15px">
          <h5><center>Achats directs</center></h5>
        </div>
        <div class="carousel-item" data-interval="2000">
          <img src="login.jpg" alt="Image" class="d-block w-100" style="display: block; margin-left: auto; margin-right: auto;  margin-top: 15px">
          <h5><center>Enchères</center></h5>
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
  </header>

  <!-- Division avec les images des promotions d'achats directs -->
  <div class="container features">
    <h3><center>Les dernières promo en achat direct !</center></h3> 
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12">
        <a href="guitare.php"><img src="guitare.jpg" class="img-fluid" style="margin-top: 15px;"></a>
        <p>Guitare fender, idéale pour un niveau intermédiaire <br>
          <span style="color : blue;">Prix : 350€ </span><span style="color : red;">Prix réel: 537€</span></p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <a href="musee.php"><img src="veste_jean.jpg" class="img-fluid" style="margin-top: 15px;"></a>
        <p>Veste en jean bleue jamais portée <br>
          <span style="color : blue;">Prix : 30€ </span><span style="color : red;">Prix réel: 50€</span></p> </p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <a href="vip.php"><img src="collier_nacre.jpg" class="img-fluid" style="margin-top: 15px;"></a>
        <p>Collier d'alliage nacre/argent véritable <br>
          <span style="color : blue;">Prix : 100€ </span><span style="color : red;">Prix réel: 115€</span></p></p>
      </div> 
    </div> 
  </div>

  <!-- Division avec les images de produit mis en vente aux enchères -->
  <div class="container features">
  <h3><center>Ventes aux enchères</center></h3> 
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12">
        <a href="guitare.php"><img src="montre.jpg" class="img-fluid" style="margin-top: 15px;"></a>
        <p>Montre en quartz <br>
          <span style="color : green;">Prix de base : 1000€ </span></p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <a href="musee.php"><img src="vase.jpg" class="img-fluid" style="margin-top: 15px;"></a>
        <p>Vase en céramique <br>
          <span style="color : green;">Prix de base : 10€</p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <a href="vip.php"><img src="ballon_or.jpg" class="img-fluid" style="margin-top: 15px;"></a>
        <p>Réplique du ballon d'or <br>
          <span style="color : green;">Prix de base : 200€</p>
      </div> 
    </div> 
  </div> 

  <!-- Footer -->
  <footer class="page-footer">   
      <div class="container">    
        <div class="row">       
            <div class="col-lg-8 col-md-8 col-sm-12">       
              <h6 class="text-uppercase font-weight-bold">Information additionnelle</h6>       
              <p><right>Contactez-nous ! Nous sommes présent sur <a href="https://www.facebook.com/theo.chanashing"> Facebook</a> 
                ou <a href="https://www.instagram.com/theo_chanashing/?hl=fr">Instagram</a></right> !</p>
                <p><right>Contact us ! We are on <a href="https://www.facebook.com/theo.chanashing"> Facebook</a> 
                or <a href="https://www.instagram.com/theo_chanashing/?hl=fr">Instagram</a></right> !</p>
                <p> <right><a href="https://www.facebook.com/theo.chanashing"><img src="img/facebook.png"style="width:3%"></a>  
                  or/and<a href="https://www.instagram.com/theo_chanashing/?hl=fr"><img src="img/instagram.png" style="width:3%"></a></right></p>
              </div>   
              <div class="col-lg-4 col-md-4 col-sm-12">       
                  <h6 class="text-uppercase font-weight-bold">Contact</h6>       
                  <p>             37, quai de Grenelle, 75015 Paris, France <br>             info@webDynamique.ece.fr <br>             +33 01 02 03 04 05 <br>             +33 01 03 02 05 04       </p>     
              </div>   
            </div>   
            <div class="footer-copyright text-center">&copy; 2020 Copyright | Droit d'auteur: BENARD Antoine, VANDENBOSSCHE Hugo et SAIDANI Sofiane
          </div>
        </div>
    </footer>


</body>
</html>