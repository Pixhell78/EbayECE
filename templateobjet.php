          <?php
  define('DB_SERVER','localhost');
  define('DB_USER', 'root');
  define('DB_PASS','');
  $database ="ebayece";
  $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
  $db_found = mysqli_select_db($db_handle, $database);
    
  
  if($db_found){
  
      $sql_count = mysqli_query($db_handle,"SELECT COUNT(*) AS nom FROM objet WHERE type='immediat'") or exit(mysql_error());
      $donnees = mysqli_fetch_array($sql_count);
      $num = $donnees['nom'];
 
     
      
        $sql = "SELECT * FROM objet  WHERE type='immediat'" ;
        $result = mysqli_query($db_handle,$sql);
            for($i=1;$i<=$num;$i++) {

      $data = mysqli_fetch_array($result);
      $image = $data['IMAGE'];
      $idvendeur = $data['VENDEUR'];
      $nom = $data['NOM'];
      $prix = $data['PRIX'];
      $description = $data['DESCRIPTION'];
      $prixreel = $prix+($prix/8);
      $sql1 = "SELECT * FROM VENDEUR WHERE ID='$idvendeur'" ;
      $result1 = mysqli_query($db_handle,$sql1);
      $data1 = mysqli_fetch_array($result1);
      $vendeur = $data1['PSEUDO'];
        
  
  
    echo '     <div class="col-lg-4 col-md-4 col-sm-12">
              <a href="guitare.php"><img src="'.$image.'" class="img-fluid" style="margin-top: 50px;"></a>
              <p>'.$description.'<br>
              <span>Prix : '.$prix.'€ </span><span style=" text-decoration: line-through;">Prix réel: '.$prixreel.' €<br></span>
              <span>Vendu par : '.$vendeur.' </span></p>
              </div>';
            }
         }
          else{
            echo "Database not found";
          }    
    
  mysqli_close($db_handle);
  ?>