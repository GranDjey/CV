<?php session_start();
include '../function/verif_co.php';?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ete indien - Admin </title>
    <link rel="icon" sizes="64x64" href="img2/fav.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admin2.css">

    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

</head>

<body style="font-family:'Roboto Condensed">

    <?php   
    include '../function/co.php';?>
    <div class="container-fluid text-center">
        <div class="row">
            <button type="submit" class="btn btn-success admin_vid_btn">
                <a class="admin_title_btn_text" href="create.php">AJOUTER UNE VIDEO</a>
            </button>
            <h2 class="admin_title">ACCUEIL ADMINISTRATEUR</h2>
            <button type="submit" class="btn btn-success admin_mut_btn" style="float: right;">
                <a class="admin_title_btn_text" href="create_mutuelle.php">AJOUTER UN CLIENT</a>
            </button>
            <button type="submit" class="btn btn-success admin_mut_btn" style="float: right;">
                <a class="admin_title_btn_text" href="modif_footer.php">MODIFIER LES INFOS</a>
            </button>
        </div>
        <div class="row justify-content-center text-center mx-auto admin_group">
            <?php
            include '../function/select_all.php';
     
            foreach($articles as $article){
            echo '

            
            <div class="admin_block col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12" id="vid">
            <div class="card" style="max-width:20rem;">
                <a href="#"><img src="'.$article["img_video"].'" id="liens" alt=""></a>
                <div class="card-body">
                    <a href="#" class="card-title">'.$article["titre_video"].'</a>
                    <div class="row" id="sous-vid">
                        <a class="genre" href="#" onclick="filterSelection()">'.$article["genre_id"].'</a>
                        <p>'.$article["duree_video"].'</p>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success admin_btn">
                <a class="admin_btn_text" href="modif.php?id='.$article['id'].'">MODIFIER</a>
            </button>
            <button type="submit" class="btn btn-success admin_btn">
                <a class="admin_btn_text" href="function/delete.php?id='.$article['id'].'">SUPPRIMER</a>
            </button>
        </div>
            
            ';}
            ?>
        </div>
    </div>
    <hr>
</body>

</html>