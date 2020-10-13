<?php include ('function/co.php'); ?>
<div id="top" style="margin-bottom: 80px;"></div>
<hr>
<h2 style="text-align: center; text-transform: uppercase; margin: 2% 0;">NOS PROJETS & CREATIONS</h2>
<hr>
<section class="gallery" style="min-height:70vh;">
	<div class="container-fluid mini-gallery">
		<div class="row justify-content-center">
			<div class="portfolioFilter col-sm-12" id="myBtnContainer">
				<center>
					<button class="btn active" id="filt" onclick="filterSelection('all')"> Tout</button>
					<button class="btn" id="filt" onclick="filterSelection('Site_vitrine')"> Site vitrine</button>
					<button class="btn" id="filt" onclick="filterSelection('Site_e-commerce')"> Site e-commerce</button>
					<button class="btn" id="filt" onclick="filterSelection('Application_interne')"> Application
						interne</button>
					<button class="btn" id="filt" onclick="filterSelection('Identité_visuelle')"> Identité
						visuelle</button>
				</center>
			</div>

			<a href="#" class="close" id="cross"><i class="fas fa-times fa-2x"
					style="color: #2C3034 !important;"></i></a>
					<?php
					// Partie "Requête"
              $stmt = $conn->prepare('SELECT * FROM projet');
              $stmt->execute();
 
					// Partie "Boucle"
					$limite = 7;
$compteur = 0;
                 while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                 {
					if ($compteur >= $limite) {
						break;
					}
					// C'est là qu'on affiche les données 
                   extract($row);
  
				   $compteur++;
                     ?>
			<div class="column <?php echo $Type_projet ; ?> col-12 col-sm-6 col-md-4 col-lg-3 site">

				<a href="#item01<?php echo $Id_projet ; ?>" class="zoomIn animated">
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
						</a>
					</div>
					<div class="col-3"> <img src="<?php echo $Img3?>" class="wow flipInY animated"
							data-wow-duration="1000ms" data-wow-delay="300ms"
							style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: flipInY;"
							alt="">
						</a>
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
    ?>
			<!-- / Item 01 -->
			<div class="col-12 col-sm-6 col-md-4 col-lg-3 site">
				<a class="suite" href="./portfolio.php">
					<p class="voirplus zoomIn animated">+ tout voir</p>
				</a>
			</div>
		</div>
</section>
<script src="js/portfolio.js"></script>
<script src="js/filter.js"></script>