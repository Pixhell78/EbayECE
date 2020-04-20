<?php
session_start();


$prix=$_GET['prix'];
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
  echo '<script type="text/javascript">window.alert("Vous devez possèder un compte acheteur.");</script>';
  echo '<meta http-equiv="refresh" content="1; URL=pagedacceuil.php">';
  exit;
}
  
  if($db_found){
  
      

        $sql = "SELECT * FROM objet  WHERE ID='$idobjet'" ;
        $result = mysqli_query($db_handle,$sql);
      $data = mysqli_fetch_array($result);
      $prixbase = $data['PRIX'];

      if($prix>$prixbase)
      {

      $sql = "INSERT INTO `moffre`(`ID`, `ACHETEUR_ID`, `OBJET1`, `OFFREA`) VALUES (NULL,'$idacheteur','$idobjet','$prix')";
      $result = mysqli_query($db_handle,$sql);
    echo '<script type="text/javascript">window.alert("Offre envoyée !");</script>';

      }
    else
    {
    echo '<script type="text/javascript">window.alert("Veuillez entrer une offre superieure à '.$prixbase.' €");</script>';

    }
  mysqli_close($db_handle);

}

header('Refresh:1;URL=pagedacceuil.php'); 
exit;
?>