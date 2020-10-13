<?php session_start()?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ete idien - Modify</title>
    <link rel="icon" sizes="64x64" href="../img2/fav.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin2.css">
    <!--  pour la police des titres  -->
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <!-- pour les autres textes -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

</head>

<body style="font-family:'Roboto Condensed">
<div class="row justify-content-center;">

            <div class="col-4" style="text-align:center">
            <button type="submit" class="btn btn-success admin_vid_btn">
                <a class="admin_title_btn_text" href="admin/index_admin.php">Menu admin</a>
            </button>
            </div>
            <div class="col-4" style="text-align:center">
            <h2 class="admin_title" style="margin-top: 0.8em;">MODIFIER UNE VIDEO</h2>
            </div>
            <div class="col-4" style="text-align:center">
            <button type="submit" class="btn btn-success admin_mut_btn"">
                <a class="admin_title_btn_text" href="main/menu.php">Retour au site</a>
            </button>
            </div>

            </div>

    <?php 

    if(!isset($_SESSION['admin'])){
        header('location:index_admin.php');
    }

    include 'function/co.php';

    include 'function/select.php';
        

    @$test = $_POST['titre_video'];
    @$test2= $_POST['duree_video']; 
    @$test4= $_POST['adresse_video']; 
    @$test5 = $_POST['img_video'];
    @$test6= $_POST['genre_id']; 
    @$test7= $_POST['description_video']; 


        if(isset($_POST['submit'])){
            $sql1 = $conn->query("UPDATE video SET titre_video = '$test', duree_video = '$test2', adresse_video = '$test4', img_video = '$test5', genre_id = '$test6', description_video = '$test7' WHERE video.id=$current_id");
            header('location:admin/index_admin.php');
        }
    ?>

    <div class="row justify-content-center">
        <div class="col-10 form_group">
            <form class="form-group" method="post">
                <fieldset>

                    <div class="form-item">
                        <span class="col-md-1 col-md-offset-2 text-center"></span>
                        <div class="col-md-8">
                            <label for="titre">Titre de la vidéo</label>
                            <input name="titre_video" type="text" placeholder="titre" class="form-control"
                                value="<?= $article['titre_video']?>" required>
                        </div>
                    </div>
                    <div class="dropdown">
                        <span class="col-md-1 col-md-offset-2 text-center"></span>
                        <div class="col-md-8 drop-content">
                            <label for="genre">Genre de la vidéo</label>
                            <input name="genre_id" type="text" placeholder="genre" value="<?= $article['genre_id']?>"
                                class="form-control">
                        </div>
                    </div>
                    <div class="form-item">
                        <span class="col-md-1 col-md-offset-2 text-center"></span>
                        <div class="col-md-8">
                            <label for="duree">Durée de la vidéo</label>
                            <input name="duree_video" type="time" step="1" placeholder="duree" class="form-control"
                                value="<?= $article['duree_video']?>" required>
                        </div>
                    </div>

                    <div class="form-item">
                        <span class="col-md-1 col-md-offset-2 text-center"></span>
                        <div class="col-md-8">
                            <label for="description">Description de la vidéo</label>
                            <textarea class="form-control" name="description_video" placeholder="description" rows="7"
                                required><?= $article['description_video']?></textarea>
                        </div>
                    </div>
                    <div class="form-item">
                    <button type="submit" class="btn btn-success form_btn" name="submit">
                Modifier la vidéo
            </button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>

    <!--

    <div class="container-fluid text-center">
        <h2 class="mx-auto">Modifier une vidéo :</h2>
        <div class="row mx-auto ">
            <div class="col-md-12">
                <div class="well well-sm ">
                    <form class="form-horizontal offset-3" method="post">
                        <fieldset>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"></span>
                                <div class="col-md-8">
                                    <input name="titre" type="text" placeholder="nom" value="<?= $article['titre']?>"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"></span>
                                <div class="col-md-8">
                                    <input name="date_upload" type="date" placeholder="date_upload"
                                        value="<?= $article['date_upload']?>" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"></span>
                                <div class="col-md-8">
                                    <input name="duree" type="text" placeholder="image" value="<?= $article['duree']?>"
                                        class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <span class="col-md-1 col-md-offset-2 text-center"></span>
                                    <div class="col-md-8">
                                        <input name="coach" type="text" placeholder="coach" value="<?= $article['coach']?>"
                                            class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <span class="col-md-1 col-md-offset-2 text-center"></span>
                                    <div class="col-md-8">
                                        <input name="adresse" placeholder="fullscreen"
                                            value="<?= $article['adresse']?>" type="text" class="form-control"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"></span>
                                        <div class="col-md-8">
                                            <input name="img" placeholder="image 2" type="text"
                                                value="<?= $article['img']?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <span class="col-md-1 col-md-offset-2 text-center"></span>
                                            <div class="col-md-8">
                                                <textarea name="description" type="text"
                                                    placeholder="description"
                                                    class="form-control" rows="7" required><?= $article['description']?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                    <span class="col-md-1 col-md-offset-2 text-center"></span>
                                    <div class="col-md-8">
                                        <input name="genre" type="text" placeholder="genre" value="<?= $article['genre']?>"
                                            class="form-control" required>
                                    </div>
                                </div>
                                        <div class="form-group">
                                            <div class="col-md-8 mt-4 mb-4 text-center">
                                                <button type="submit" name="submit"
                                                    class="btn btn-primary btn-lg">Modifier</button>
                                            </div>
                                        </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

    -->

    
</body>