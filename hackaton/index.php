<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Parisienne&display=swap" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="hover-min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



</head>

<body class="index">


<?php

include 'co.php';
include 'functions.php';



$sql='SELECT COUNT(profession),profession FROM personne  INNER JOIN menage INNER JOIN posseder
WHERE menage.id=posseder.id_Menage AND menage.id=personne.id_Menage AND menage.rue="Place Ducale" AND posseder.date>="1759-01-01" AND posseder.date<="1770-01-01" 
GROUP BY personne.profession';

$req=$dbh->query($sql);

$results=$req->fetchAll();


?>

    <div class="old_style">
    </div>
        <div class="container-fluid d-flex justify-content-between px-4 mt-3" style="z-index: 20">
            <i class="fas fa-info-circle fa-3x icon" data-toggle="modal" data-target="#exampleModal"></i>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Bienvenue sur le site Djadjarleville. <br /><br /> Des recenssements complets et inédits
                            pour
                            l'époque ont été fait entre 1739 et 1876. Nous vous permettons par le biais de ce site, de
                            connaitre l'histoire d'une habitation, de sa rue et de son quartier. <br /><br /> Veuillez
                            pour
                            cela remplir le formulaire ci-dessous et si votre demande correspond à notre base de
                            données,
                            vous retrouverez toutes ces informations. <br /> Etant donné que les informations
                            receuillies
                            sont non-exhaustives et que certaines rues ont changées de noms (ou tout simplement
                            disparues),
                            nous proposons alors de rechercher une adresse, d'un rue voisine afin d'avoir les
                            informations
                            du quartier.
                        </div>
                    </div>
                </div>
            </div>
            <div class="right">
                <i class="fab fa-facebook fa-3x icon"></i>
                <i class="fab fa-instagram fa-3x icon"></i>
            </div>
        </div>
        <div class="container" style="height: 90vh!important;">
            <div class="row text-align-center justify-content-center">
                <h1 class="title">Découvrez qui habitait à Charleville</h1>
            </div>
            <div class="row text-align-center justify-content-center">
                <span class="date">ENTRE 1739 ET 1876</span>
            </div>
            <section class="search-sec">
                <div class="container">
                    <form action="result.php" method="post" novalidate="novalidate">
                        <div class="row" id="rue">
                            <div class="col-lg-12">
                                <div class="row justify-content-center">
                                    <div class="col-lg-2 col-md-2 col-sm-12 p-0">
                                        <input type="text" id="oki" name="num" class="form-control search-slt" placeholder="N°..." required>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 p-0">
                                        <input type="text" name="rue" id="tags" class="form-control search-slt" placeholder="Rue..." required>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-12 p-0">
                                        <select class="form-control search-slt" name="dateIn" id="exampleFormControlSelect1">
                                           <?php for($i=1739;$i<=1876;$i++){
                                               echo'<option value="'.$i.'-01-01">'.$i.'</option>';
                                           }?>
                                        </select>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-12 p-0">
                                        <select class="form-control search-slt" name="dateOut" id="exampleFormControlSelect1">
                                        <?php for($i=1740;$i<=1876;$i++){
                                               echo'<option value="'.$i.'-01-01">'.$i.'</option>';
                                           }?>
                                        </select>
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-12 p-0">
                                        <button type="submit"  class="btn btn-danger wrn-btn"><i
                                                class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form action="result.php" method="post" novalidate="novalidate">
                        <div id="nom" class="row d-none">
                            <div class="col-lg-12">
                                <div class="row justify-content-center">
                                    <div class="col-lg-10 col-sm-12 p-0">
                                        <input type="text" id="tags1" name="nom" class="form-control search-slt" placeholder="Nom de la personne...">
                                    </div>
                                    
                                    <div class="col-lg-1 col-md-1 col-sm-12 p-0">
                                        <button type="submit"  class="btn btn-danger wrn-btn"><i
                                                class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                
            </section>
            <div class="container position-relative text-center">
                <button class="btn btn-danger mx-auto " id="switch" >Rechercher par Nom</button>
                <button class="btn btn-danger mx-auto d-none" id="switch1" >Rechercher par Adresse</button>
            </div>
            
        </div>
       

        <div class="row align-item-center justify-content-center mx-auto mb-3 partenaires">
            <div class="col-2 part_col">
                <div class="part hvr-pulse-grow p-1"><img class="img-fluid" src="img/cci.jpg" alt=""></div>
            </div>
            <div class="col-2 part_col">
                <div class="part hvr-pulse-grow p-2"><img class="img-fluid" src="img/rimbaudtech.jpg" alt=""></div>
            </div>
            <div class="col-2 part_col">
                <div class="part hvr-pulse-grow p-1"><img class="img-fluid img-relou-no1" src="img/simplon.png" alt="">
                </div>
            </div>
            <div class="col-2 part_col">
                <div class="part hvr-pulse-grow"><img class="img-fluid img-relou-no2" src="img/hackardennes.svg" alt="">
                </div>
            </div>
        </div>
        <div class="red_row"></div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script rel="text/javascript" src="script.js"></script>

</html>