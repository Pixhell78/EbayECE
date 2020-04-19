<?php
session_start();


$idobjet=$_GET['idobjet']; 
$idacheteur=$_SESSION['ID'];
$Compte=$_SESSION['COMPTE'];



  define('DB_SERVER','localhost');
  define('DB_USER', 'root');
  define('DB_PASS','');
  $database ="ebayece";
  $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
  $db_found = mysqli_select_db($db_handle, $database);
    

if($_SESSION['COMPTE']!='Acheteur'){
  echo '<script type="text/javascript">window.alert("Vous devez possèdez un compte acheteur.");</script>';
  echo '<meta http-equiv="refresh" content="1; URL=pagedacceuil.php">';
  exit;
}
  
  if($db_found){
  
      

      $sql = "INSERT INTO `panier`(`ID`, `OBJET`, `ACHETEUR_ID`) VALUES (NULL,'$idobjet','$idacheteur')";
      $result = mysqli_query($db_handle,$sql);
    echo '<script type="text/javascript">window.alert("Produit ajouté au panier !");</script>';


  mysqli_close($db_handle);

}

header('Refresh:1;URL=pagedacceuil.php'); 
exit;
?>