
<!-- Parallax -->
<!--
<div class="parallax-window" data-parallax="scroll" data-image-src="img/seniorsport.jpg">
<h1 class="para-title">Sport en video<br />efficace et ludique!</h1>
</div>
-->
<!-- carousel des autres vidéos -->
<?php
    $stmt = $conn->prepare('SELECT * FROM video Order By id ASC');
    $stmt->execute();
    $video = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<div class="d-flex flex-row car">
    <div id="recipeCarousel" class="carousel slide w-100  justify-content-center" data-ride="carousel">
    <h4 class="car-title">Autres exercices</h4>
    <div class="carousel" data-flickity='{ "groupCells": true, "prevNextButtons": true }'>
        <?php
            for($i = 0; $i < sizeof($video) ; $i++){
                echo
                '<div class="carousel-cell">
                    <a href="content.php?id='.$video[$i]['id'].'"><img class="car_img" src="../upload/'.$video[$i]['titre_video'].'.png"></a>
                </div>';
            }
        ?>
        </div>
    </div>
</div>
