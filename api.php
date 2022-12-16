<?php
$albums = file_get_contents("list.json");
$albums = json_decode($albums, true);
$albums_string = json_encode($albums);

header("Content-Type: application/json");
echo $albums_string;


?>