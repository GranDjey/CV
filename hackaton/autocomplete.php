<?php
include 'co.php';
$sql="SELECT nom FROM `personne`GROUP BY nom";
$req=$dbh->query($sql);
$results=$req->fetchAll();
?>
<div>
<?php foreach($results as $result){
            echo '"'.$result["nom"].'",<br>';
        } ?>
</div>