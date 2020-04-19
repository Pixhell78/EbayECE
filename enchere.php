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
  echo '<script type="text/javascript">window.alert("Vous devez possèdez un compte acheteur.");</script>';
  echo '<meta http-equiv="refresh" content="1; URL=pagedacceuil.php">';
  exit;
}
  
  if($db_found){
  
      
      $sql2 = "SELECT * from enchere WHERE OBJET='$idobjet' ORDER BY OFFRE DESC LIMIT 1";
      $result2 = mysqli_query($db_handle,$sql2);
      $data2 = mysqli_fetch_array($result2);
      $offre = $data2['OFFRE'];


	  
        $sql = "SELECT * FROM objet  WHERE ID='$idobjet'" ;
        $result = mysqli_query($db_handle,$sql);
      $data = mysqli_fetch_array($result);
      $prixbase = $data['PRIX'];

      if(($prix>$offre || $offre==null) && $prix>$prixbase)
      {

      $sql = "INSERT INTO `enchere`(`ID`, `OBJET`, `ACHETEUR_ID`, `OFFRE`) VALUES (NULL,'$idobjet','$idacheteur','$prix')";
      $result = mysqli_query($db_handle,$sql);
      	echo" ";
    echo '<script type="text/javascript">window.alert("Enchere publiee !");</script>';

      }
    else
    {
    echo '<script type="text/javascript">window.alert("Veuillez entrez une enchere superieur a '.$offre.' €");</script>';

    }
  mysqli_close($db_handle);

}

header('Refresh:1;URL=pagedacceuil.php'); 
exit;
?>