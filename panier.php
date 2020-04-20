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

<?php session_start(); ?>
  <script type="text/javascript">
    
    function ajout()
  </script>

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



  <!-- DIvision contenant les derniers achats -->
  <div class="container features" id="first">
    <center><h3 style="width: 200px"><center>Mon panier</center></h3></center>
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

      <th>ID</th>
       <th>Produit</th>
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

  $prixtotal =0;

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

        
        $prixtotal = $prixtotal + $prix;
  
  
    echo '    
   <tbody>
     <tr>

        <td>'.$idobjet.'</td>
       <td>'.$nom.'</td>
       <td>'.$prix.'€</td>
     </tr>


 ';


            }

        }

   /* if($db_found){
     $date=new Datetime('now');
      
      $sqle ="SELECT *,MAX(OFFRE) FROM enchere WHERE ACHETEUR_ID='$id' GROUP BY OBJET, ACHETEUR_ID";
      $resulte = mysqli_query($db_handle,$sqle);
      $num = 0;

if (mysqli_num_rows($resulte) == 0) {
} else {
  while ($ligneresultat = mysqli_fetch_array($resulte)) {


        $idobjet=$ligneresultat['OBJET'];
        $maxoffre=$ligneresultat['MAX(OFFRE)'];

      $num ++;

        $sql3 = "SELECT * FROM objet WHERE ID='$idobjet' AND FIN <= CURDATE()" ;
        $result3 = mysqli_query($db_handle,$sql3);
        $data3 = mysqli_fetch_array($result3);
        $nom = $data3['NOM'];
        $prixbase = $data3['PRIX'];

        $sql ="SELECT * FROM enchere WHERE OBJET='$idobjet'ORDER BY OFFRE DESC LIMIT 2 OFFSET 1";
      $result = mysqli_query($db_handle,$sql);

if (mysqli_num_rows($result) == 0) {
       $prixbase++;
       $prix = $prixbase;
      } 

else {
      $sql ="SELECT * FROM enchere WHERE OBJET='$idobjet'ORDER BY OFFRE DESC LIMIT 2 OFFSET 1";
      $result = mysqli_query($db_handle,$sql);
      $data2 = mysqli_fetch_array($result);
      $prix = $data2['OFFRE'];
      ++$prix;
    }
    echo '    
   <tbody>
     <tr>
       <td>'.$nom.'</td>
       <td>'.$idobjet.'</td>
       <td>'.$prix.'€</td>

     </tr> ';
             
        
 

      }
}
            }
          else{
            echo "Database not found";
          }    */
    echo '    
     <tr style="background-color:grey;color:white;">
            <td > </td>

       <td >TOTAL</td>
       <td>'.$prixtotal.'€</td>
     </tr>
     </tbody>

    </table>

            </div>
          </div>

          <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">

                    <button class="btn btn-lg btn-block btn-dark text-uppercase" onclick="window.location.href="pagedacceuil.php" id="retour">Continuer les achats</button>
                </div>

                <div class="col-sm-12 col-md-6 text-right">

                  <form id="signupform" class="form-horizontal" role="form" action="paiement.php" method="get">
                          <button id="paiement" type="submit" name="idobjet" value="'.$prixtotal.'" class="btn btn-lg btn-block btn-dark text-uppercase"">Payer</button>
              </form>
                   
                </div>';

    
  mysqli_close($db_handle);
  ?>    

     
            </div>
          </div>
        </div>
        </div>
    </div>
</div>
<div id="suppresion">
      </div>


  <div id="suppresion" style="margin-left: 33%;">
          <label>Supprimer un article ? Rentrez son numéro</label>
          <form id="signupform" class="form-horizontal" role="form" action="delete.php" method="get">
              <div class="form-group" id="objet">
                  <input type="text" class="form-control" placeholder="ID du produit a supprimer" style="border: 2px black solid; width: 410px" id="form-control" name="suppr" required>

                </div>

                              <input type="submit" id="envoi"  value="Supprimer" style=" width: 410px; background-color: black; border: 2px black solid;font-family: 'Roboto-bold', sans-serif;" class="btn btn-info col-md-12"> 

                  </form> 


  </div>
</div>
<!--fin carré vetement-->
    </div>
      </div>
    </div>
</br></br>

  </footer>

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