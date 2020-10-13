<?php include ('function/co.php'); ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Maitrise Web - Portfolio</title>
	<link rel="icon" sizes="32x32" href="img/favlogo.ico">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
		integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/portfolio.css">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/header.css" rel="stylesheet">
	<link href="css/hover-min.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
</head>

<body>

	<header><?php include ('header.php');?> </header>
	<div class="header ">
		<h1>Maitrise Web <br><span>[ Réalisations ]</span></h1>
	</div>
	<div id="top" style="margin-bottom: 40px;"></div>
	<hr id="top-gallery">
	<h2 style="text-align: center; text-transform: uppercase; margin: 2% 0;">NOS PROJETS & CREATIONS</h2>
	<hr>
	<section class="gallery" style="height: 100vh;">
		<div class="container-fluid mini-gallery">
			<div class="row">
				<div class="portfolioFilter col-sm-12" id="myBtnContainer">
					<center>
						<button class="btn active" id="filt" onclick="filterSelection('all')"> Tout</button>
						<button class="btn" id="filt" onclick="filterSelection('Site_vitrine')"> Site vitrine</button>
						<button class="btn" id="filt" onclick="filterSelection('Site_e-commerce')"> Site
							e-commerce</button>
						<button class="btn" id="filt" onclick="filterSelection('Application_interne')"> Application
							interne</button>
						<button class="btn" id="filt" onclick="filterSelection('Identité_visuelle')"> Identité
							visuelle</button>
					</center>
				</div>

				<a href="#" class="close" id="cross"><i class="fas fa-times fa-2x"
						style="color: #2C3034 !important;"></i></a>
				<?php
						$page = (!empty($_GET['page']) ? $_GET['page'] : 1);
						$limite = 12;
					// Partie "Requête"
					$debut = ($page - 1) * $limite;
					$query = 'SELECT SQL_CALC_FOUND_ROWS * FROM `projet` LIMIT :limite OFFSET :debut';
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
				<div class="column <?php echo $Type_projet ; ?> col-12 col-sm-6 col-md-4 col-lg-3 site">

					<a href="#item01<?php echo $Id_projet ; ?>" class=" zoomIn animated">
						<h3 class="site-title" id="<?php echo $Id_projet; ?>"><?php echo $Name_projet ; ?></h3>
						<img src="<?php echo $Img1?>" alt="">
					</a>
				</div>

				<div id="item01<?php echo $Id_projet ; ?>" class="port" style="margin-top: -120px;">
					<div class="row">
						<div class="col-12 col-md-6">
							<h1><?php echo $Name_projet ; ?></h1>
							<p><?php echo $Description ; ?></p>
						</div>
						<div class="col-12 col-md-6"><img src="<?php echo $Img1?>" alt="">
						</div>
					</div>
					<div class="row text-align-center mx-auto" style="margin-top: 2em;">
						<div class="col-3"> <img src="<?php echo $Img2?>" class="wow flipInY animated"
								data-wow-duration="1000ms" data-wow-delay="300ms"
								style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: flipInY;"
								alt="">
						</div>
						<div class="col-3"> <img src="<?php echo $Img3?>" class="wow flipInY animated"
								data-wow-duration="1000ms" data-wow-delay="300ms"
								style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: flipInY;"
								alt="">
						</div>
						<div class="col-6 mt-5" style="text-align:center!important;"><a
								class="btn btn-primary btn-lg hvr-grow-shadow hvr-underline-from-center"
								href="<?php echo $Url?>" role="button">Visiter le site</a>
							<a class="btn btn-primary btn-lg hvr-grow-shadow hvr-underline-from-center close" href="#"
								role="button" style="margin-left: 5%;">Fermer</a></div>
					</div>
					<!-- / row -->
				</div>

				<?php
      
					}
					// Partie "Liens"
				?>

				<!-- / Item 01 -->
				
			</div>
			<br>
			<center>
				<?php
				// Partie "Liens"
				/* On calcule le nombre de pages */
				$nombreDePages = ceil($nombredElementsTotal / $limite);

				/* Si on est sur la première page, on n'a pas besoin d'afficher de lien
				* vers la précédente. On va donc l'afficher que si on est sur une autre
				* page que la première */
				if ($page > 1):
					?><a href="?page=<?php echo $page - 1; ?>#top-gallery" style="border: solid 1px #ccc; border-radius: 50px; margin-left:1em; padding:0.4em 0.5em; text-decoration: none; font-size: 1.2em; color: #666!important">Page précédente</a><?php
				endif;

				/* On va effectuer une boucle autant de fois que l'on a de pages */
				for ($i = 1; $i <= $nombreDePages; $i++):
					?><a href="?page=<?php echo $i; ?>#top-gallery" style="border: solid 1px #ccc; border-radius: 50px; margin-left:1em; padding:0.4em 0.5em; text-decoration: none; font-size: 1.2em; color: #666!important"><?php echo $i; ?></a> <?php
				endfor;

				/* Avec le nombre total de pages, on peut aussi masquer le lien
				* vers la page suivante quand on est sur la dernière */
				if ($page < $nombreDePages):
					?><a href="?page=<?php echo $page + 1; ?>#top-gallery" style="border: solid 1px #ccc; border-radius: 50px; margin-left:1em; padding:0.4em 0.5em; text-decoration: none; font-size: 1.2em; color: #666!important">Page suivante</a><?php
				endif;
				?>
			</center>
	</section>
	<!-- / projects -->
	<div class="container_fluide" id="section4">
		<div class="jumbotron text-center">
			<div class="container">
				<p class="lead text-muted">VOUS AVEZ UN PROJET WEB ?</p>
				<p class="lead">
					<a class="btn btn-primary btn-lg hvr-grow-shadow hvr-underline-from-center" href="contact.php"
						role="button">PARLONS-EN !</a>
				</p>
			</div>
		</div>
	</div>
	<footer><?php include ('footer.php');?></footer>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>
	<script type="text/javascript" src="js/header.js"></script>
	<script src="js/portfolio.js"></script>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src="js/filter.js"></script>
</body>
</html>