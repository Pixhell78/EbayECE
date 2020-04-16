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
  <?php if ( empty(session_id()) ) session_start(); ?>

  <style>
    /* Carrousel */
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

    /* Texte carousel*/
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

    #texte h3
    {
      margin-top: -17px;
    }

  </style>
</head>

<body>

  <!-- Barre de navigation contenant le logo et le menu burger -->
  <div class="menu">
       <?php
            echo '<h5 style="position:absolute; margin-left: 10px; margin-right: auto; margin-top: 20px; height: 130px; width: auto">Connecté en tant que </br>'.$_SESSION['PSEUDO'].'</h5>';
    ?>
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
  <div id="slogan" style="margin-top: 0px;">
    <h3 style="margin-top: 10px"><center>Négociez votre bonheur</center></h3>
  </div>

  <!-- Header contenant le carrousel -->
  <div id="carrousel" class="carousel slide carousel-fade" data-ride = "carousel">
    <div class="carousel-inner" role = "listbox">
      <!-- Image 1 -->
      <div class="carousel-item active">
        <img src="bal.jpg" class="d-block w-100">
        <div class="carousel-caption" id="texte">
          <h3><center>Nos promotions en achats directs !</center></h3>
        </div>
      </div>
      <!-- Image 2 -->
      <div class="carousel-item">
        <img src="bal.jpg" class="d-block w-100">
        <div class="carousel-caption" id="texte">
          <h3><center>Les produits aux enchères !</center></h3>
        </div>
      </div>
      <!-- Image 3 -->
      <div class="carousel-item">
        <img src="bal.jpg" class="d-block w-100">
        <div class="carousel-caption" id="texte">
          <h3><center>Les meilleurs offres !</center></h3>
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
    <center><h3 style="width: 500px"><center>Les dernières promo en achat direct !</center></h3></center>
    <div class="row">
         <?php
  define('DB_SERVER','localhost');
  define('DB_USER', 'root');
  define('DB_PASS','');
  $database ="ebayece";
  $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
  $db_found = mysqli_select_db($db_handle, $database);
    
  
  if($db_found){
  
      $sql_count = mysqli_query($db_handle,"SELECT COUNT(*) AS nom FROM objet WHERE type='immediat'") or exit(mysql_error());
      $donnees = mysqli_fetch_array($sql_count);
      $num = $donnees['nom'];
 
     
      
        $sql = "SELECT * FROM objet  WHERE type='immediat'" ;
        $result = mysqli_query($db_handle,$sql);
            for($i=1;$i<=$num;$i++) {

      $data = mysqli_fetch_array($result);
      $image = $data['IMAGE'];
      $idvendeur = $data['VENDEUR'];
      $nom = $data['NOM'];
      $prix = $data['PRIX'];
      $description = $data['DESCRIPTION'];
      $prixreel = $prix+($prix/8);
      $sql1 = "SELECT * FROM VENDEUR WHERE ID='$idvendeur'" ;
      $result1 = mysqli_query($db_handle,$sql1);
      $data1 = mysqli_fetch_array($result1);
      $vendeur = $data1['PSEUDO'];
        
  
  
    echo '     <div class="col-lg-4 col-md-4 col-sm-12">
              <a href="guitare.php"><img src="'.$image.'" class="img-fluid" style="margin-top: 50px;"></a>
              <p>'.$description.'<br>
              <span>Prix : '.$prix.'€ </span><span style=" text-decoration: line-through;">Prix réel: '.$prixreel.' €<br></span>
              <span>Vendu par : '.$vendeur.' </span></p>
              </div>';
            }
         }
          else{
            echo "Database not found";
          }    
    
  mysqli_close($db_handle);
  ?>
      
        </div> 
      </div>
      <!-- Division avec les images de produit mis en vente aux enchères -->
      <div class="container features">
        <center><h3 style="width: 300px; border: 2px black solid; font-family: 'Roboto', sans-serif;"><center>Ventes aux enchères</center></h3></center> 
        <div class="row">
                    <?php

  $database ="ebayece";
  $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
  $db_found = mysqli_select_db($db_handle, $database);
    
  
  if($db_found){
  
      $sql_count = mysqli_query($db_handle,"SELECT COUNT(*) AS nom FROM objet WHERE type='enchere'") or exit(mysql_error());
      $donnees = mysqli_fetch_array($sql_count);
      $num = $donnees['nom'];
 
     
      
        $sql = "SELECT * FROM objet  WHERE type='enchere'" ;
        $result = mysqli_query($db_handle,$sql);
            for($i=1;$i<=$num;$i++) {

      $data = mysqli_fetch_array($result);
      $idobjet = $data['ID'];
      $image = $data['IMAGE'];
      $idvendeur = $data['VENDEUR'];
      $nom = $data['NOM'];
      $prix = $data['PRIX'];
      $description = $data['DESCRIPTION'];
      $prixreel = $prix+($prix/8);
      $sql1 = "SELECT * FROM VENDEUR WHERE ID='$idvendeur'" ;
      $result1 = mysqli_query($db_handle,$sql1);
      $data1 = mysqli_fetch_array($result1);
      $vendeur = $data1['PSEUDO'];

      $sql2 = "SELECT * FROM enchere WHERE OBJET='$idobjet' HAVING OFFRE = MAX(OFFRE)";
      $result2 = mysqli_query($db_handle,$sql2);
      $data2 = mysqli_fetch_array($result2);
      $offre = $data2['OFFRE'];
        
        
  
  
    echo '     <div class="col-lg-4 col-md-4 col-sm-12">
              <a href="guitare.php"><img src="'.$image.'" class="img-fluid" style="margin-top: 50px;"></a>
              <p>'.$description.'<br>
              <span>Prix de départ: '.$prix.'€ </span><span>Derniere enchere: '.$offre.' €<br></span>
              <span>Vendu par : '.$vendeur.' </span></p>
              </div>';
            }
         }
          else{
            echo "Database not found";
          }    
    
  mysqli_close($db_handle);
  ?>
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