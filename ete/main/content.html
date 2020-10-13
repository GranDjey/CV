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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" sizes="64x64" href="../img2/fav.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link href="//vjs.zencdn.net/7.3.0/video-js.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/lecteur.css">
  <link rel="stylesheet" href="../css/content.css">
  <script src="//vjs.zencdn.net/7.3.0/video.min.js"></script>


</head>
<main>

  <body>
    <?php
    require_once '../function/co.php';
    require_once '../function/select_vid.php';

    $video = getVid($conn,1, $_GET['id']);
    $id= $_GET['id'];
  

    // $stmt = $conn->prepare('SELECT id_video FROM video WHERE id_video < :id_video Order By id_video DESC LIMIT 1');
    // $stmt->execute(array('id_video' => 10));
    // $stmt->setFetchMode(PDO::FETCH_ASSOC);
    // $precedent_id = $stmt->fetchColumn();    
    // var_dump($precedent_id);

    $precedent_id = -1;

    $stmt = $conn->prepare('SELECT id FROM video WHERE id < :id ORDER BY id DESC LIMIT 1');
    $stmt->execute(array('id' => $id));
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $precedent_id = $stmt->fetchColumn();

    //var_dump($precedent_id);

    // $stmt = $conn->prepare('SELECT id_video FROM video WHERE id_video > :id_video Order By id_video ASC LIMIT 1');
    // $stmt->execute(array('id_video' => 10));
    // $stmt->setFetchMode(PDO::FETCH_ASSOC);
    // $suivant_id = $stmt->fetchColumn();  
    // var_dump($suivant_id);

    $suivant_id = -1;

    $stmt = $conn->prepare('SELECT id FROM video WHERE id > :id ORDER BY id ASC LIMIT 1');
    $stmt->execute(array('id' => $id));
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $suivant_id = $stmt->fetchColumn();

    //var_dump($suivant_id);

    ?>

    <!--
    <div class="example1">
      <h3
        style="left: -1400px; top:-800px; font-size: 100em; opacity: 0.1; letter-spacing: -1050px; word-spacing: -800px; animation: example1 220s;  color: #FF5C00;">
        été&nbsp;indien </h3>
      <h3>ETE&nbsp;INDIEN&nbsp;&nbsp;&nbsp;ETE&nbsp;INDIEN </h3>
      <h2>videos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;videos</h2>
    </div>
-->
    <!-- <p style="position: absolute; height:100%; font-size:210px; writing-mode: vertical-rl; text-orientation: upright; font-weight:900; font-familly: arial; letter-spacing: -120px; word-spacing: -130px; z-index: -200; color: orange;">ETE INDIEN</p>  -->
    <header>
      <?php include "../include/header_content.php";?>
    </header>
    <div class="container-fluid">
      <div class="row justify-content-center text-center mx-auto">
        <div class="col-1 prevt">
          <?php
          if ($precedent_id) {
            ?>
          <a class="content-control-prev" href="content.php?id=<?php echo ($precedent_id) ?>">
            <i class="fas fa-chevron-left"></i> </a> <?php
                    }
                    ?></div>
        <div class="col-12 col-md-10 p-0 content">
          <div class="content-inner">
            <div class="content-item" id="main-vid">
              <div class="screen">
                <p class="content-title"><?= $video->titre_video ?></p>
                <p id="head-para2">
                  <span class="mot">Catégorie:&nbsp</span><a href="#"
                    style="color: #ff5c00!important;"><?= $video->genre_name ?></a>
                  <span class="mot">Durée:</span> <?= $video->duree_video?>
                </p>
                <div class="row justify-content-center mx-auto" id="lecteur">
                  <div class="container2">
                    <div class="c_vid">
                      <video id="my-player" class="video-js vjs-waiting" controls preload="auto"
                        poster="../upload/<?= $video->titre_video ?>" data-setup='{}'>
                        <source src="../upload/<?= $video->titre_video ?>.mp4" type="video/mp4">
                        </source>
                        <p class="vjs-no-js">
                          To view this video please enable JavaScript, and consider upgrading to a
                          web browser that
                          <a href="https://videojs.com/html5-video-support/" target="_blank">
                            supports HTML5 video
                          </a>
                        </p>
                      </video>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mx-auto" id="para">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                  <p id="head-para"><?= $video->description_video ?></p>
                </div>
                <div class="col-md-2"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-1 nextt">
          <?php
          if ($suivant_id) {
            ?>
          <a class="content-control-next" href="content.php?id=<?php echo ($suivant_id) ?>">
            <i class="fas fa-chevron-right"></i>
          </a> <?php
                    }
                    ?>
        </div>
        <nav aria-label="...">
          <ul class="pagination" style="justify-content: center;">
            <?php
          if ($precedent_id) {
            ?>
            <li class="page-item{% if page == 1 %}disabled{% endif %}" id="next-prev">
              <a class="page-link"
                style="width: 6em; margin-left: -2em; text-align: center; background-color: #ff5c00; border: solid 1px #ccc; border-radius: 50px; padding:0.2em 0.4em; text-decoration: none; font-size: 1.4em; font-weight:600; color: black"
                href="content.php?id=<?php echo ($precedent_id) ?>" tabindex="-1" aria-disabled="true">Précédent</a>
            </li>
            <?php
                    }
                    ?>
            <?php
          if ($suivant_id) {
            ?>
            <li class="page-item{% if page == pages %}disabled{% endif %}" id="next-prev">
              <a class="page-link"
                style="width: 6em; text-align: center; background-color: #ff5c00; border: solid 1px #ccc; border-radius: 50px; margin-left:1em; padding:0.2em 0.4em; text-decoration: none; font-weight:600; font-size: 1.4em; color: black"
                href="content.php?id=<?php echo ($suivant_id) ?>">Suivant</a>
            </li>
            <?php
                    }
                    ?>
          </ul>
        </nav>
      </div>
    </div>
    <hr class="col-4" id="hr"">
    <?php include "../include/autresVideos.php"; ?>

</main>

<?php include "../include/footer.php";?>
<!-- Start of HubSpot Embed Code -->
<script type=" text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/4905136.js">
    </script>
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
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="../js/parallax.min.js"></script>
    <!-- Start of HubSpot Embed Code -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/6003001.js"></script>
    <!-- End of HubSpot Embed Code -->

  </body>

</html>