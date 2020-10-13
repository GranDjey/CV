<?php session_start()?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maitrise Web - Modify</title>
    <link rel="icon" sizes="32x32" href="img/favlogo.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin.css">
    <!--  pour la police des titres  -->
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <!-- pour les autres textes -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

</head>

<body style="font-family:'Roboto Condensed">

    <div class="row mx-auto">
        <a class="btn mx-auto btn-primary mt-5 mb-5" href="index_admin.php"><?=$_SESSION['admin']?></a>
    </div>
    <?php 

    if(!isset($_SESSION['admin'])){
        header('location:login.php');
    }

    include 'function/co.php';

    include 'function/select.php';
        

    @$test = $_POST['Name_projet'];
    @$test1 = $_POST['Description'];
    @$test2= $_POST['Img1']; 
    @$test3 = $_POST['Url'];
    @$test4= $_POST['Img2']; 
    @$test5 = $_POST['Img3'];
    @$test6= $_POST['Type_projet']; 

        if(isset($_POST['submit'])){
            $sql1 = $conn->query("UPDATE `projet` SET `Name_projet` = '$test', `Description` = '$test1', `Img1` = '$test2', `Url` = '$test3', `Img2` = '$test4', `Img3`='$test5', `Type_projet` = '$test6' WHERE `projet`.`Id_projet`=$current_id");
            header('location:index_admin.php');
        }
    ?>

    <div class="container-fluid text-center">
        <h2 class="mx-auto">Modifier le film :</h2>
        <div class="row mx-auto ">
            <div class="col-md-12">
                <div class="well well-sm ">
                    <form class="form-horizontal offset-3" method="post">
                        <fieldset>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"></span>
                                <div class="col-md-8">
                                    <input name="Name_projet" type="text" placeholder="nom" value="<?= $article['Name_projet']?>"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"></span>
                                <div class="col-md-8">
                                    <input name="Description" type="text" placeholder="description"
                                        value="<?= $article['Description']?>" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"></span>
                                <div class="col-md-8">
                                    <input name="Img1" type="text" placeholder="image" value="<?= $article['Img1']?>"
                                        class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <span class="col-md-1 col-md-offset-2 text-center"></span>
                                    <div class="col-md-8">
                                        <input name="Url" type="text" placeholder="url" value="<?= $article['Url']?>"
                                            class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <span class="col-md-1 col-md-offset-2 text-center"></span>
                                    <div class="col-md-8">
                                        <input name="Img2" placeholder="fullscreen"
                                            value="<?= $article['Img2']?>" type="text" class="form-control"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"></span>
                                        <div class="col-md-8">
                                            <input name="Img3" placeholder="image 2" type="text"
                                                value="<?= $article['Img3']?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <span class="col-md-1 col-md-offset-2 text-center"></span>
                                            <div class="col-md-8">
                                                <input name="Type_projet" type="text"
                                                    placeholder="vitrine, e-commerce, appli, id. visu"
                                                    class="form-control">
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
</body>