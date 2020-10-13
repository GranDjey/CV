<!DOCTYPE html>
<html lang="fr" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords"
        content="Maitrise Web, création, site, ardennes, création de site dans les ardennes, marnes, reims, sedan, charlevilles, site vitrine, e-commerce, communication, flyer, carte de visite, Ardennes, création site web ardennes, création site web marne">
        <!--
     ___  ___       ___   _   _____   _____    _   _____   _____        _          __  _____   _____  
    /   |/   |     /   | | | |_   _| |  _  \  | | /  ___/ | ____|      | |        / / | ____| |  _  \ 
   / /|   /| |    / /| | | |   | |   | |_| |  | | | |___  | |__        | |  __   / /  | |__   | |_| | 
  / / |__/ | |   / / | | | |   | |   |  _  /  | | \___  \ |  __|       | | /  | / /   |  __|  |  _  { 
 / /       | |  / /  | | | |   | |   | | \ \  | |  ___| | | |___       | |/   |/ /    | |___  | |_| | 
/_/        |_| /_/   |_| |_|   |_|   |_|  \_\ |_| /_____/ |_____|      |___/|___/     |_____| |_____/ 


Coucou petite perruche :p, que viens-tu faire ici ? 
Contacter nous, ça sera plus simple, et on pourra vous aidez !  
modification@maitrise-web.fr

Si tu veux voir les crédits, licences, ..., n'hésite pas à regarder nos mentions légales ;) 
-->
    <title>Maitrise Web</title>
    <link rel="icon" sizes="32x32" href="img/favlogo.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/portfolio.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/hover-min.css" rel="stylesheet">
    <link href="css/stripes.css" rel="stylesheet">
    <link href="css/parallax.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">

    <!-- LOAD JQUERY LIBRARY -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>

    <!-- LOADING FONTS AND ICONS -->
    <link href="http://fonts.googleapis.com/css?family=Poppins:700" rel="stylesheet" property="stylesheet"
        type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="slider/revolution/fonts/font-awesome/css/font-awesome.css">

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="slider/revolution/css/settings.css">

    <!-- FONT AND STYLE FOR BASIC DOCUMENTS, NO NEED FOR FURTHER USAGE IN YOUR PROJECTS-->
    <link href="http://fonts.googleapis.com/css?family=Roboto%3A700%2C300" rel="stylesheet" property="stylesheet"
        type="text/css" media="all" />

    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="slider/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="slider/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- PARTICLES ADD-ON FILES -->
    <link rel='stylesheet' href='slider/revolution-addons/particles/css/revolution.addon.particles.css?ver=1.0.3'
        type='text/css' media='all' />
    <script type='text/javascript'
        src='slider/revolution-addons/particles/js/revolution.addon.particles.min.js?ver=1.0.3'></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="slider/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="slider/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="slider/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="slider/revolution/js/extensions/revolution.extension.layeranimation.min.js">
    </script>
    <script type="text/javascript" src="slider/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="slider/revolution/js/extensions/revolution.extension.navigation.min.js">
    </script>
    <script type="text/javascript" src="slider/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="slider/revolution/js/extensions/revolution.extension.slideanims.min.js">
    </script>
    <script type="text/javascript" src="slider/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="js/slider.js"></script>

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <header><?php include ('header.php'); ?> </header>

    <main class="global">
        <div class="vide" id="section1" style="height:60px"></div>
        <div id="app">
            <div class="sections-menu">
                <span class="menu-point" v-bind:class="{active: activeSection == index}"
                    v-on:click="scrollToSection(index)" v-for="(offset, index) in offsets" v-bind:key="index">
                </span>
            </div>
        </div>
        <div class="container_fluide"><?php  include ('slider.php');  ?></div>  
        <?php include ('stripes.php'); ?>
        <?php include ('gallery.php'); ?>
        <?php include ('parallax.php'); ?>

        <div class="container_fluide" id="section4">
            <div class="jumbotron text-center">
                <div class="container">

                    <p class="lead text-muted">Un projet en tête ? venez nous en faire part. MAITRISE WEB répondra a vos
                        besoins en vous écoutant.</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg hvr-grow-shadow hvr-underline-from-center" href="contact.php"
                            role="button">CONTACTEZ NOUS</a>
                    </p>

                </div>
            </div>
        </div>
        <?php include ('testimodial.php'); ?>
    </main>

    <footer><?php include ('footer.php'); ?></footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script type="text/javascript" src="slider/assets/warning.js"></script>
    <script type="text/javascript" src="js/header.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/universal-parallax@1.3.2/dist/universal-parallax.min.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script type="text/javascript" src="js/loader.js"></script>
    <script type="text/javascript" src="js/carousel.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

</body>

</html>