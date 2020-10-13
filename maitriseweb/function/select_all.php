<?php
$req = $conn->query("SELECT * FROM projet");
     $articles = $req->fetchAll();
?>