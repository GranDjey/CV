<?php


include '../function/co.php';

@$test = $_POST['titre_video'];
@$test2= $_POST['duree_video']; 
@$test4= $_POST['adresse_video']; 
@$test5 = $_POST['img_video'];
@$test7= $_POST['genre_id'];  
@$test8= $_POST['description_video' | raw]; 
    if(isset($_POST['submit'])){
        
       $conn->query ("INSERT INTO `video` (`titre_video`, `duree_video`, `adresse_video`, `img_video`, `genre_id`, `description_video`)
        VALUES ('$test', '$test2', '$test4', '$test5', '$test7', '$test8')");

    }     
   
    header('location:../admin/create.php');

 //var_dump($_POST['titre_video']);

 // var_dump($_FILES);

$message = [];

foreach ($_FILES as $file) {
    if($file['error']==UPLOAD_ERR_NO_FILE){
        continue;
    }
 // 5- nettoyage du nom de fichier
 $nomAvantNettoyage = $_POST['titre_video'];

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
$cheminDeDestination = '../upload/'.$nomNettoye.'.'.$extension;

// on peut maitenant déplacer le fichier avec le nouveau nom
$moveIsOK = move_uploaded_file($file['tmp_name'], $cheminDeDestination);

//$cheminDeDestination = '../upload/'.$file['name'];
//$cheminTemporaire = $file['tmp_name'];

}




    /*
// 1- un fichier a-t-il été envoyé ?
if(!empty($file['fichier']['tmp_name'])){

    // 2- le fichier a-t-il été correctement uploadé ?
    if(is_uploaded_file($file['fichier']['tmp_name'])){

        // 3- le fichier a-t-il été un type autorisé?
        $typeMime = mime_content_type($file['fichier']['tmp_name']);

        if($typeMime == ['application/pdf']['application.png']){

            // 4- le fichier respecte t-il la taille max?
            $size = filesize($file['fichier']['tmp_name']);

            if($size > 100000){

                $message = "le fichier ne doit pas dépasser 100ko";
            } else 
            {
                 // 5- nettoyage du nom de fichier
                 $nomAvantNettoyage = $_POST['titre_video'];

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
                $extension = substr(strrchr($file['fichier']['name'], "."), 1);
                $cheminDeDestination = '../upload/'.$nomNettoye.'.'.$extension;

                // on peut maitenant déplacer le fichier avec le nouveau nom
                $moveIsOK = move_uploaded_file($file['fichier']['tmp_name'], $cheminDeDestination);

                if ($moveIsOK) {
                    $message[] = "le fichier a été uploadé dans ".$cheminDeDestination;
                } else {
                    $message[] = "suite à une erreur, le fichier n'a pas été uploadé".$cheminDeDestination;
                }
            }
                } else {
                    $message = "il faut obligatoirement mettre un fichier pdf";
                }
        } else {
            $message = "Un problème a eu lieu lors de l'upload";
        }
    } else {
        $message= "Aucun fichier à télécharger";
    }
    
// var_dump($file['tmp_name'].'==>'.$file['name']);
}

*/
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