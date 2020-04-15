<!DOCTYPE html>
<html lang="en">
<head>
  <title>ebay ECE</title>
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

  <!-- DIvision contenant les derniers achats -->
  <div class="container features" id="first">
    <center><h3><center>Derniers achats</center></h3></center>
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