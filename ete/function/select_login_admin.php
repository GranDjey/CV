
<?php

$req = $conn->prepare('SELECT * FROM `admin` WHERE admin_name = :admin_name AND admin_password = :admin_password');
?>