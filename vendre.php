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
      <a class="nav-link" href="connexion.php">Connexion</a></li>
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
                  <form id="signupform" class="form-horizontal" role="form" action="inscription.php" method="post">
                    <div id="alert_enregist" style="display:none" class="alert alert-danger">
                      <p>Erreur</p>
                      <span></span>
                    </div>           
                <!-- RENSEIGNEMENT -->
                    <div class="form-group">
                      <label for="vente" class="col-md-3 control-label">Type de vente</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" id="type" name="vente" placeholder="vente" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="produit" class="col-md-3 control-label">Type de produit</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" id="type" name="produir" placeholder="produit" required>
                      </div>
                    </div>
                                
                    <div class="form-group">
                        <label for="nom" class="col-md-3 control-label">Nom</label>
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
                      <label for="iamge" style="margin-left: 15px">Image<br></label><br><input type="file" id="image" name="Fichier" size="35" style="margin-left: 15px">
                    </div>
                                     
                    <div class="form-group">
                      <label for="ville" class="col-md-3 control-label">Prix de vente</label>
                      <div class="col-md-9">
                          <input type="text" class="form-control" id="prix" name="prix" placeholder="0,00€" required>
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