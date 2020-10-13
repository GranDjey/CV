<?php
/*
$username = 'dbo776287041';              
$password = '5sjm92q49';              

try{
$conn = new PDO('mysql:host=db776287041.hosting-data.io;port=3306;dbname=db776287041;charset=utf8', $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);}
    catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
 
*/

  try{
      
  $conn = new PDO('mysql:host=localhost;dbname=new_ete;charset=utf8', 'root', '');
 

      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);}
      catch(Exception $e)
  {
      die('Erreur : '.$e->getMessage());
  }  
  
 

  $req = $conn->prepare('SELECT mutuelle, password, img, description, tel FROM `user` WHERE password=:password');


  if(isset($_POST['submit'])){
      $req->execute([
          'password' => $_POST['password']
          ]);
          $user = $req->fetch();
      if ($user){
        session_start();
          $_SESSION['id'] = $_POST['mutuelle'];
          $_SESSION['mutuelle'] = $user['mutuelle'];
          $_SESSION['img'] = $user['img'];
          $_SESSION['description'] = $user['description']; 
          $_SESSION['tel'] = $user['tel'];
          ob_start();
          header('location:main/menu.php');
          exit;
          ob_end_flush();
      }else{
          echo "<div class='alert alert-light fixed-top col-8 offset-2 mt-5 text-center' role='alert'>
          identifiants incorrects !
        </div>";
      }
  }

?>
