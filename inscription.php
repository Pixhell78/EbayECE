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
      if ($_POST["typecompte"] == "1") { // SI ma_radio EST ÉGAL À 1 
           if ((isset($_POST['mail']) && !empty($_POST['mail'])) && (isset($_POST['pseudo']) && !empty($_POST['pseudo']))) {
                     $nom= $_POST['nom'];
                     $prenom= $_POST['prenom'];
                     $mail= $_POST['mail'];
                     $pseudo= $_POST['pseudo'];
                     $adresse= $_POST['adresse'];
                     $ville= $_POST['ville'];
                     $codepostal= $_POST['codepostal'];
                     $pays= $_POST['pays'];

  if($db_found){
    $sql ="INSERT INTO acheteur (`id`, `nom`,`prenom`, `mail`, `pseudo`) VALUES (NULL,'".$nom."', '".$prenom."','$mail', '$pseudo');";
    $result = mysqli_query($db_handle, $sql);

    $dernierId = mysqli_insert_id($db_handle);

    $sql2 ="INSERT INTO adresse(`id`,`acheteur`,`adresse`, `ville`, `codepostal`, `pays`) VALUES (NULL, '$dernierId', '$adresse','$ville','$codepostal','$pays');";
    $result2 = mysqli_query($db_handle, $sql2);

    echo '<script type="text/javascript">window.alert("Inscription  réussi !");</script>';
    }


  else{
    echo "Database not found";
      }

          }
      }
      else{

        if ((isset($_POST['mail']) && !empty($_POST['mail'])) && (isset($_POST['pseudo']) && !empty($_POST['pseudo']))) {
      $nom= $_POST['nom'];
      $prenom= $_POST['prenom'];
      $mail= $_POST['mail'];
      $pseudo= $_POST['pseudo'];
      $adresse= $_POST['adresse'];
      $ville= $_POST['ville'];
      $codepostal= $_POST['codepostal'];
      $pays= $_POST['pays'];

      $adresse.=" ".$ville." ".$codepostal." ".$pays;
      if($db_found){
                    $sql ="INSERT INTO vendeur (`id`, `nom`,`prenom`, `mail`, `pseudo`,`adresse`,`admin`) VALUES (NULL,'".$nom."', '".$prenom."','$mail', '$pseudo','$adresse ',0);";
                    $result = mysqli_query($db_handle, $sql);

                    echo '<script type="text/javascript">window.alert("Inscription  réussi !");</script>';
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
</head>

<body>
  <!-- Première barre de navigation contenant un lien vers la page de connexion -->
  <nav class="navbar navbar-expand-md" id="liens">

    <div class="collapse navbar-collapse" id="main-navigation">      
      <ul class="navbar-nav">             
        <li class="nav-item"><a class="nav-link" href="connexion.php">Déjà membre ?</a></li>
      </ul>                    
  </nav>

  <!-- Deuxième barre de navigation contenant le logo -->
  <nav class="navbar navbar-expand-md" id="logo">
    <a class="navbar-brand" href="#"><img src="logo.jpg" style="width : 100px; height : 75px;"></a>
  </nav>


  <!-- Formulaire d'inscription -->
  <section class="container-fluid footer"> 
    <div class="container">     
        <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
             <div class="informationgeneral">
                <div class="entete">
                    <div class="titre-information"><center>FORMULAIRE D'INSCRIPTION</center></div>
                </div>  
                <div class="contenue" >
                  <form id="signupform" class="form-horizontal" role="form" action="inscription.php" method="post">
                    <div id="alert_enregist" style="display:none" class="alert alert-danger">
                      <p>Erreur</p>
                      <span></span>
                    </div>           
                <!-- RENSEIGNEMENT -->
                    <!-- Material inline 1 -->
                            <div class="form-check form-check-inline">
                                  <input type="radio" class="form-check-input" id="acheteur" name="typecompte" value="1" checked>
                                 <label class="form-check-label" for="materialInline1">Acheteur</label>
                          </div>

<!-- Material inline 2 -->
                        <div class="form-check form-check-inline">
                             <input type="radio" class="form-check-input" id="vendeur" name="typecompte" value="2">
                              <label class="form-check-label" for="materialInline2">Vendeur</label>
                        </div>

                    <div class="form-group">
                      <label for="prenom" class="col-md-3 control-label">Prenom</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prenom" required>
                      </div>
                    </div>
                                
                    <div class="form-group">
                        <label for="nom" class="col-md-3 control-label">Nom</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom" required>
                        </div>
                    </div>
                                
                    <div class="form-group">
                        <label for="adresse" class="col-md-3 control-label">Adresse</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Adresse" required>
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="pays" class="col-md-3 control-label">Pays</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" id="pays" name="pays" placeholder="Pays">
                      </div>
                    </div>
                                     
                    <div class="form-group">
                      <label for="ville" class="col-md-3 control-label">Ville</label>
                      <div class="col-md-9">
                          <input type="text" class="form-control" id="ville" name="ville" placeholder="Ville" required>
                      </div>
                    </div>
                                
                    <div class="form-group">
                      <label for="code_postal" class="col-md-3 control-label">Code Postal</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" maxlength="5" id="codepostal" name="codepostal" placeholder="Code postal" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="email" class="col-md-3 control-label">Email</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="email" name="mail" placeholder="Adresse email" required>
                        </div>
                    </div>
                                    
                    <div class="form-group">
                      <label for="pseudo" class="col-md-3 control-label">Pseudonyme</label>
                      <div class="col-md-9">
                        <input type="text" id="form-control" class="form-control" name="pseudo" placeholder="Pseudonyme" required>
                      </div>                
                    </div>

                    <div class="form-group" >
                      <!-- Bouttons d'enregistrements et de soumission -->                                        
                      <div class="col-md-offset-3 col-md-9" style=" margin-top:20px;">
                        <button id="btn-signup" type="submit" name="button5" class="btn btn-info col-md-12"><i class="icon-hand-right"></i> &nbsp S'enregistrer</button>
                        <td colspan="2" align="center">
                        </div>
                      </div>
                    </div> 
                  </form>            
                </div>
              </section>
            </table>

  <!-- Footer -->
  <footer class="page-footer">   
      <div class="container">    
        <div class="row">       
            <div class="col-lg-8 col-md-8 col-sm-12">       
              <h6 class="text-uppercase font-weight-bold">Information additionnelle</h6>       
              <p><right>Contactez-nous ! Nous sommes présent sur <a href="https://www.facebook.com/"> Facebook</a> 
                ou <a href="https://www.instagram.com">Instagram</a></right> !</p>
                <p><right>Contact us ! We are on <a href="https://www.facebook.com"> Facebook</a> 
                or <a href="https://www.instagram.com/">Instagram</a></right> !</p>
                <p> <right><a href="https://www.facebook.com/"><img src="img/facebook.png"style="width:3%"></a>  
                  or/and<a href="https://www.instagram.com/"><img src="img/instagram.png" style="width:3%"></a></right></p>
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