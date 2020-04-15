<!DOCTYPE html>
<html>
<head>
  <title>Panier</title>
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
      <a class="nav-link" href="connexion.php">Vendre</a></li>
      <a class="nav-link" href="connexion.php">Admin</a></li>
      <a class="nav-link" href="profil.php">Ma Page</a></li>
      <a class="nav-link" href="panier.php" id ="pan">Mon panier<img src="panier_noir.svg" style="width: 40px; height: 40px; margin-right: -5px"></a>
    </nav>
  </div>
  <!-- Division contenant le slogan, superposé au carrousel et qui rest en haut de l'écran lorsque l'on scroll -->
  <div id="slogan">
    <h3 style="margin-top: 10px"><center>Négociez votre bonheur</center></h3>
  </div>


  <div class="container features" id="first">
    <h3 style="text-align: center; margin-bottom: 15px; margin-top: 15px ">Votre panier</h3>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Product</th>
                            <th scope="col">Available</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-right">Price</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                     
                       
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Sous-total</td>
                            <td class="text-right">0 €</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Frais d'expedition</td>
                            <td class="text-right">6,90 €</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong>6,90 €</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
          </div>

          <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <button class="btn btn-block btn-light">Continuer les achats</button>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <button class="btn btn-lg btn-block btn-success text-uppercase">Payer</button>
                </div>
            </div>
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