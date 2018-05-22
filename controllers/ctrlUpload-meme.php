<?php
$data = $_POST['save'];

$newName_m = uniqid();
$memeURL = "assets/medias/memes/".$newName_m.".png";
$title = "TEST";
var_dump($_GET['id']);

list($type, $data) = explode(';', $data);
list(, $data)      = explode(',', $data);
$data = base64_decode($data);
file_put_contents($memeURL,$data);

require("models/model.php");

$id_picture = $_POST['id_picture'];
addMeme($title, $memeURL, $newName_m, $id_picture);




  
//header('Location: /meme-generator/edit-meme/'.$nom."&".$idImg); 