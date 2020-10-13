<?php


$username = 'dbo776287041';              
$password = '5sjm92q49';              

try{
$bdd = new PDO('mysql:host=db776287041.hosting-data.io;port=3306;dbname=db776287041;charset=utf8', $username, $password);

    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);}
    catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}



//$db = new PDO('mysql:host=localhost;charset=utf8mb4;dbname=allo2', 'root', '');
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>