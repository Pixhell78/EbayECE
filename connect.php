<?php

	define('DB_SERVER','localhost');
	define('DB_USER', 'root');
	define('DB_PASS','');

	$database ="ebayece";

	$db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
	$db_found = mysqli_select_db($db_handle, $database);

		$mail = $_POST['mail'];
		$pseudo = $_POST['pseudo'];
		$temp =0;


	if (isset($_POST['mail']) && isset($_POST['pseudo'])) {

	if($db_found){
		
		$query = "SELECT pseudo FROM acheteur WHERE mail='$mail'";
		$result = mysqli_query($db_handle,$query);

		if ( $result ) 
		{ 
				$sql = mysqli_fetch_array($result);

				if($sql[0] == $pseudo)
				{
				
				
				echo '<script type="text/javascript">window.alert("Connection réussi !");</script>';

								$sql = "SELECT * FROM acheteur WHERE mail='$mail'";
								$result = mysqli_query($db_handle,$sql);
								while ($data = mysqli_fetch_assoc($result)){
									 	session_start();
										$_SESSION['ID'] = $data['ID'];
										$_SESSION['PSEUDO'] = $data['PSEUDO'];
									echo '<meta http-equiv="refresh" content="1; URL=pagedacceuil.php">';

								}

				}
				else{
					$temp++;
				}

		}
		else
		{ 
		  // results not found 
		} 

		$query = "SELECT pseudo FROM vendeur WHERE mail='$mail'";
		$result = mysqli_query($db_handle,$query);
		if ( $result ) 
		{ 
				$sql = mysqli_fetch_array($result);
						

				if($sql[0] == $pseudo)
				{
				

   				 echo '<script type="text/javascript">window.alert("Connection réussi !");</script>';
								$sql = "SELECT * FROM vendeur WHERE mail='$mail'";
								$result = mysqli_query($db_handle,$sql);
								while ($data = mysqli_fetch_assoc($result)){
									echo $data;
										session_start();
										$_SESSION['ID'] = $data['ID'];
										$_SESSION['PSEUDO'] = $data['PSEUDO'];
							echo '<meta http-equiv="refresh" content="1; URL=pagedacceuil.php">';
							}

				}
				else{
						if($temp==2){ echo '<script type="text/javascript">window.alert("Email ou Pseudo incorrect !");</script>';
						echo '<meta http-equiv="refresh" content="1; URL=pageprincipale.html">';
						}
				}

		}
		else
		{ 
			echo "test";
 // results not found 
		}  
 

	}
	else{
		echo "Database not found";
	}
}
else{
		echo "Certains champs sont vide";
}


	mysqli_close($db_handle);

	?>
