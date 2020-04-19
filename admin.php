
<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

  <style type="text/css">
    #action
    {
      margin-left: 200px;
      height: 200px;
    }

    #action a
    {
      margin-left: 50px;
      font-size: 25px;
      border: 2px black solid;
      border-radius: 5px;
      color: white;
      background-color: black;
    }

    #action a:hover
    {
      color: black;
      background-color: white;
      text-decoration: none;
    }

    #utilisateur
    {
      margin-left: 200px;
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



<div class="col-lg-8 col-md-8 col-sm-12" style="  margin: 0 auto;">

    <div class="container features" id="first">
    <center><h3 style="width: 300px"><center>Liste des Produits</center></h3></center>
  </div>
     <table class="table">
   <thead class="thead-dark">
     <tr>
       <th>ID</th>
       <th>Nom du Produit</th>
       <th>Vendeur</th>
       <th>Prix</th>
       <th>Description</th>

     </tr>
   </thead>

         <?php
  define('DB_SERVER','localhost');
  define('DB_USER', 'root');
  define('DB_PASS','');
  $database ="ebayece";
  $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
  $db_found = mysqli_select_db($db_handle, $database);
    
  
  if($db_found){
  
      $sql_count = mysqli_query($db_handle,"SELECT COUNT(*) AS nom FROM objet") or exit(mysql_error());
      $donnees = mysqli_fetch_array($sql_count);
      $num = $donnees['nom'];
 
     
      
        $sql = "SELECT * FROM objet" ;
        $result = mysqli_query($db_handle,$sql);
            for($i=1;$i<=$num;$i++) {

      $data = mysqli_fetch_array($result);
      $idobjet = $data['ID'];
      $idvendeur = $data['VENDEUR'];
      $nom = $data['NOM'];
      $prix = $data['PRIX'];
      $description = $data['DESCRIPTION'];

      $sql1 = "SELECT * FROM VENDEUR WHERE ID='$idvendeur'" ;
      $result1 = mysqli_query($db_handle,$sql1);
      $data1 = mysqli_fetch_array($result1);
      $vendeur = $data1['PSEUDO'];
        
  
  
    echo '    
   <tbody>
     <tr>
       <td>'.$idobjet.'</td>
       <td>'.$nom.'</td>
       <td>'.$vendeur.'</td>
       <td>'.$prix.'</td>
       <td>'.$description.'</td>

     </tr>
   </tbody>
 ';
            }
         }
          else{
            echo "Database not found";
          }    
    
  mysqli_close($db_handle);
  ?>

</table>

  <div id="action">
    <h4 style="height: 50px">Quelle produit voulez vous supprimer ?</h4>
<form id="signupform" class="form-horizontal" role="form" action="supprimerobjet.php" method="get">
              <div class="form-group" id="objet">
                  <input type="text" class="form-control" placeholder="ID du produit a supprimer" style="border: 2px black solid; width: 410px" id="form-control" name="idobjet" required>

                </div>
                              <input type="submit" id="envoi"  value="Supprimer" style="width: 410px; background-color: black; border: 2px black solid;font-family: 'Roboto-bold', sans-serif;" class="btn btn-info col-md-12"> 

                  </form> 
             </div>
             </div>


<div class="col-lg-8 col-md-8 col-sm-12" style="  margin: 0 auto;">

    <div class="container features" id="first">
    <center><h3 style="width: 300px"><center>Liste des Vendeurs</center></h3></center>
  </div>
     <table class="table">
   <thead class="thead-dark">
     <tr>
       <th>ID</th>
       <th>Nom</th>
       <th>Prenom</th>
       <th>Email</th>
       <th>Pseudo</th>

     </tr>
   </thead>

         <?php

  $database ="ebayece";
  $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
  $db_found = mysqli_select_db($db_handle, $database);
    
  
  if($db_found){
  
      $sql_count = mysqli_query($db_handle,"SELECT COUNT(*) AS nom FROM vendeur") or exit(mysql_error());
      $donnees = mysqli_fetch_array($sql_count);
      $num = $donnees['nom'];
 
     
      
        $sql = "SELECT * FROM vendeur" ;
        $result = mysqli_query($db_handle,$sql);
            for($i=1;$i<=$num;$i++) {

      $data = mysqli_fetch_array($result);
      $id = $data['ID'];
      $nom = $data['NOM'];
      $prenom = $data['PRENOM'];
      $mail = $data['MAIL'];
      $pseudo = $data['PSEUDO'];


        
  
  
    echo '    
   <tbody>
     <tr>
       <td>'.$id.'</td>
       <td>'.$nom.'</td>
       <td>'.$prenom.'</td>
       <td>'.$mail.'</td>
       <td>'.$pseudo.'</td>

     </tr>
   </tbody>
 ';
            }
         }
          else{
            echo "Database not found";
          }    
    
  mysqli_close($db_handle);
  ?>

</table>

  <div id="action" >
    <h4 style="height: 50px">Quelle vendeur voulez vous supprimer ?</h4>
<form id="signupform" class="form-horizontal" role="form" action="supprimervendeur.php" method="get">
              <div class="form-group" id="objet">
                  <input type="text" class="form-control" placeholder="ID du produit a supprimer" style="border: 2px black solid; width: 410px" id="form-control" name="idvendeur" required>

                </div>
                              <input type="submit" id="envoi"  value="Supprimer" style="width: 410px; background-color: black; border: 2px black solid;font-family: 'Roboto-bold', sans-serif;" class="btn btn-info col-md-12"> 

                  </form> 
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




