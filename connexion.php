<head>
  <title>EBAY ECE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <style> 
    /* Mise en page du footer et du header */
    footer 
    {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    .header
    {        
     background-image: url('login.jpg');        
     background-size: cover;        
     background-position: center; 
     position: relative;
     height: 100px;
    }

  </style>
</head>

<script type="text/javascript">      
    $(document).ready(function(){           
      $('.header').height($(window).height());      
    }); 
</script> 

<body>

	<!-- Première barre de navigation contenant otus les liens vers la page d'inscription-->
	<nav class="navbar navbar-expand-md" id="liens">

    	<div class="collapse navbar-collapse" id="main-navigation">      
      		<ul class="navbar-nav">             
        		<li class="nav-item"><a class="nav-link" href="inscription.php">S'inscrire</a></li>
        	</ul>         
    	</div>
  	</nav>

  	<!-- Deuxième barre de navigation contenant le logo -->
  	<nav class="navbar navbar-expand-md" id="logo">
		<a class="navbar-brand" href="#"><img src="logo.jpg" style="width : 100px; height : 75px;"></a>
  	</nav>

	<!-- Formulaire de connexion -->
	<header class="page-header header container-fluid">
    	<div class = "overlay"></div>
		<form action = "connect.php" method="post" style="width:50%; height: 100%; display: flex;flex-direction:  column; justify-content: center; align-content: center; ">
  			<div class="form-group">
       			<label for="mail" class="col-md-3 control-label"  style="color:white;">Adresse email :</label>
          		<div class="col-md-9">
               		<input type="text" class="form-control" id="mail" name="mail" placeholder="Adresse email" required>
          		</div>
  			</div>
                                    
     		<div class="form-group">
          		<label for="pseudo" class="col-md-3 control-label" style="color:white;">Pseudonyme :</label>
            	<div class="col-md-9">
             		<input type="text" id="pseudo"  class="form-control" name="pseudo" placeholder="Pseudonyme" required>
                </div>
     		</div>

     		<!-- Boutton d'enregistrement -->
    		<div class="form-group" >                                        
         		<div class="col-md-offset-3 col-md-9" style=" margin-top:20px;">
            		<input id="btn-signin" type="submit" class="btn btn-info col-md-12" value ="Se connecter" ><i class="icon-hand-right"></i>
                </div>
    		</div>
    		<!-- Lien vers la page d'inscription -->
			<p style="color : white; margin-left: 17px">Pas encore membre ? <a href="inscription.php">Inscrivez-vous</a></p>
		</form>
	</header>

	<!-- Footer -->
	<footer class="page-footer">   
  		<div class="container">    
    		<div class="row">       
      			<div class="col-lg-8 col-md-8 col-sm-12">       
        			<h6 class="text-uppercase font-weight-bold">Information additionnelle</h6>       
        			<p><right>Contactez-nous ! Nous sommes présent sur <a href="https://www.facebook.com/"> Facebook</a> 
          			ou <a href="https://www.instagram.com">Instagram</a></right> !</p>
          			<p><right>Contact us ! We are on <a href="https://www.facebook.com/"> Facebook</a> 
            		or <a href="https://www.instagram.com/">Instagram</a></right> !</p>
            		<p> <right><a href="https://www.facebook.com/"><img src="img/facebook.png"style="width:3%"></a>  
              		or/and<a href="https://www.instagram.com/"><img src="img/instagram.png" style="width:3%"></a></right></p>
            	</div>   
            	<div class="col-lg-4 col-md-4 col-sm-12">       
              		<h6 class="text-uppercase font-weight-bold">Contact</h6>       
              		<p>             37, quai de Grenelle, 75015 Paris, France <br>             info@webDynamique.ece.fr <br>             +33 01 02 03 04 05 <br>             +33 01 03 02 05 04       </p>     
            	</div>   
          	</div>   
          	<div class="footer-copyright text-center">&copy; 2020 Copyright | Droit d'auteur: BENARD Antoine, VANDENBOSSCHE Hugo et SAIDANI Sofiane
         	</div>
        </div>
    </footer>

</body>


