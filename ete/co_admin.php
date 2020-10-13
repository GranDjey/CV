

  <?php
    include 'function/co.php';
    include 'function/select_login_admin.php';
   
 
    if(isset($_POST['submit'])){
        $req->execute([
          'admin_name' => $_POST['admin_name'],
            'admin_password' => $_POST['admin_password']
            ]);
            $user = $req->fetch();
        if ($user){
            session_start();
            $_SESSION['admin'] = $_POST['admin_name'];
            ob_start();
            header('location:admin/index_admin.php');
            exit;
            ob_end_flush();
        }else{
            echo "<div class='alert alert-light fixed-top col-8 offset-2 mt-5 text-center' role='alert'>
            identifiants incorrects !
          </div>";
        }
    }

?>