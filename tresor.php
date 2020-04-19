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

  <!-- DIvision contenant les derniers achats -->
  <div class="container features" id="first">
    <center><h3 style="width: 350px"><center>Féraille ou trésor</center></h3></center>
  </div>

  <div class="container features">
    <center><h3 style="width: 300px"><center>Achat immediats !</center></h3></center>
    <div class="row">
         <?php
  define('DB_SERVER','localhost');
  define('DB_USER', 'root');
  define('DB_PASS','');
  $database ="ebayece";
  $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
  $db_found = mysqli_select_db($db_handle, $database);
    
  
  if($db_found){
  
      $sql_count = mysqli_query($db_handle,"SELECT COUNT(*) AS nom FROM objet WHERE type='immediat' AND typeobjet='ferailletresor'") or exit(mysql_error());
      $donnees = mysqli_fetch_array($sql_count);
      $num = $donnees['nom'];
 
     
      
        $sql = "SELECT * FROM objet   WHERE type='immediat' AND typeobjet='ferailletresor'" ;
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
              <span>Prix : '.$prix.'€</br></span>
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
                    <?php

  $database ="ebayece";
  $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
  $db_found = mysqli_select_db($db_handle, $database);
    
  
  if($db_found){
  
      $sql_count = mysqli_query($db_handle,"SELECT COUNT(*) AS nom FROM objet WHERE type='enchere'  AND typeobjet='ferailletresor'") or exit(mysql_error());
      $donnees = mysqli_fetch_array($sql_count);
      $num = $donnees['nom'];
 
     
      
        $sql = "SELECT * FROM objet  WHERE type='enchere' AND typeobjet='ferailletresor'" ;
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

        <div class="container features">
        <center><h3 style="width: 300px; border: 2px black solid; font-family: 'Roboto', sans-serif;"><center>Meilleurs offres</center></h3></center> 
        <div class="row">
                    <?php

  $database ="ebayece";
  $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
  $db_found = mysqli_select_db($db_handle, $database);
    
  
  if($db_found){
  
      $sql_count = mysqli_query($db_handle,"SELECT COUNT(*) AS nom FROM objet WHERE type='meilleuroffre' AND typeobjet='ferailletresor'") or exit(mysql_error());
      $donnees = mysqli_fetch_array($sql_count);
      $num = $donnees['nom'];
 
     
      
        $sql = "SELECT * FROM objet  WHERE type='meilleuroffre' AND typeobjet='ferailletresor'" ;
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
                </div> </div>

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