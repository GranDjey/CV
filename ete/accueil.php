<?php session_start();
?>
<!doctype html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/accueil.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Eté Indien</title>
  <link rel="icon" sizes="64x64" href="img2/fav.png">
</head>

<body>

  <form method="post" action="co_mutuelle.php" class="form-signin ">
    <div id="logo" class="mb-5 mx-auto text-center">
      <img class="mt-5" src="img2/logo.jpg" width="200px" alt="Logo Eté Indien">
    </div>
    <h1 class="h3 mb-3 text-light text-center font-weight-normal text-dark">Espace Connexion</h1>
    <hr style="background-color:#FF5C00;">
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="password" id="inputPassword" class="form-control text-center shadow"
      placeholder="Votre mot de passe" required>
    <div class="checkbox mb-3">
    </div>
    <button class="btn btn-lg  btn-block" name="submit" type="submit">Connexion</button>
    <a href="https://www.ete-indien-editions.fr/" class="ac mt-3">Retour à l'Accueil</a>

    <p class="mt-5 text-dark text-center">&copy; Été indien 2019</p>
  </form>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>