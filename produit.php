<!DOCTYPE html>
<html>
<head>
  <title>Produit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <?php if ( empty(session_id()) ) session_start(); ?>


  <style type="text/css">
  	#produit
  	{
  		margin-top: 200px;
  	}

  	#nom
  	{
  		font-family: 'Roboto-bold', sans-serif;
  		margin-top: 200px;
  		margin-left: -44px;
  	}

    #nom2
    {
      font-family: 'Roboto-bold', sans-serif;
    }

  	#description
  	{
  		margin-top: 250px;
  		margin-left: -376px;
  	}

  	#prix
  	{
  		margin-top: 350px;
  		margin-left: -376px;
  	}

  	#paiement
  	{
  		margin-top: 400px;
  		margin-left: -376px;
  		width: 300px; 
      	background-color: black;
      	border: 2px black solid;font-family: 'Roboto-bold', sans-serif;
  	}
  	#paiement:hover
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
<div id="slogan" style="margin-top: -100px">
  <h3 style="margin-top: 10px"><center>Négociez votre bonheur</center></h3>
</div>

<div class="container features" id="produit">
	
	<div class="row">
      <?php
  define('DB_SERVER','localhost');
  define('DB_USER', 'root');
  define('DB_PASS','');
  $database ="ebayece";
  $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
  $db_found = mysqli_select_db($db_handle, $database);
        $idobjet = $_GET['id'];

  
  if($db_found){
  

 
     
      
        $sql = "SELECT * FROM objet  WHERE ID='$idobjet'" ;
        $result = mysqli_query($db_handle,$sql);
      $data = mysqli_fetch_array($result);
      $image = $data['IMAGE'];
      $idvendeur = $data['VENDEUR'];
      $nom = $data['NOM'];
      $prix = $data['PRIX'];
      $description = $data['DESCRIPTION'];
      $prixreel = $prix+($prix/8);
      $type=$data['TYPE'];
      $sql1 = "SELECT * FROM VENDEUR WHERE ID='$idvendeur'" ;
      $result1 = mysqli_query($db_handle,$sql1);
      $data1 = mysqli_fetch_array($result1);
      $vendeur = $data1['PSEUDO'];
        
  
  
    echo '     <div class="col-lg-4 col-md-4 col-sm-12">
              <img src="'.$image.'">
              </div>
              
           <div class="col-lg-4 col-md-4 col-sm-12" id="nom">
              <h2 style=" ; margin: 0 auto;">'.$nom.'</h2>
           
                 <h4>'.$description.'</h4>
           
                 <h4>Prix: '.$prix.' €</h4>
            
                 <h4>Vendeur: '.$vendeur.'</h4>';
    if($type=='immediat'){
            echo'  <form id="signupform" class="form-horizontal" role="form" action="ajoutpanier.php" method="get">
                          <button id="btn-signup" class="btn btn-lg btn-dark btn-block  text-uppercase" type="submit" name="idobjet" value="'.$idobjet.'" ></i> &nbsp Ajouter au panier</button>
              </form>
             </div>';}
      else if($type=='enchere'){
            echo'
            </div> 
                       <div class="col-lg-3 col-md-3 col-sm-12" id="nom2">

             <form   id="signupform" class="form-horizontal" role="form" action="enchere.php" method="get">
                          <input type="text" class="form-control" id="prix" name="prix" placeholder="0,00€" required>
                          <button  style="margin-left: -375px;" id="btn-signup" class="btn btn-lg btn-dark btn-block  text-uppercase" type="submit" name="idobjet" value="'.$idobjet.'" ></i> &nbsp Surenchérir</button>
              </form>
                          </div> 

             ';}
            
         }
          else{
            echo "Database not found";
          }    
    
  mysqli_close($db_handle);
  ?>

	</div>
</div>