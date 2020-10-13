<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Anton|Gloria+Hallelujah|Righteous" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link src="css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/allo_films.css">
    <link rel="stylesheet" href="../css/animate.css">

</head>

<body>


<?php
require_once '../database.php';
    require_once 'function.php';

    $film = getFilm($db,1, $_GET['id']);

?>

<div class="container">
    <img src="<?= $film->Affiche_du_film ?>" alt="">
    <h1><?= $film->Nom_du_film ?></h1>
    <h5><?= $film->Synopsis ?></h5>
    <?php if(isset($_SESSION['admin']) AND !empty($_SESSION['admin'])): ?>
    <div class="row">
        <a href="delete_film.php?id=<?= $film->Id_film ?>"><div class="action col s-4"><h5>Supprimer</h5></div></a>
        <a href="modify_film.php?id=<?= $film->Id_film ?>"><div class="action col s-4"><h5>Modifier</h5></div></a>
        <a href="admin/"><div class="action col s-4"><h5>Espace Admin</h5></div></a>
    </div>
    <?php endif ?>
</div>
<script src="https://code.jquery.com/jquery-3.4.0.slim.min.js"
        integrity="sha256-ZaXnYkHGqIhqTbJ6MB4l9Frs/r7U4jlx7ir8PJYBqbI=" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
    <script src="../js/siema.min.js"></script>
    <script src="../js/allo_films.js"></script>

</body>

</html>