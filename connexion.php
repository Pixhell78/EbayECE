<head>
  <title>Connexion</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

  <style type="text/css">
    body
    {
      overflow-x: hidden;
    }
    #design
    {
      display: flex;
      flex-direction: row;
      width: 1300px;
      height: 150px;
      margin-left: 100px;
    }
    #txtMdp, #txtMail
    {
      width: 800px;
    }
    #password
    {
      margin-left: -135px;
    }
    #slogan
    {
      margin-top: 100px;
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
      <a class="nav-link" id ="pan" href="inscription.php">Inscription</a></li>             

    </nav>
  </div>
  <!-- Division contenant le slogan, superposé au carrousel et qui rest en haut de l'écran lorsque l'on scroll -->
  <div id="slogan">
    <h3 style="margin-top: 10px"><center>Négociez votre bonheur</center></h3>
  </div>


  <!-- Formulaire de connexion -->
  <form action = "connect.php" method="post" style="width:50%; height: 100%; display: flex;flex-direction:  column; justify-content: center; align-content: center; ">
    <div id = "design">
      <div class="form-group" id="email">
        <label for="mail" class="col-md-3 control-label" id="txtMail"><h4>E-Mail</h4></label>
        <div class="col-md-9">
          <input type="text" class="form-control" style="border: 2px black solid; width: 300px" id="mail" name="mail" placeholder="Exemple: wilt.chamberlain@edu.ece.fr" required>
        </div>
      </div>

      <div class="form-group" id="password">
        <label for="pseudo" class="col-md-3 control-label" id="txtMdp"><h4>Mot de passe</h4></label>
        <div class="col-md-9">
          <input type="password" class="form-control" style="border: 2px black solid; width: 300px" id="pseudo" name="pseudo" required>
        </div>
      </div>
    </div>

    <div class="form-group" id="enregistrer">
      <input type="submit" id="envoi" name="button5" value="Envoyer" style="width: 300px; margin-left: 450px; background-color: black; border: 2px black solid;font-family: 'Roboto-bold', sans-serif;" class="btn btn-info col-md-12">     
    </div>
    <!-- Lien vers la page d'inscription -->
    <p style="color : black; margin-left: 450px;width: 1300px">Pas encore membre ? <a href="inscription.php">Inscrivez-vous</a></p>
  </form>

  <!-- Footer -->
  <footer class="page-footer" style="margin-top: -100px">
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


