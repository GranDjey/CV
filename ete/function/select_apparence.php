<?php

$current_id=1;
$sql=$conn->prepare("SELECT * FROM apparence WHERE id=$current_id");
$sql->execute();
$app=$sql->fetch();


?>