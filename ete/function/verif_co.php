<?php 

if(!isset($_SESSION['admin'])){
    header('location:../admin/index_admin.php');
}
?>