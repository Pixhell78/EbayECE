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

</head>
<body>
  <!-- Première barre de navigation contenant un lien vers les autres pages importantes -->
  <nav class="navbar navbar-expand-md" id="liens">
    <div class="collapse navbar-collapse" id="main-navigation">      
      <ul class="navbar-nav">             
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
  
  <!-- Division avec des images liens vers les différentes catégories de produits -->
  <div class="container features"> 
    <h3><center>Catégories de produits</center></h3>   
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12">
        <h5 style="margin-top: 15px;">Trésors ou ferraille</h5>
        <a href="tresors.php"><img src="ferraille.jpg" class="img-fluid"></a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <h5 style="margin-top: 15px;">Musée</h5>
        <a href="musees.php" ><img src="musee.jpg" class="img-fluid"></a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <h5 style="margin-top: 15px;">Accéssoires VIP</h5>
        <a href="vip.php"><img src="vip.jpg" class="img-fluid"></a>
      </div> 
    </div> 
  </div> 
  <!-- Division avec des images liens vers les différentes catégories de ventes -->    
  <div class="container features"> 
    <h3><center>Catégories de vente</center></h3>   
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12">
        <h5 style="margin-top: 15px;">Enchères</h5>
        <a href="tresors.php"><img src="login.jpg" class="img-fluid"></a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <h5 style="margin-top: 15px;">Achat rapide</h5>
        <a href="musees.php" ><img src="achats.jpg" class="img-fluid"></a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <h5 style="margin-top: 15px;">Meilleures ventes</h5>
        <a href="vip.php"><img src="meilleures_ventes.jpg" class="img-fluid"></a>
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