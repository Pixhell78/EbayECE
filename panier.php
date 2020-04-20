<!DOCTYPE html>
<html lang="en">
<head>
  <title>Panier</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <?php session_start(); ?>

  <style type="text/css">

    #retour
    {

      margin-left: 200px
    }

    #paiement, #retour
    {
      width: 300px; 
      background-color: black;
      border: 2px black solid;font-family: 'Roboto-bold', sans-serif;
    }

    #paiement:hover, #retour:hover
    {
      background-color: white;
      color: black; 
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
    <center><h3 style="width: 200px"><center>Mon panier</center></h3></center>
  </div>

  <div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                     <table class="table">
   <thead class="thead-dark">
     <tr>
       <th>Produit</th>
       <th>ID Produit</th>
       <th>Prix</th>
     </tr>
   </thead>

         <?php
  define('DB_SERVER','localhost');
  define('DB_USER', 'root');
  define('DB_PASS','');
  $database ="ebayece";
  $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
  $db_found = mysqli_select_db($db_handle, $database);
  $id = $_SESSION['ID'];
  $prixTotal = 0;

  if($db_found){
  
      $sql_count = mysqli_query($db_handle,"SELECT COUNT(*) AS nacheteur FROM panier WHERE ACHETEUR_ID='$id'") or exit(mysql_error());
      $donnees = mysqli_fetch_array($sql_count);
      $num = $donnees['nacheteur'];
 
        $sql = "SELECT * FROM panier WHERE ACHETEUR_ID='$id'" ;
        $result = mysqli_query($db_handle,$sql);
        
            for($i=1;$i<=$num;$i++) {

      $data = mysqli_fetch_array($result);
      $idobjet = $data['OBJET'];

        $sql1 = "SELECT * FROM objet WHERE ID='$idobjet'" ;
        $result1 = mysqli_query($db_handle,$sql1);
        $data1 = mysqli_fetch_array($result1);

        $nom = $data1['NOM'];
        $prix = $data1['PRIX'];
        $prixTotal = $prixTotal + $prix;

  
  
    echo '    
   <tbody>
     <tr>
       <td>'.$nom.'</td>
       <td>'.$idobjet.'</td>
       <td>'.$prix.'€</td>
     </tr>

 ';


            }
            echo '<tr>
                    <td><p style = "font-weight: bold">PRIX TOTAL : </p></td>
                    <td></td>
                    <td>'.$prixTotal.'€</td>
                  </tr>';

         }
          else{
            echo "Database not found";
          }    


    
  mysqli_close($db_handle);
  ?>
     </tbody>

    </table>

            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <button onclick=window.location.href="categories.php" class="btn btn-lg btn-block btn-success text-uppercase" id="retour">Continuer les achats</button>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <button class="btn btn-lg btn-block btn-success text-uppercase" id="paiement">Payer</button>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<div id="suppresion">
          <label>Supprimer un article ? Rentrez son numéro</label>
          <form id="signupform" class="form-horizontal" role="form" action="delete.php" method="get">
              <div class="form-group" id="objet">
                  <input type="text" class="form-control" placeholder="ID du produit a supprimer" style="border: 2px black solid; width: 410px" id="form-control" name="suppr" required>

                </div>
                              <input type="submit" id="envoi"  value="Supprimer" style="width: 410px; background-color: black; border: 2px black solid;font-family: 'Roboto-bold', sans-serif;" class="btn btn-info col-md-12"> 

                  </form> 


  </div>
</div>
<!--fin carré vetement-->
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