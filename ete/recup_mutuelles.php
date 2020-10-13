<?php


include '../function/co.php';
   
@$mut = $_POST['mutuelle'];
@$mut1 = $_POST['password'];
@$mut2= $_POST['img']; 
@$mut3 = $_POST['tel'];
@$mut5 = $_POST['description']; 

    if(isset($_POST['submit'])){

        $conn->query ("INSERT INTO `user` (`mutuelle`, `password`, `img`, `tel`, `description`)
        VALUES ('$mut', '$mut1', '$mut2', '$mut3', '$mut5')");

    }
    header('location:../admin/index_admin.php');

 //var_dump($_POST['titre_video']);

 // var_dump($_FILES);

$message = [];

foreach ($_FILES as $file) {
    if($file['error']==UPLOAD_ERR_NO_FILE){
        continue;
    }
 // 5- nettoyage du nom de fichier
 $nomAvantNettoyage = $_POST['mutuelle'];

 // remplacer les caractères qui ne sont ni des lettres ni des nombres par un tiret
$nomEnCoursDeNettoyage = preg_replace('~[^\\pL\d]+~u', '-', $nomAvantNettoyage);

// retire les tirets en début et fin de chaine
$nomEnCoursDeNettoyage = trim($nomEnCoursDeNettoyage, '-');

//passer d'un encode utf-8 à un encodage
$nomEnCoursDeNettoyage = iconv('utf-8', 'us-ascii//TRANSLIT', $nomEnCoursDeNettoyage);

// on met le nom en minuscules
$nomEnCoursDeNettoyage = strtolower($nomEnCoursDeNettoyage);

//suppression des caractères indesirables
$nomNettoye = preg_replace('~[^-\w]+~', '', $nomEnCoursDeNettoyage);

// chemin complet de destination (avec l'extension)
$extension = substr(strrchr($file['name'], "."), 1);
$cheminDeDestination = '../img2/'.$nomNettoye.'.'.$extension;

// on peut maitenant déplacer le fichier avec le nouveau nom
$moveIsOK = move_uploaded_file($file['tmp_name'], $cheminDeDestination);

//$cheminDeDestination = '../upload/'.$file['name'];
//$cheminTemporaire = $file['tmp_name'];

}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Traitement upload</title>
</head>

<body>

    <h1>Upload</h1>


</body>

</html>