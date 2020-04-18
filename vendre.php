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

    #price
    {
      margin-left: 470px;
    }

    #desc
    {
      margin-left: 461px;
    }

    #deroul2
    {
      margin-left: -200px;
    }

    #txtPrix
    {
      width: 800px;
    }

    #txtProduit
    {
      width: 1000px;
    }

    #txtVente
    {
      width: 1000px;
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
      <a class="nav-link" href="connexion.php">Connexion</a></li>
      <a class="nav-link" href="panier.php" id ="pan">Mon panier<img src="panier_noir.svg" style="width: 40px; height: 40px; margin-right: -5px"></a>
    </nav>
  </div>

  <!-- Division contenant le slogan, superposé au carrousel et qui rest en haut de l'écran lorsque l'on scroll -->
  <div id="slogan" style="margin-top: -80px">
    <h3 style="margin-top: 10px"><center>Négociez votre bonheur</center></h3>
  </div>

  <div id="first" style="margin-top: 180px; border: 2px black solid; width: 300px; margin-right: auto; margin-left: auto">
    <center><h3 style="margin-top: 10px">Vendez votre produit</h3></center>
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
            <!-- RENSEIGNEMENT -->
            <div id="type">
              <div class="form-group" id="deroul1">
                <label for="vente" class="col-md-3 control-label" id="txtProduit"><h4>Type de produits</h4></label>
                <div class="col-md-9">
                  <input style="border: 2px black solid; width: 300px" type="text" class="form-control" id="prod" name="prod" placeholder="Feraille ou trésor, musée ou VIP" required>
                </div>
              </div>

              <div class="form-group" id="deroul2">
                <label for="vente" class="col-md-3 control-label" id="txtVente"><h4>Type de vente</h4></label>
                <div class="col-md-9">
                  <input style="border: 2px black solid; width: 300px" type="text" class="form-control" id="vente" name="vente" placeholder="Directe ou enchère" required>
                </div>
              </div>
            </div>

            <div id="ecrire">
              <div class="form-group" id="name">
                <label for="nom" class="col-md-3 control-label"><h4>Nom</h4></label>
                <div class="col-md-9">
                  <input style="border: 2px black solid; width: 300px" type="text" class="form-control" id="nom" name="nom" placeholder="nom" required>
                </div>
              </div>

              <div class="form-group" id="price">
                <label for="ville" class="col-md-3 control-label" id="txtPrix"><h4 style="text-align: left">Prix de vente</h4></label>
                <div class="col-md-9">
                  <input style="width: 300px; border: 2px black solid" type="text" class="form-control" id="prix" name="prix" placeholder="0,00€" required>
                </div>
              </div>
            </div>


            <div id="fin">
              <div class="form-group" id="pict">
                <label for="image" style="margin-left: 15px"><h4>Image</h4><br></label>
                <div id="depot"><input type="file" id="image" name="Fichier" size="35" style="margin-left: 15px; margin-top: 50px"></div>
              </div>

              <div class="form-group" id="desc">
                <label for="adresse" class="col-md-3 control-label"><h4>Description</h4></label>
                <div class="col-md-9">
                  <textarea style="border: 2px black solid; width: 300px; border-radius: 5px;height: 120px" id="description" name="description" required>
                  </textarea>
                </div>
              </div>
            </div>

            <div class="form-group" id="enregistrer">
              <input type="submit" id="envoi" name="button5" value="Envoyer" style="width: 300px; margin-left: 400px; background-color: black; border: 2px black solid;font-family: 'Roboto-bold', sans-serif;" class="btn btn-info col-md-12">     
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