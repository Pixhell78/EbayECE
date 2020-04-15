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


  <!-- Formulaire d'inscription -->
  <section class="container-fluid"> 
    <div class="container" id="first">     
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
                    <div class="form-group">
                      <label for="prenom" class="col-md-3 control-label">Prenom</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="prenom" required>
                      </div>
                    </div>
                                
                    <div class="form-group">
                        <label for="nom" class="col-md-3 control-label">Nom</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="nom" name="nom" placeholder="nom" required>
                        </div>
                    </div>
                                
                    <div class="form-group">
                        <label for="adresse" class="col-md-3 control-label">Adresse</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="adresse" name="adresse" placeholder="adresse" required>
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="pays" class="col-md-3 control-label">Pays</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" id="pays" name="pays" placeholder="pays">
                      </div>
                    </div>
                                     
                    <div class="form-group">
                      <label for="ville" class="col-md-3 control-label">Ville</label>
                      <div class="col-md-9">
                          <input type="text" class="form-control" id="ville" name="ville" placeholder="ville" required>
                      </div>
                    </div>
                                
                    <div class="form-group">
                      <label for="code_postal" class="col-md-3 control-label">Code Postal</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" maxlength="5" id="code_postal" name="cp" placeholder="Code postal" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="phone" class="col-md-3 control-label">Téléphone</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="phone" name="tel" placeholder="Téléphone" required>
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="email" class="col-md-3 control-label">Email</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="email" name="mail" placeholder="adresse email" required>
                        </div>
                    </div>
                                    
                    <div class="form-group">
                      <label for="register_password" class="col-md-3 control-label">Mot de passe</label>
                      <div class="col-md-9">
                        <input type="password" id="register_password" data-minlength="8" class="form-control" name="password" placeholder="mot de passe" required>
                        <sub>Minimum de 8 caracteres</sub>
                      </div>                
                    </div>

                    <div class="form-group" >
                      <!-- Bouttons d'enregistrements et de soumission -->                                        
                      <div class="col-md-offset-3 col-md-9" style=" margin-top:20px;">
                        <button id="btn-signup" type="button" class="btn btn-info col-md-12"><i class="icon-hand-right"></i> &nbsp S'enregistrer</button>
                        <td colspan="2" align="center">
                        <input type="submit" id="envoi" name="button5" value="Envoyer" style="margin-top : 5px"></td>     
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

</body>
</html>