<?php
  define('DB_SERVER','localhost');
  define('DB_USER', 'root');
  define('DB_PASS','');

  $database ="ebayece";

  $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
  $db_found = mysqli_select_db($db_handle, $database);

// on teste si le visiteur a soumis le formulaire
//if (isset($_POST['inscription']) && $_POST['inscription'] == 'Inscription') {
  // on teste l'existence de nos variables. On teste également si elles ne sont pas vides
if ( empty(session_id()) ) session_start();
if($_SESSION['COMPTE']=='Acheteur'){
  echo '<script type="text/javascript">window.alert("Vous devez possèdez un compte vendeur.");</script>';
  echo '<meta http-equiv="refresh" content="1; URL=pagedacceuil.php">';
}

if (isset($_POST["typevente"])) {  // SI ma_radio A BIEN ÉTÉ POSTÉ
      if ($_POST["typevente"]  == "1") {// SI ma_radio EST ÉGAL À 1 vente immediate 
              $type='immediat';} 

      else if ($_POST["typevente"]  == "2") {// SI ma_radio EST ÉGAL À 2 meilleur offre 
              $type='meilleuroffre';}

      else if ($_POST["typevente"]  == "3") {// SI ma_radio EST ÉGAL À 3 enchere 
              $type='enchere';}
           if ((isset($_POST['nom']) && !empty($_POST['nom'])) && (isset($_POST['prix']) && !empty($_POST['prix']))) {
                     $nom         = $_POST['nom'];
                     $description = $_POST['description'];
                     $image       = $_POST['image'];
                     $prix        = $_POST['prix'];
                     $datefin = date('Y-m-d H:i:s', strtotime($_POST['datefin']));
                     

                     
                     
                    

  if($db_found){
    $sql                        ="INSERT INTO `objet` (`ID`, `NOM`, `VENDEUR`, `TYPE`, `DESCRIPTION`, `IMAGE`, `PRIX`, `FIN`) VALUES (NULL,'".$nom."', '".$_SESSION['ID']."','$type','$description','$image','$prix','".$datefin."');";
    $result                     = mysqli_query($db_handle, $sql);


    echo '<script type="text/javascript">window.alert("L objet est en vente !");</script>';
    }


           else{
             echo "Database not found";
                }

          }
      
}


  mysqli_close($db_handle);
  ?>


<!DOCTYPE html>
<html>
<head>
  <title>Vendre</title>
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
      <a class="nav-link" href="disconnect.php">Deconnexion</a></li>
      <a class="nav-link" href="panier.php" id ="pan">Mon panier<img src="panier_noir.svg" style="width: 40px; height: 40px; margin-right: -5px"></a>
    </nav>
  </div>

  <!-- Division contenant le slogan, superposé au carrousel et qui rest en haut de l'écran lorsque l'on scroll -->
  <div id="slogan">
    <h3 style="margin-top: 10px"><center>Négociez votre bonheur</center></h3>
  </div>

  <!-- Formulaire d'inscription -->
  <section class="container-fluid"> 
    <div class="container" id="first">     
        <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
             <div class="informationgeneral">
                <div class="entete">
                    <div class="titre-information"><center>FORMULAIRE DE VENTE</center></div>
                </div>  
                <div class="contenue" >
                  <form id="signupform" class="form-horizontal" role="form" action="vendre.php" method="post">
                    <div id="alert_enregist" style="display:none" class="alert alert-danger">
                      <p>Erreur</p>
                      <span></span>
                    </div>           
                <!-- RENSEIGNEMENT -->
                    <div class="form-check form-check-inline">
                                  <input type="radio" class="form-check-input" id="venteimmediate" name="typevente" value="1" checked>
                                 <label class="form-check-label" for="materialInline1">Vente immediate</label>
                          </div>

                        <div class="form-check form-check-inline">
                             <input type="radio" class="form-check-input" id="moffre" name="typevente" value="2">
                              <label class="form-check-label" for="materialInline2">Meilleur Offre</label>
                        </div>

                        <div class="form-check form-check-inline">
                             <input type="radio" class="form-check-input" id="enchere" name="typevente" value="3">
                              <label class="form-check-label" for="materialInline2">Enchere</label>
                        </div>
                                
                    <div class="form-group">
                        <label for="nom" class="col-md-3 control-label">Nom du produit</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="nom" name="nom" placeholder="nom" required>
                        </div>
                    </div>
                                
                    <div class="form-group">
                        <label for="adresse" class="col-md-3 control-label">Description</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="description" name="description" placeholder="description" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="adresse" class="col-md-3 control-label">Nom de l'image</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="image" name="image" placeholder="image.jpg" required>
                        </div>
                    </div>
                                     
                    <div class="form-group">
                      <label for="ville" class="col-md-3 control-label">Prix de vente</label>
                      <div class="col-md-9">
                          <input type="text" class="form-control" id="prix" name="prix" placeholder="0,00€" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="ville" class="col-md-3 control-label">Fin de la vente</label>
                      <div class="col-md-9">
                            <input class="form-control" type="datetime-local" id="datefin" name="datefin" value="2020-04-16T19:30" min="2020-04-16T00:00" max="2021-12-31T00:00">
                      </div>
                    </div>



                    <div class="form-group" >
                      <!-- Bouttons d'enregistrements et de soumission -->                                        
                      <div class="col-md-offset-3 col-md-9" style=" margin-top:20px;">
                        <button id="btn-signup" type="submit" name="button5" class="btn btn-info col-md-12"><i class="icon-hand-right"></i> &nbsp Mettre en vente</button>
                        <td colspan="2" align="center">
                        </div>
                      </div>
                    </div> 
                  </form>            
                </div>
              </section>

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