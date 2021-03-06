
<link rel="stylesheet" href="css/nav.css">
<link href="https://fonts.googleapis.com/css?family=Anton|Gloria+Hallelujah|Righteous" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<nav class="navbar navbar-expand-lg navbar-dark bg-fade fixed-top">
  <a class="navbar-brand" href="index.php">ALLOCINE<span>MET</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="allo_films.php">Nouveautés <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Populaires</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Genres</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Animation</a>
          <a class="dropdown-item" href="#">Aventure</a>
          <a class="dropdown-item" href="#">Comédie</a>
          <a class="dropdown-item" href="#">Drame</a>
        </div>
      </li>
    </ul>
    <div class="float-right" id="nav-btn">
        <button type="button" class="nav-button" name="forminscription"><a href="inscription.php"  style="color:black; text-decoration:none">S'inscrire</a></button>
        <button type="button" class="nav-button" name="formconnexion"><a href="connexion.php"  style="color:black; text-decoration:none">Connexion</a></button>
    </div>
    <!--
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
    </form>
-->
  </div>
</nav>


