
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ete indien - Create_category</title>
    <link rel="icon" sizes="64x64" href="../img/fav.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admin2.css">
    <!--  pour la police des titres  -->
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">

    <style>
    footer {
        display: block;
    }
    </style>
</head>

<body>


    <?php
   
   if(!isset($_SESSION['admin'])){
    header('location:index_admin.php');
}

include '../function/co.php';

include '../function/select_apparence.php';
    

@$test = $_POST['text_footer'];
@$test1 = $_POST['info_footer'];
@$test2= $_POST['titre_lien_1']; 
@$test3 = $_POST['lien_1'];
@$test4= $_POST['titre_lien_2']; 
@$test5 = $_POST['lien_2'];
@$test6= $_POST['titre_lien_3']; 
@$test7 = $_POST['lien_3'];
@$test8= $_POST['titre_lien_4']; 
@$test9 = $_POST['lien_4'];
@$test10= $_POST['titre_lien_5']; 
@$test11= $_POST['lien_5'];
@$test12= $_POST['titre_lien_6']; 
@$test13= $_POST['lien_6'];
@$test14= $_POST['titre_lien_7']; 
@$test15= $_POST['lien_7'];
@$test16= $_POST['titre_lien_8']; 
@$test17= $_POST['lien_8'];



    if(isset($_POST['submit'])){
        $sql1 = $conn->query("UPDATE apparence SET text_footer = '$test', info_footer = '$test1', titre_lien_1 = '$test2', lien_1 = '$test3', titre_lien_2 = '$test4', lien_2 = '$test5', titre_lien_3 = '$test6', lien_3 = '$test7', titre_lien_4 = '$test8', lien_4 = '$test9', titre_lien_5 = '$test10', lien_5 = '$test11', titre_lien_6 = '$test12', lien_6 = '$test13', titre_lien_7 = '$test14', lien_7 = '$test15', titre_lien_8 = '$test16', lien_8 = '$test17'");
        header('location:index_admin.php');
    }
