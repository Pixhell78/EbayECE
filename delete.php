<?php
session_start();

$produitAsuppr = $_GET['suppr'];

define('DB_SERVER','localhost');
define('DB_USER', 'root');
define('DB_PASS','');
$database ="ebayece";
$db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
$db_found = mysqli_select_db($db_handle, $database);

if($db_found)
{
	$sql2 = "DELETE FROM `panier` WHERE `objet` = '$produitAsuppr'";
      $result2 = mysqli_query($db_handle,$sql2);
      $count = mysqli_affected_rows($db_handle);

      if($count == "1"){
    echo '<script type="text/javascript">window.alert("Produit supprimé !");</script>';
      }
          else
    {
    echo '<script type="text/javascript">window.alert("Ce nom ne correspond a aucun produit");</script>';

    }

}

header('Refresh:1;URL=panier.php');
exit;
?>