<?php session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="icon" sizes="32x32" href="img/favlogo.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    
</head>

<body>

    <form  method="post" class="form-signin">
        <center>
    <img src="img/logo_transpa.png" alt="logo">
</center>
        <h1 class="text-center text-light">MAITRISE<strong>WEB</strong><h1>
        <h1 class="h3 mb-3 text-light text-center font-weight-normal">Connectez vous !</h1>
        <label for="nom" class="sr-only">Nom</label>
        <input type="text" name="Name_admin" id="inputUserName" class="form-control" placeholder="Votre nom" required
            autofocus>
        <label for="mdp" class="sr-only">Password</label>
        <input type="mdp" name="Mdp_admin" id="mdp" class="form-control" placeholder="Votre mot de passe"
            required>
        <div class="checkbox mb-3">
        </div>
        <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Se connecter</button>
        
    </form>

    <?php
    include 'function/co.php';
    include 'function/select_login.php';
   
 
    if(isset($_POST['submit'])){
        $req->execute([
            'Name_admin' => $_POST['Name_admin'],
            'Mdp_admin' => $_POST['Mdp_admin']
            ]);
            $user = $req->fetch();
        if ($user){
            $_SESSION['admin'] = $_POST['Name_admin'];
            ob_start();
            header('location:index_admin.php');
            exit;
            ob_end_flush();
        }else{
            echo "<div class='alert alert-light fixed-top col-8 offset-2 mt-5 text-center' role='alert'>
            identifiants incorrects !
          </div>";
        }
    }

?>

</body>

</html>
