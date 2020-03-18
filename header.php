<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RétroSérie</title>
    
    <link rel="stylesheet" href="vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    
    <script src="vendor/js/jquery-3.4.1.js"></script>
    <script src="vendor/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="img/LogoTV.png" type="image/x-icon">
</head>
<body>
  <header>
      <div class="jumbotron jumbotron-fluid" id="jumbotron">
        <div class="container">
          <h1 class="display-4">RétroSérie</h1>
          
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <a href="index.php" class="navbar-brand"><img src="img/LogoTV.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse">☰</button> 
      
      <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a class="nav-link"></li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Par années</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="list50.php">Années 50</a>
              <a class="dropdown-item" href="list60.php">Années 60</a>
              <a class="dropdown-item" href="list70.php">Années 70</a>
              <a class="dropdown-item" href="list80.php">Années 80</a>
              <a class="dropdown-item" href="list90.php">Années 90</a>
              <a class="dropdown-item" href="list2000.php">Années 2000</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Par continents</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Amérique</a>
              <a class="dropdown-item" href="#">Europe</a>
              <a class="dropdown-item" href="#">Asie</a>
              <a class="dropdown-item" href="#">Océanie</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Par Genres</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Policier</a>
              <a class="dropdown-item" href="#">Aventure</a>
              <a class="dropdown-item" href="#">Comédie</a>
              <a class="dropdown-item" href="#">SF</a>
            </div>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Extras</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Sitcoms</a>
              <a class="dropdown-item" href="#">Génériques TV</a>
              <a class="dropdown-item" href="#">Récompenses</a>
            </div>
          </li>

            <li class="nav-item"><a class="nav-link">Contact</a></li>
          </ul>
        </div>
      </nav>
  </header>