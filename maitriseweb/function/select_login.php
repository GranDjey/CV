
<?php

$req = $conn->prepare('SELECT * FROM `admin` WHERE Name_admin = :Name_admin AND Mdp_admin = :Mdp_admin');
?>