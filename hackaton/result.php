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
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="hover-min.css">
</head>
<?php
      include 'co.php';
      include 'functions.php';
      
      $menages=getMenages($dbh, $_POST['num'],$_POST['rue'],$_POST['dateIn'],$_POST['dateOut']);
?>
<body>
    <section class="page1">
        <div class="old_style2">
        </div>
        <div class="container-fluid d-flex justify-content-between px-4 mt-3">
            <div class="left">
                <a href="index.php"><i class="fas fa-home fa-3x icon"></i></a>
                <a href="#"><i class="fas fa-info-circle fa-3x icon" data-toggle="modal"
                        data-target="#exampleModal"></i></a>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                l'époque ont été fait entre 1739 et 1876. Nous vous permettons par le biais de ce site,
                                de
                                connaitre l'histoire d'une habitation, de sa rue et de son quartier. <br /><br />
                                Veuillez
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
              
               
            </div>
            <div class="right">
                <a href="#"><i class="fab fa-facebook fa-3x icon"></i></a>
                <a href="#"><i class="fab fa-instagram fa-3x icon"></i></a>
            </div>
        </div>
        <div class="container-fluid mb-5">
                <div class="mx-auto col-6">
                <form action="result.php" method="post" novalidate="novalidate" >
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row justify-content-center">
                                    <div class="col-lg-2 col-md-2 col-sm-12 p-0">
                                        <input type="text" id="oki" name="num" value="<?= $_POST['num'] ?>" class="form-control search-slt" placeholder="N°...">
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 p-0">
                                        <input type="text" name="rue" id="tags" value="<?= $_POST['rue'] ?>" class="form-control search-slt" placeholder="Rue...">
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-12 p-0">
                                        <select class="form-control search-slt" name="dateIn" id="exampleFormControlSelect1">
                                           <?php for($i=1739;$i<=1876;$i++){
                                               if(date(" Y", strtotime($_POST['dateIn']))==$i){
                                                echo'<option value="'.$i.'-01-01" selected>'.$i.'</option>';
                                               }else{
                                                echo'<option value="'.$i.'-01-01" >'.$i.'</option>';
                                               };
                                              
                                           }?>
                                        </select>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-12 p-0">
                                        <select class="form-control search-slt" name="dateOut" id="exampleFormControlSelect1">
                                        <?php for($i=1739;$i<=1876;$i++){
                                               if(date(" Y", strtotime($_POST['dateOut']))==$i){
                                                echo'<option value="'.$i.'-01-01" selected>'.$i.'</option>';
                                               }else{
                                                echo'<option value="'.$i.'-01-01" >'.$i.'</option>';
                                               };
                                              
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
                </div>
                </div>
        <div class="container first_result">
            <div class="row justify-content-center text-align-center">
                <div class="col-9">
                    
                    </h2>
                </div>
            </div>
            <div class="row justify-content-around text-align-center result_content">

                <div class="col-5 border_card">
                    <div class="title2_card">
                        <h3 class="card_title">Les ménages à cette adresse</h3>
                        <hr class="hr">
                        <p class="text-center text-light"><?= count($menages) ?> ménages correspondent à la recherche</p>
                    </div>
                    <div class="result_card">
                        <?php 
                
              
                if(!empty($menages)){
                    foreach($menages as $menage){
                        $personnes=getPersonnes($dbh,$menage['id_Menage']);
                        echo"<div class='card mb-3'>
                        <h2 class='title_into_card'>A partir du : ".$menage['date']."</h2>
                        <hr class='hr2'>";
                        foreach($personnes as $personne){
                            echo"
                            <ul>
                                <li class='list_item'><strong>Nom:</strong> ".$personne['nom']." ".$personne['prenom']."</li>
                                <li class='list_item'><strong>Sexe:</strong> ".$personne['sexe']."</li>
                                <li class='list_item'><strong>Profession :</strong> ".$personne['profession']."</li>
                            </ul>
                                <hr class='hr3'>";
                        }
                        echo"</div>";
                    }
                }else{
                    echo"<h2 class='title_into_card'>Aucun résultat ne correspond a votre recherche</h2>";
                }
            ?>
                    </div>
                </div>
                <?php
                $menagesVoisins=getVoisinss($dbh, $_POST['num'],$_POST['rue'],$_POST['dateIn'],$_POST['dateOut']);
                
                ?>
                <div class="col-5 border_card">
                    <div class="title2_card">
                        <h3 class="card_title">Les ménages de cette rue</h3>
                        <hr class="hr">
                        <p class="text-center text-light"><?= count($menagesVoisins) ?> ménages correspondent à la recherche</p>
                    </div>
                    <div class="result_card">
                        <?php 
                        $nb_personnes=0;
                            if(!empty($menagesVoisins)){
                                foreach($menagesVoisins as $menage){
                                    $personnes=getPersonnes($dbh,$menage['id_Menage']);
                                    echo"<div class='card mb-3'>
                                    <h2 class='title_into_card'>".$menage['batiment']." ".$_POST['rue']."</h2>
                                    <h2 class='title_into_card'>A partir du : ".$menage['date']."</h2>
                                    <hr class='hr2'>";
                                    $nb_personnes=$nb_personnes+count($personnes);
                                    foreach($personnes as $personne){
                                        echo"

                                            <ul>
                                            <li class='list_item'><strong>Nom:</strong> ".$personne['nom']." ".$personne['prenom']."</li>
                                            <li class='list_item'><strong>Sexe:</strong> ".$personne['sexe']."</li>
                                            <li class='list_item'><strong>Profession :</strong> ".$personne['profession']."</li>

                                            </ul>
                                            <div class='col-5'>
                                            <hr class='hr3'>
                                            </div>";
                                    }
                                    echo"</div>";
                                }
                            }else{
                                echo"<h2 class='title_into_card'>Aucun résultat ne correspond a votre recherche</h2>";
                            }
                        ?>
                    </div>
                </div>
                <!--<p class="text-center">
                    <a class="btn btn-secondary justify-content-center text-center info-button" href="#suite"
                        role="button">
                        INFROMATIONS DU QUARTIER
                    </a>
                    <a class="btn btn-secondary justify-content-center text-center info-button" href="#suite"
                        role="button">
                        RECHERCHER UNE AUTRE PERIODE
                    </a>-->
                </p>
            </div>
        </div>
    </section>
    <div class="red_row2"></div>
    <?php 
        $stats=stats_domestique($dbh, $_POST['rue'],$_POST['dateIn'],$_POST['dateOut'])*100;

        $stat=stats_enfants($dbh, $_POST['rue'],$_POST['dateIn'],$_POST['dateOut']);

        $stat3=stats_lieu($dbh, $_POST['rue'],$_POST['dateIn'],$_POST['dateOut']);
        
        $nb_adresse=stats_adresse($dbh, $_POST['rue'],$_POST['dateIn'],$_POST['dateOut']);

        $dom=round($stats,1);

        ?>

    <section class="page2 mt-3 pb-5">
    <h1 class="text-center text-light py-5 title2">Informations complémentaires</h1>
   
        <?php 
        $results=graphMetier($dbh, $_POST['rue'],$_POST['dateIn'],$_POST['dateOut']);
        ?>
        <div class="row">
        <div class="col-6  text-center">
             
             </div>
            <div class="col-6  text-center">
             
            </div>
           
        </div>
      

        <div class="row  d-flex justify-content-center ">
        <div class="row col-lg-4 col-sm-12 text-light text-center mb-5 ">
         <h2 class="mb-3 text-center text-light w-75 mx-auto ">La recherche concerne :</h2>
                <div class="col-6">
                    <h1 class="text-center"><i class="fas fa-users"></i></h1>
                    <h2> <span class="text-danger"><?= count($menages)+count($menagesVoisins) ?></span> ménages</h3>
                </div>
                <div class="col-6">
                    <h1 class="text-center"><i class="fas fa-user"></i></h1>
                    <h2><span class="text-danger"><?= $nb_personnes ?></span> personnes</h3>
                </div>
                <div class="col-6">
                    <h1 class="text-center"><i class="fas fa-home"></i></h1>
                    <h2> <span class="text-danger"><?= count($nb_adresse) ?></span> adresses</h3>
                </div>
                <div class="col-6">
                    <h1 class="text-center"><i class="fas fa-user-tie"></i></h1>
                    <h2><span class="text-danger"><?= count($results) ?></span> métiers </h3>
                </div>
            </div>
           
            <div class="col-lg-4 col-sm-12   ">
            <h2 class="mb-3 text-center text-light  mx-auto">Les 10 metiers les plus exercé dans les résultats.</h2>
                <canvas id="myChart" class="bg-light"></canvas>
            </div>
            
        </div>
       
     
        <div class="col-6 mx-auto py-5"><hr class="bg-light"></div>
        <div class="row col-10 offset-1 text-light">
           <div class="col-lg-4 col-sm-12 mb-3">
                <h1 class="text-center"><i class="fas fa-money-bill-wave"></i> </h1>
                <h2 class="text-center w-75 mx-auto"><span class="text-danger"><?= $dom ?>%</span> des résultats de la recherche avaient au moins 1 domestique.</h2>
            </div>
            <div class="col-lg-4 col-sm-12 mb-3">
                <h1 class="text-center"><i class="fas fa-baby"></i> </h1>
                <h2 class="text-center w-75 mx-auto">Les résultats de la recherche avaient en moyenne <span class="text-danger"><strong><?= $stat ?></strong></span> enfants par foyer.</h2>
            </div>  
            <div class="col-lg-4 col-sm-12">
                <h1 class="text-center"><i class="fas fa-map-marker-alt"></i> </h1>
                <h2 class="text-center w-75 mx-auto"><span class="text-danger"><strong><?= $stat3 ?>%</strong></span> des résultats de la recherche sont nés a Charleville.</h2>
            </div>   
               
            
        </div>
        <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var chart = new Chart(ctx, {
                // The type of chart we want to create
                type: 'bar',

                // The data for our dataset
                data: {
                    labels: [<?php
                        for ($i = 0; $i < 10; $i++) {
                            echo '"'.$results[$i]["profession"].'",';
                        } ?>
                    ],
                    datasets: [{
                        label: "Metier",
                        backgroundColor: ['rgb(255, 99, 132)',
                            "rgb(200, 49, 102)",
                            "rgb(75, 99, 32)",
                            "rgb(105, 99, 52)",
                            "rgb(55, 99, 132)",
                            "rgb(255, 99, 22)",
                            "rgb(255,209, 42)",
                            "rgb(155,209, 42)",
                            "rgb(55,209, 42)",
                            "rgb(255,109, 42)"
                        ],
                        borderColor: 'rgb(255, 99, 132)',
                        data: [ <?php
                            for ($i = 0; $i < 10; $i++) {
                                echo '"'.$results[$i]["COUNT(profession)"].
                                '",';
                            } ?>
                        ]
                    }]
                },

                // Configuration options go here
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true,
                               
                            }
                        }],
                        xAxes: [{
                            ticks: {
                                
                            }
                        }]
                    },
                    responsive: true
                }
            });
        </script>
    </section>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script rel="text/javascript" src="script.js"></script>

</html>