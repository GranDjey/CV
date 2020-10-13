<?php session_start();
?>
<?php include('../function/co.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eté Indien</title>
    <link rel="icon" sizes="64x64" href="../img2/fav.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/index.css">
</head>

<body>
    <main>
        <?php
    $requete = "SELECT * FROM user ";
    $reponse = $conn->query($requete);
  ?>

        <div class="container-fluid">
            <div class="row justify-content-center mx-auto">
                <div class="col-xl-2" id="left">
                    <ul class="menu">
                        <div class="liens" id="myBtnContainer">
                            <img src="../img2/logow.png" alt="logo" class="menu-img">
                            <hr class="col-4" id="hr">
                            <li class="filt active" onclick="filterSelection('all')">TOUT VOIR</li>
                            <li class="filt" onclick="filterSelection('Gym douce')">GYM DOUCE</li>
                            <li class="filt" onclick="filterSelection('Prévention des chutes')">PRÉVENTION DES CHUTES
                            </li>
                            <li class="filt" onclick="filterSelection('Maladies cardio-vasculaires')">MALADIES
                                CARDIO-VASCULAIRES</li>
                            <li class="filt" onclick="filterSelection('Arthrose')">ARTHROSE</li>
                            <li class="filt" onclick="filterSelection('Qi gong')">BIEN ETRE</li>
                            <li class="filt" onclick="filterSelection('Gym sur chaise')">GYM SUR CHAISE</li>
                            <li class="filt" onclick="filterSelection('Gym douce aidants')">GYM DOUCE POUR LES AIDANTS
                                FAMILIAUX</li>
                            <hr class="col-4" id="hr" style="top: 8px">
                        </div>
                    </ul>
                </div>
                <div class="col-xl-10 col-lg-12" id="right">
                    <?php
                          $donnees = $reponse ->fetch()
                          
                            ?>
                    <div class="head">
                        <?php include "../include/header.php";
                        ?>
                    </div>
                    <div class="bandeau" style=" margin-top: 120px;">
                        <img src="../img2/<?php echo $_SESSION["mutuelle"]; ?>" alt="logo" class="img-fluid" id="main-photo">
                        <p class="main-para" style="padding: 0 3em;"><?php echo $_SESSION["description"]; ?></p>
                    </div>

                    <hr class="col-4" id="hr">
                    <div class="mini_menu">
                        <div class="row justify-content-center text-align-center">
                            <div class="dropdown" id="list">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                    id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Catégories
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" id="myBtnContainer">
                                    <a class="dropdown-item filt active" onclick="filterSelection('all')">TOUT VOIR</a>
                                    <a class="dropdown-item filt" onclick="filterSelection('Gym douce')">GYM DOUCE</a>
                                    <a class="dropdown-item filt"
                                        onclick="filterSelection('Prévention des chutes')">PRÉVENTION DES CHUTES</a>
                                    <a class="dropdown-item filt"
                                        onclick="filterSelection('Maladies cardio-vasculaires')">MALADIES
                                        CARDIO-VASCULAIRES</a>
                                    <a class="dropdown-item filt" onclick="filterSelection('arthrose')">ARTHROSE</a>
                                    <a class="dropdown-item filt" onclick="filterSelection('Qi gong')">BIEN ETRE</a>
                                    <a class="dropdown-item filt" onclick="filterSelection('Gym sur chaise')">GYM SUR
                                        CHAISE</a>
                                    <a class="dropdown-item filt"
                                        onclick="filterSelection('Gym douce pour aidants')">GYM
                                        DOUCE POUR LES AIDANTS FAMILIAUX</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center text-center mx-auto">

                        <?php
						$page = (!empty($_GET['page']) ? $_GET['page'] : 1);
						$limite = 12;
                    // Partie "Requête"
                    $id = 'id';
					$debut = ($page - 1) * $limite;
					$query = 'SELECT SQL_CALC_FOUND_ROWS video.*, genre.name "genre_name" FROM `video`, genre WHERE video.genre_id = genre.id LIMIT :limite OFFSET :debut';
					$query = $conn->prepare($query);
					$query->bindValue('debut', $debut, PDO::PARAM_INT);
					$query->bindValue('limite', $limite, PDO::PARAM_INT);
					$query->execute();
				
					/* Ici on récupère le nombre d'éléments total. Comme c'est une requête, il ne
					* faut pas oublier qu'on ne récupère pas directement le nombre.
					* De plus, comme la requête ne contient aucune donnée client pour fonctionner,
					* on peut l'exécuter ainsi directement */
					$resultFoundRows = $conn->query('SELECT found_rows()');
					/* On doit extraire le nombre du jeu de résultat */
					$nombredElementsTotal = $resultFoundRows->fetchColumn();

					// Partie "Boucle"
					
					
                 while($element=$query->fetch(PDO::FETCH_ASSOC))
                 {
					// C'est là qu'on affiche les données 
					extract($element);
					
                     ?>
                        <div class="column col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 p-0 <?php echo $genre_name ; ?>"
                            data-filter="<?php echo $genre_name ; ?>" id="vid">
                            <div class="card" style="max-width:20rem;">
                                <a href="content.php?id=<?php echo $id ; ?>"><img
                                        src="../upload/<?php echo $titre_video ; ?>" id="liens" alt=""></a>
                                <div class="card-body">
                                    <a href="content.php?id=<?php echo $id ; ?>"
                                        class="card-title"><?php echo $titre_video ; ?></a>
                                    <div class="row" id="sous-vid">
                                        <a class="genre" href="#"
                                            onclick="filterSelection('<?php echo $genre_name; ?>')"><?php echo $genre_name ; ?></a>
                                        <p><?php echo $duree_video ; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
      
    }
    // Partie "Liens"
?>

                    </div>
                    <br>
                    <hr class="col-4" id="hr"><br>
                    <nav aria-label="...">
                        <ul class="pagination" style="justify-content: center;">

                            <?php
				// Partie "Liens"
				/* On calcule le nombre de pages */
				$nombreDePages = ceil($nombredElementsTotal / $limite);

				/* Si on est sur la première page, on n'a pas besoin d'afficher de lien
				* vers la précédente. On va donc l'afficher que si on est sur une autre
				* page que la première */
				if ($page > 1):
                    ?>
                            <li class="page-item{% if page == 1 %}disabled{% endif %}" id="next-prev">
                                <a class="page-link"
                                    style="width: 10em; text-align: center; background-color: #ff5c00; border: solid 1px #ccc; border-radius: 50px; padding:0.4em 0.5em; text-decoration: none; font-size: 1.4em; font-weight:600; color: black"
                                    href="?page=<?php echo $page - 1; ?>#top-gallery" tabindex="-1"
                                    aria-disabled="true">Page précédente</a>
                            </li>
                            <?php
				endif;

				/* Avec le nombre total de pages, on peut aussi masquer le lien
				* vers la page suivante quand on est sur la dernière */
				if ($page < $nombreDePages):
                    ?>
                            <li class="page-item{% if page == pages %}disabled{% endif %}" id="next-prev">
                                <a class="page-link"
                                    style="width: 10em; text-align: center; background-color: #ff5c00; border: solid 1px #ccc; border-radius: 50px; margin-left:1em; padding:0.4em 0.5em; text-decoration: none; font-weight:600; font-size: 1.4em; color: black"
                                    href="?page=<?php echo $page + 1; ?>#top-gallery">Page suivante</a>
                            </li>
                            <?php
				endif;
                ?>

                        </ul>
                    </nav>
                    <br><br>
                    <footer>
                        <?php include "../include/footer.php"; ?>
                    </footer>
                </div>
            </div>
        </div>
    </main>
    <!-- Start of HubSpot Embed Code -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/4905136.js"></script>
    <!-- End of HubSpot Embed Code -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <!-- Start of HubSpot Embed Code -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/6003001.js"></script>
    <!-- End of HubSpot Embed Code -->
    <script src="../js/filter.js"></script>
</body>

</html>