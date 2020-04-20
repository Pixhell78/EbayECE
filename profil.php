<!DOCTYPE html>
<html lang="en">
<head>
  <title>ebay ECE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="profil.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="connexion.php">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <?php session_start(); ?>
</head>

<body>
  <!-- Barre de navigation contenant le logo et le menu burger -->
  <div class="menu">


    <img src="logo.svg" id="logo">
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
    <h3><center>Négociez votre bonheur</center></h3>
  </div>

  <!-- DIvision contenant les derniers achats -->
  <div class="container features" id="first">

    <center><h3><center>Ma page</center></h3></center>
  </div>

  <?php
  //Connexion à la base de données ebeayece
  define('DB_SERVER','localhost');
  define('DB_USER', 'root');
  define('DB_PASS','');

  $database ="ebayece";

  $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
  $db_found = mysqli_select_db($db_handle, $database);
  $id = $_SESSION['ID'];

  if ($db_found)
  {
    //On récupère les données utilisateur dans la base de données, en différençiant le cas où l'utilisateur est acheteur ou vendeur
    $infosAcheteur = "SELECT * FROM acheteur WHERE id ='$id'";
    $result = mysqli_query($db_handle, $infosAcheteur);
    $acheteur = mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result) == 0)
    {
      $infosVendeur = "SELECT * FROM vendeur WHERE id = '$id'";
      $result = mysqli_query($db_handle, $infosVendeur);
      $vendeur = mysqli_fetch_assoc($result);

      if(mysqli_num_rows($result) == 0)
      {
        //Cas normalement impossible où l'on ne trouverait pas l'utilisateur dans la base de données
        echo "Erreur";
      }

      else
      {
        //Affichage des données utilisateurs
        $nom = $vendeur['NOM'];
        $prenom = $vendeur['PRENOM'];
        $mail = $vendeur['MAIL'];
        $admin = $vendeur['ADMIN'];

        $infosAdresse = "SELECT * FROM adresse WHERE acheteur ='$id'";
        $result = mysqli_query($db_handle, $infosAdresse);
        $adresse =  mysqli_fetch_assoc($result);

        if(mysqli_num_rows($result) == 0)
        {
          echo "Erreur";
        }
        else
        {
          $lieu = $adresse['adresse'];
          $ville = $adresse['ville'];
          $pays = $adresse['pays'];
        }

        echo '

        <div id="informations">
        <div id="info1">
        <div id="informations">
        <div id="info1">
        <h4>Nom</h4>
        <h5>'.$nom.'</h5>
        <h4>Prénom</h4>
        <h5>'.$prenom.'</h5>
        <h4>E-Mail</h4>
        <h5>'.$mail.'</h5>
        </div>

        <div id="info2">
        <h4>Adresse</h4>
        <h5>'.$lieu.'</h5>
        <h4>Ville</h4>
        <h5>'.$ville.'</h5>
        <h4>Pays</h4>
        <h5>'.$pays.'</h5>
        </div>   
        </div>
        </div>
        </div>

        ';
      }
    }

    else
    {
      $nom = $acheteur['NOM'];
      $prenom = $acheteur['PRENOM'];
      $mail = $acheteur['MAIL'];
      $id = $acheteur['ID'];

      $infosAdresse = "SELECT * FROM adresse WHERE acheteur ='$id'";
      $result = mysqli_query($db_handle, $infosAdresse);
      $adresse =  mysqli_fetch_assoc($result);

      if(mysqli_num_rows($result) == 0)
      {
        echo "Erreur";
      }
      else
      {
        $lieu = $adresse['adresse'];
        $ville = $adresse['ville'];
        $pays = $adresse['pays'];
      }

      echo '

      <div id="informations">
      <div id="info1">
      <div id="informations">
      <div id="info1">
      <h4>Nom</h4>
      <h5>'.$nom.'</h5>
      <h4>Prénom</h4>
      <h5>'.$prenom.'</h5>
      <h4>E-Mail</h4>
      <h5>'.$mail.'</h5>
      </div>

      <div id="info2">
      <h4>Adresse</h4>
      <h5>'.$lieu.'</h5>
      <h4>Ville</h4>
      <h5>'.$ville.'</h5>
      <h4>Pays</h4>
      <h5>'.$pays.'</h5>
      </div>   
      </div>
      </div>
      </div>

      ';
    }
  }

  else
  {
    echo "raté";
  }
  ?>

  

  <!-- Footer -->
  <footer class="page-footer" style="margin-top: 100px">
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