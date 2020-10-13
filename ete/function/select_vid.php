<?php
function getVid($conn, $nb = null, $id = null){
    if ($nb AND !$id) {
        $req = $conn->query('SELECT video.*, genre.name "genre_name" FROM video, genre WHERE video.genre_id = genre.id LIMIT' .$nb);
        $vids = $req->fetchAll();
    }
    elseif($id){
        $req = $conn->query('SELECT video.*, genre.name "genre_name" FROM video, genre WHERE video.genre_id = genre.id AND video.id =' .$id);
        $vids = $req->fetchObject();
    }
    else{
        $req = $conn->query('SELECT video.*, genre.name "genre_name" FROM video, genre WHERE video.genre_id = genre.id');
        $vids = $req->fetchAll();
    }
    return $vids;
}
?>