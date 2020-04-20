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
    body
    {
      font-family: 'Roboto', sans-serif;
    }


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
            echo '<h5 style="position:absolute; margin-left: 10px; margin-right: auto; margin-top: 20px; height: 130px; width: auto">Connecté en tant que </br>'.$_SESSION['PSEUDO'].' ( '.$_SESSION['COMPTE'].' )</h5>';
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
      $idobjet = $data['ID'];

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
              <a href="produit.php?id='.$idobjet.'"><img src="'.$image.'" class="img-fluid" style="margin-top: 50px;"></a>
              <p>'.$description.'<br>
              <span>Prix : '.$prix.'€ </span><span style=" text-decoration: line-through;">Prix réel: '.$prixreel.' €<br></span>
              <span>Vendu par : '.$vendeur.' </span></p>
              <form id="signupform" class="form-horizontal" role="form" action="ajoutpanier.php" method="get">
                          <button id="btn-signup" style="margin:0 auto;"type="submit" name="idobjet" value="'.$idobjet.'" class="btn btn-dark col-md-10"><i class="icon-hand-right"></i> &nbsp Ajouter au panier</button>
              </form>
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
      $datefin = $data['FIN'];
      $sql1 = "SELECT * FROM VENDEUR WHERE ID='$idvendeur'" ;
      $result1 = mysqli_query($db_handle,$sql1);
      $data1 = mysqli_fetch_array($result1);
      $vendeur = $data1['PSEUDO'];

      $sql2 = "SELECT * from enchere WHERE OBJET='$idobjet' ORDER BY OFFRE DESC LIMIT 1";
      $result2 = mysqli_query($db_handle,$sql2);
      $data2 = mysqli_fetch_array($result2);
      $offre = $data2['OFFRE'];
        
        
  
  
    echo '     <div class="col-lg-4 col-md-4 col-sm-12">
              <a href="produit.php?id='.$idobjet.'"><img src="'.$image.'" class="img-fluid" style="margin-top: 50px;"></a>
              <p>'.$description.'<br>
              <span>Prix de départ: '.$prix.'€<br> </span><span>Derniere enchere: '.$offre.' €<br></span>
              <span>Vendu par : '.$vendeur.' </br></span>
              <span>Fin de l`enchere : '.$datefin.' </span></p>
              <form id="signupform" class="form-horizontal" role="form" action="enchere.php" method="get">
                      <label for="surenchere" class="col-md-3 control-label">Surenchérir:</label>
                          <input type="text" class="form-control col-md-10" id="prix" name="prix" placeholder="0,00€" required>
                          <button id="btn-signup" type="submit" name="idobjet" value="'.$idobjet.'" class="btn btn-dark col-md-10"><i class="icon-hand-right"></i> &nbsp Surenchérir</button>
                    </div>
              </form>';
            }
         }
          else{
            echo "Database not found";
          }    
    
  mysqli_close($db_handle);
  ?>
                    </div> 
                  </div> 


      <div class="container features">
        <center><h3 style="width: 300px; border: 2px black solid; font-family: 'Roboto', sans-serif;"><center>Meilleurs offres</center></h3></center> 
        <div class="row">
                    <?php

  $database ="ebayece";
  $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
  $db_found = mysqli_select_db($db_handle, $database);
    
  
  if($db_found){
  
      $sql_count = mysqli_query($db_handle,"SELECT COUNT(*) AS nom FROM objet WHERE type='meilleuroffre'") or exit(mysql_error());
      $donnees = mysqli_fetch_array($sql_count);
      $num = $donnees['nom'];
 
     
      
        $sql = "SELECT * FROM objet  WHERE type='meilleuroffre'" ;
        $result = mysqli_query($db_handle,$sql);
            for($i=1;$i<=$num;$i++) {

      $data = mysqli_fetch_array($result);
      $idobjet = $data['ID'];
      $image = $data['IMAGE'];
      $idvendeur = $data['VENDEUR'];
      $nom = $data['NOM'];
      $prix = $data['PRIX'];
      $description = $data['DESCRIPTION'];
      $datefin = $data['FIN'];
      $sql1 = "SELECT * FROM VENDEUR WHERE ID='$idvendeur'" ;
      $result1 = mysqli_query($db_handle,$sql1);
      $data1 = mysqli_fetch_array($result1);
      $vendeur = $data1['PSEUDO'];

     
        
  
  
    echo '     <div class="col-lg-4 col-md-4 col-sm-12">
              <a href="produit.php?id='.$idobjet.'"><img src="'.$image.'" class="img-fluid" style="margin-top: 50px;"></a>
              <p>'.$description.'<br>
              <span>Prix de départ: '.$prix.'€<br></span>
              <span>Vendu par : '.$vendeur.' </br></span>
              <span>Fin de la vente : '.$datefin.' </span></p>
              <form id="signupform" class="form-horizontal" role="form" action="moffre.php" method="get">
                          <input type="text" class="form-control col-md-10" id="prix" name="prix" placeholder="0,00€" required>
                          <button id="btn-signup" type="submit" name="idobjet" value="'.$idobjet.'" class="btn btn-dark col-md-10"><i class="icon-hand-right"></i> &nbsp Faire une offre</button>
                    </div>
              </form>';
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
