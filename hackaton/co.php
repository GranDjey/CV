<?php

$username = 'dbo776287041';              
$password = '5sjm92q49';              

try{
$dbh = new PDO('mysql:host=db776287041.hosting-data.io;port=3306;dbname=db776287041;charset=utf8', $username, $password);

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);}
    catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

/*
$host_name = 'localhost';
$database="dbs149125";
$user_name = 'root';
$password = '';


$dbh = null;
try {
  $dbh = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
} catch (PDOException $e) {
  echo "Erreur!: " . $e->getMessage() . "<br/>";
  die();
}

$dbh->exec("SET CHARACTER SET utf8");
*/

?>
