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

if (isset($_POST["typecompte"])) {  // SI ma_radio A BIEN ÉTÉ POSTÉ
      if ($_POST["typecompte"]  == "1") { // SI ma_radio EST ÉGAL À 1 
           if ((isset($_POST['mail']) && !empty($_POST['mail'])) && (isset($_POST['pseudo']) && !empty($_POST['pseudo']))) {
                     $nom       = $_POST['nom'];
                     $prenom    = $_POST['prenom'];
                     $mail      = $_POST['mail'];
                     $pseudo    = $_POST['pseudo'];
                     $adresse   = $_POST['adresse'];
                     $ville     = $_POST['ville'];
                     $codepostal= $_POST['codepostal'];
                     $pays      = $_POST['pays'];

  if($db_found){
    $sql                        ="INSERT INTO acheteur (`id`, `nom`,`prenom`, `mail`, `pseudo`) VALUES (NULL,'".$nom."', '".$prenom."','$mail', '$pseudo');";
    $result                     = mysqli_query($db_handle, $sql);

    $dernierId                  = mysqli_insert_id($db_handle);

    $sql2                       ="INSERT INTO adresse(`id`,`acheteur`,`adresse`, `ville`, `codepostal`, `pays`) VALUES (NULL, '$dernierId', '$adresse','$ville','$codepostal','$pays');";
    $result2                    = mysqli_query($db_handle, $sql2);

    echo '<script type="text/javascript">window.alert("Inscription  réussi !");</script>';
    }


  else{
    echo "Database not found";
      }

          }
      }
      else{

        if ((isset($_POST['mail']) && !empty($_POST['mail'])) && (isset($_POST['pseudo']) && !empty($_POST['pseudo']))) {
      $nom       = $_POST['nom'];
      $prenom    = $_POST['prenom'];
      $mail      = $_POST['mail'];
      $pseudo    = $_POST['pseudo'];
      $adresse   = $_POST['adresse'];
      $ville     = $_POST['ville'];
      $codepostal= $_POST['codepostal'];
      $pays      = $_POST['pays'];

      $adresse.=" ".$ville." ".$codepostal." ".$pays;
      if($db_found){
                    $sql ="INSERT INTO vendeur (`id`, `nom`,`prenom`, `mail`, `pseudo`,`adresse`,`admin`) VALUES (NULL,'".$nom."', '".$prenom."','$mail', '$pseudo','$adresse ',0);";
                    $result = mysqli_query($db_handle, $sql);

                    echo '<script type="text/javascript">window.alert("Inscription réussi !");</script>';
                    }

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
  <title>Page d'accueil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

  <style type="text/css">
    #first
    {
      margin-top: 180px;
    }

    #slogan
    {
      margin-top: -80px;
    }

    body
    {
      /*overflow-x: hidden;*/
    }
    #info1, #info2, #info3, #info4
    {
      display: flex;
      flex-direction: row;
      width: 1300px;
      height: 150px;
    }

    #type
    {
      width: 1800px;
    }

    #city
    {
      margin-left: -269px;
    }

    #name, #add, #code, #email
    {
      margin-left: 100px; 
    }

    #firstname
    {
      margin-left: 200px;
    }

    #country
    {
      margin-left: 200px;
    }

    #password
    {
      margin-left: -265px;
    }

    #txtMdp, #txtCode, #txtMail
    {
      width: 800px;
    }

    #enregistrer
    {
      width: 1300px;
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
      <a class="nav-link" href="connexion.php" style="border-bottom: 2px black solid">Connexion</a></li>
    </nav>
  </div>
  <!-- Division contenant le slogan, superposé au carrousel et qui rest en haut de l'écran lorsque l'on scroll -->
  <div id="slogan">
    <h3 style="margin-top: 10px"><center>Négociez votre bonheur</center></h3>
  </div>

  <div id="first" style="margin-top: 180px; border: 2px black solid; width: 350px; margin-right: auto; margin-left: auto">
    <center><h3 style="margin-top: 10px">Formulaire d'inscription</h3></center>
  </div>
  <!-- Formulaire d'inscription -->
  <section class="container-fluid"> 
    <div class="container">     
        <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
             <div class="informationgeneral"> 
                <div class="contenue" >
                  <form id="signupform" class="form-horizontal" role="form" action="inscription.php" method="post">
                    <div id="alert_enregist" style="display:none" class="alert alert-danger">
                      <p>Erreur</p>
                      <span></span>
                    </div>

                    <div class="form-check form-check-inline" id="type">
                          <input type="radio" class="form-check-input" id="acheteur" name="typecompte" value="1" checked>
                          <label for="acheteur" style="font-size: 20px;">    Acheteur</label><br>
                        </div>
                        <div class="form-check form-check-inline">
                          <input type="radio" class="form-check-input" id="vendeur" name="typecompte" value="2">
                          <label for="vendeur" style="font-size: 20px;">       Vendeur</label>
                        </div>
                      </div>          

                      
              <div id="info1">
                <div class="form-group" id="name">
                  <label for="nom" class="col-md-3 control-label"><h4>Nom</h4></label>
                  <div class="col-md-9">
                    <input style="border: 2px black solid; width: 300px" type="text" class="form-control" id="nom" name="nom" placeholder="Exemple: Chamberlain" required>
                  </div>
                </div>
                <div class="form-group" id="firstname">
                  <label for="prenom" class="col-md-3 control-label"><h4>Prénom</h4></label>
                  <div class="col-md-9">
                    <input style="border: 2px black solid; width: 300px" type="text" class="form-control" id="prenom" name="prenom" placeholder="Exemple: Wilt" required>
                  </div>
                </div>
              </div>
            
            <div id="info2">
              <div class="form-group" id="add">
                <label for="adresse" class="col-md-3 control-label"><h4>Adresse</h4></label>
                <div class="col-md-9">
                  <input style="border: 2px black solid; width: 300px" type="text" class="form-control" id="adresse" name="adresse" placeholder="Exemple: 13bis rue Julien Chaillioux" required>
                </div>
              </div>

              <div class="form-group" id="country">
                <label for="pays" class="col-md-3 control-label"><h4>Pays</h4></label>
                <div class="col-md-9">
                  <input type="text" class="form-control" style="border: 2px black solid; width: 300px" id="pays" name="pays" placeholder="Exemple: Zanzibar" required>
                </div>
              </div>
            </div>


            <div id="info3">
              <div class="form-group" id="code">
                <label for="postal" class="col-md-3 control-label" id="txtCode"><h4>Code Postal</h4></label>
                <div class="col-md-9">
                  <input type="text" class="form-control" style="border: 2px black solid; width: 300px" id="ostal" name="postal" placeholder="Exemple: 94260" required>
                </div>
              </div>

              <div class="form-group" id="city">
                <label for="ville" class="col-md-3 control-label" id="txtPrix"><h4 style="text-align: left">Ville</h4></label>
                <div class="col-md-9">
                  <input style="width: 300px; border: 2px black solid" type="text" class="form-control" id="ville" name="ville" placeholder="Exemple : Fresnes" required>
                </div>
              </div>
            </div>
                                     
            <div id="info4">
              <div class="form-group" id="email">
                <label for="mail" class="col-md-3 control-label" id="txtMail"><h4>E-Mail</h4></label>
                <div class="col-md-9">
                  <input type="text" class="form-control" style="border: 2px black solid; width: 300px" id="mail" name="mail" placeholder="Exemple: wilt.chamberlain@edu.ece.fr" required>
                </div>
              </div>

              <div class="form-group" id="password">
                <label for="mdp" class="col-md-3 control-label" id="txtMdp"><h4>Mot de passe</h4></label>
                <div class="col-md-9">
                  <input type="password" class="form-control" style="border: 2px black solid; width: 300px" id="form-control" name="pseudo" required>
                </div>
              </div>
            </div>

                    <div class="form-group" id="enregistrer">
              <input type="submit" id="envoi" name="button5" value="Envoyer" style="width: 300px; margin-left: 400px; background-color: black; border: 2px black solid;font-family: 'Roboto-bold', sans-serif;" class="btn btn-info col-md-12">     
            </div>
                    </div> 
                  </form>            
                </div>
              </section>
            </table>

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