?>
    <div class="row justify-content-center">
        <div class="col-10 form_group">
            <h2 class="form_title">
                MODIFIER LE FOOTER
            </h2>
            <form class="form-group" method="post">
                <fieldset>

                    <div class="form-item">
                        <span class="col-md-1 col-md-offset-2 text-center"></span>
                        <div class="col-md-8">
                            <label for="text">Texte</label>
                            <input name="text" type="text" placeholder="text" class="form-control"
                                value="<?= $app['text_footer']?>">
                        </div>
                    </div>
                    <div class="form-item">
                        <span class="col-md-1 col-md-offset-2 text-center"></span>
                        <div class="col-md-8">
                            <label for="info_footer">Infos</label>
                            <input name="info_footer" type="text" placeholder="info_footer" class="form-control"
                                value="<?= $app['info_footer']?>">
                        </div>
                    </div>
                    <div class="form-item">
                        <span class="col-md-1 col-md-offset-2 text-center"></span>
                        <div class="col-md-8">
                            <label for="titre_lien_1">Titre du lien N°1</label>
                            <input name="titre_lien_1" type="text" placeholder="titre_lien_1" class="form-control"
                                value="<?= $app['titre_lien_1']?>">
                        </div>
                    </div>

                    <div class="form-item">
                        <span class="col-md-1 col-md-offset-2 text-center"></span>
                        <div class="col-md-8">
                            <label for="lien_1">URL du lien N°1</label>
                            <input name="lien_1" placeholder="lien_1" type="text" value="<?= $app['lien_1']?>"
                                class="form-control">

                        </div>
                    </div>
                    <div class="form-item">
                        <span class="col-md-1 col-md-offset-2 text-center"></span>
                        <div class="col-md-8">
                            <label for="titre_lien_2">Titre du lien N°2</label>
                            <input name="titre_lien_2" type="text" placeholder="titre_lien_2" class="form-control"
                                value="<?= $app['titre_lien_2']?>">
                        </div>
                    </div>

                    <div class="form-item">
                        <span class="col-md-1 col-md-offset-2 text-center"></span>
                        <div class="col-md-8">
                            <label for="lien_2">URL du lien N°2</label>
                            <input name="lien_2" placeholder="lien_2" type="text" value="<?= $app['lien_2']?>"
                                class="form-control">

                        </div>
                    </div>
                    <div class="form-item">
                        <span class="col-md-1 col-md-offset-2 text-center"></span>
                        <div class="col-md-8">
                            <label for="titre_lien_3">Titre du lien N°3</label>
                            <input name="titre_lien_3" type="text" placeholder="titre_lien_3" class="form-control"
                                value="<?= $app['titre_lien_3']?>">
                        </div>
                    </div>

                    <div class="form-item">
                        <span class="col-md-1 col-md-offset-2 text-center"></span>
                        <div class="col-md-8">
                            <label for="lien_3">URL du lien N°3</label>
                            <input name="lien_3" placeholder="lien_3" type="text" value="<?= $app['lien_3']?>"
                                class="form-control">

                        </div>
                    </div>
                    <div class="form-item">
                        <span class="col-md-1 col-md-offset-2 text-center"></span>
                        <div class="col-md-8">
                            <label for="titre_lien_4">Titre du lien N°4</label>
                            <input name="titre_lien_4" type="text" placeholder="titre_lien_4" class="form-control"
                                value="<?= $app['titre_lien_4']?>">
                        </div>
                    </div>

                    <div class="form-item">
                        <span class="col-md-1 col-md-offset-2 text-center"></span>
                        <div class="col-md-8">
                            <label for="lien_4">URL du lien N°4</label>
                            <input name="lien_4" placeholder="lien_4" type="text" value="<?= $app['lien_4']?>"
                                class="form-control">

                        </div>
                    </div>
                    <div class="form-item">
                        <span class="col-md-1 col-md-offset-2 text-center"></span>
                        <div class="col-md-8">
                            <label for="titre_lien_5">Titre du lien N°5</label>
                            <input name="titre_lien_5" type="text" placeholder="titre_lien_5" class="form-control"
                                value="<?= $app['titre_lien_5']?>">
                        </div>
                    </div>

                    <div class="form-item">
                        <span class="col-md-1 col-md-offset-2 text-center"></span>
                        <div class="col-md-8">
                            <label for="lien_5">URL du lien N°5</label>
                            <input name="lien_5" placeholder="lien_5" type="text" value="<?= $app['lien_5']?>"
                                class="form-control">

                        </div>
                    </div>
                    <div class="form-item">
                        <span class="col-md-1 col-md-offset-2 text-center"></span>
                        <div class="col-md-8">
                            <label for="titre_lien_6">Titre du lien N°6</label>
                            <input name="titre_lien_6" type="text" placeholder="titre_lien_6" class="form-control"
                                value="<?= $app['titre_lien_6']?>">
                        </div>
                    </div>

                    <div class="form-item">
                        <span class="col-md-1 col-md-offset-2 text-center"></span>
                        <div class="col-md-8">
                            <label for="lien_6">URL du lien N°6</label>
                            <input name="lien_6" placeholder="lien_6" type="text" value="<?= $app['lien_6']?>"
                                class="form-control">

                        </div>
                    </div>
                    <div class="form-item">
                        <span class="col-md-1 col-md-offset-2 text-center"></span>
                        <div class="col-md-8">
                            <label for="titre_lien_7">Titre du lien N°7</label>
                            <input name="titre_lien_7" type="text" placeholder="titre_lien_7" class="form-control"
                                value="<?= $app['titre_lien_7']?>">
                        </div>
                    </div>

                    <div class="form-item">
                        <span class="col-md-1 col-md-offset-2 text-center"></span>
                        <div class="col-md-8">
                            <label for="lien_7">URL du lien N°7</label>
                            <input name="lien_7" placeholder="lien_7" type="text" value="<?= $app['lien_7']?>"
                                class="form-control">

                        </div>
                    </div>
                    <div class="form-item">
                        <span class="col-md-1 col-md-offset-2 text-center"></span>
                        <div class="col-md-8">
                            <label for="titre_lien_8">Titre du lien N°8</label>
                            <input name="titre_lien_8" type="text" placeholder="titre_lien_8" class="form-control"
                                value="<?= $app['titre_lien_8']?>">
                        </div>
                    </div>

                    <div class="form-item">
                        <span class="col-md-1 col-md-offset-2 text-center"></span>
                        <div class="col-md-8">
                            <label for="lien_8">URL du lien N°8</label>
                            <input name="lien_8" placeholder="lien_8" type="text" value="<?= $app['lien_8']?>"
                                class="form-control">

                        </div>
                    </div>
                    <div class="form-item">
                        <button type="submit" class="btn btn-success form_btn" name="submit">
                            MODIFIER
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
    <footer>
        <?php include "../include/footer.php"; ?>
    </footer>
</body>