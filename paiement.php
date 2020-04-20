<?php

  define('DB_SERVER','localhost');
  define('DB_USER', 'root');
  define('DB_PASS','');
if ( empty(session_id()) ) session_start(); 
$prix=$_GET['idobjet']; 
  $database ="ebayece";
  $idacheteur = $_SESSION['ID'];
  $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
  $db_found = mysqli_select_db($db_handle, $database);

// on teste si le visiteur a soumis le formulaire
//if (isset($_POST['inscription']) && $_POST['inscription'] == 'Inscription') {
  // on teste l'existence de nos variables. On teste également si elles ne sont pas vides
if ( empty(session_id()) ) session_start();


           if ((isset($_POST['ccv']) && !empty($_POST['ccv'])) && (isset($_POST['num']) && !empty($_POST['num']))) {
                     $ccv         = $_POST['ccv'];
                     $num = $_POST['num'];

                     

                     
                     
                    

  if($db_found){
    $sql                        ="SELECT * FROM `banque` WHERE NUMERO='$num'";
    $result                     = mysqli_query($db_handle, $sql);
    $data = mysqli_fetch_array($result);
    $ccv2=$data['CODE'];

    if($ccv2==$ccv)
    {
          echo '<script type="text/javascript">window.alert("Paiement effectué avec succès ! ");</script>';
    $sql                        ="DELETE FROM `panier` WHERE ACHETEUR_ID='$idacheteur'";
    $result                     = mysqli_query($db_handle, $sql);
        echo '<meta http-equiv="refresh" content="1; URL=panier.php">';

    }
    else{
      echo '<script type="text/javascript">window.alert("La carte que vous avez saisie est incorrecte ! ");</script>';
        echo '<meta http-equiv="refresh" content="1; URL=panier.php">';

    }
    }


           else{
             echo "Database not found";
                }

          }
      



  mysqli_close($db_handle);
  ?>


<!DOCTYPE html>
<html>
<head>
  <title>Paiement</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

  <style type="text/css">
    body
    {
      overflow-x: hidden;
    }
    h4
    {
      font-family: 'Roboto-bold', sans-serif;
    }

    #type, #ecrire, #fin
    {
      display: flex;
      flex-direction: row;
      width: 1300px;
      height: 150px;
    }

    #type2
    {
      display: flex;
      flex-direction: row;
      width: 1300px;
      height: 30px;
      margin-left: -320px;
    }

    #type3
    {
      display: flex;
      flex-direction: row;
      width: 1300px;
      height: 30px;
      margin-left: -300px;
    }

    

    #txtProduit
    {
      width: 1000px;

    }

    #txtVente
    {
      width: 1000px;
      margin-left: -45px;
    }

    #description::placeholder
    {
      text-align: center;
    }

    #depot
    {
      height: 120px;
      border: 2px black solid;
      border-radius: 5px;
      margin-top: -25px;
      margin-left: 15px;
    }

    #enregistrer
    {
      width: 1300px;
      margin-top: 100px;

    }

    input[type = "radio"]
    {
      display: none;
      cursor: pointer;
    }

    input[type = "radio"] + label::before
    {
      content: "";
      cursor: pointer;
      display: inline-block;
      width: 20px;
      height: 20px;
      background-color: white;
      border: 2px black solid;
      border-radius: 2px;
      margin-left: 300px; 
    }

    input[type = "radio"]:checked + label::before
    {
      background-color: black;
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
      <a class="nav-link" href="disconnect.php">Déconnexion</a></li>
      <a class="nav-link" href="panier.php" id ="pan">Mon panier<img src="panier_noir.svg" style="width: 40px; height: 40px; margin-right: -5px"></a>
    </nav>
  </div>

  <!-- Division contenant le slogan, superposé au carrousel et qui rest en haut de l'écran lorsque l'on scroll -->
  <div id="slogan" style="margin-top: -80px">
    <h3 style="margin-top: 10px"><center>Négociez votre bonheur</center></h3>
  </div>

  <div id="first" style="margin-top: 180px; border: 2px black solid; width: 500px;  margin-left: 33%">
    <center><h3 style="margin-top: 10px">Payez vos produits</h3></center>
    <?php $aaa=$_GET['idobjet']; 

    echo '<center><h3 style="margin-top: 10px">Reste a payer : '.$aaa.' €</h3></center>';?>
  </div>

  <!-- Formulaire d'inscription -->
  <section class="container-fluid"> 
    <div class="container">     
      <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
       <div class="informationgeneral">
        <div class="contenue" >
              <?php $aaa=$_GET['idobjet']; 

    echo '<form id="signupform" class="form-horizontal" role="form" action="paiement.php?idobjet='.$aaa.'" method="post">';?>
          
            <div id="alert_enregist" style="display:none" class="alert alert-danger">
              <p>Erreur</p>
              <span></span>
            </div>           
            <!-- RENSEIGNEMENT -->
                          <div style="margin-left: 40%; " class="col-md-8">

            <div id="type">
                <label for="vente" class="col-md-3 control-label" id="txtProduit"><h4>Type de cartes</h4></label>
                <div class="col-md-9">
                  
                          

                          <div class="form-check form-check-inline" id="type3">
                                  <input type="radio" class="form-check-input" id="ferailletresor" name="typeobjet" value="1" >
                                 <label for="ferailletresor" style="font-size: 20px;"> Visa</label>
                          </div>

                        <div class="form-check form-check-inline" id="type3">
                                  <input type="radio" class="form-check-input" id="musee" name="typeobjet" value="2" >
                                 <label for="musee" style="font-size: 20px;">  Mastercard</label>
                          </div>

                        <div class="form-check form-check-inline" id="type3">
                             <input type="radio" class="form-check-input" id="vip" name="typeobjet" value="3">
                            <label for="vip" style="font-size: 20px;">  American Express</label>
                        </div>
             
                </div>
                          </div>


             
            <div >
              <div class="form-group" >
                <label for="nom" class="col-md-12 control-label"><h4>Nom du titulaire de la carte</h4></label>
                <div class="col-md-9">
                  <input style="border: 2px black solid; width: 500px" type="text" class="form-control" id="nom" name="nom" placeholder="Nom" required>
                </div>
              </div>

              <div class="form-group" >
                <label for="num" class="col-md-12 control-label" id="txtPrix"><h4 style="text-align: left">Numero de la carte</h4></label>
                <div class="col-md-9">
                  <input style="width: 500px; border: 2px black solid" type="text" class="form-control" id="num" name="num" placeholder="1234 1234 1234 1234" required>
                </div>
              </div>
            </div>



              <div >
              <div class="form-group" >
                <label for="nom" class="col-md-12 control-label"><h4>Date de peremption </h4></label>
                <div class="col-md-9">
                  <input style="border: 2px black solid; width: 500px" type="text" class="form-control" id="image" name="image" placeholder="12/24" required>
                </div>
              </div>


              <div class="form-group" >
                <label for="ccv" class="col-md-12 control-label"><h4>CCV</h4></label>
                <div class="col-md-9">
                  <input style="border: 2px black solid; width: 500px;" id="ccv" placeholder="123" name="ccv" required>
                </div>
              </div>
            </div>


            <div class="form-group" id="enregistrer">
              <input id="btn-signup" type="submit" id="envoi" name="button5" value="Payer" style="width: 300px; margin-left: 400px; background-color: black; border: 2px black solid;font-family: 'Roboto-bold', sans-serif;" class="btn btn-info col-md-12">     
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
    </body>
