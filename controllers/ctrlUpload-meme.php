<?php 
require("models/model.php");
echo'coucou';
$title = $_POST['title'];
$url = $target_dir.'/'.$target_file;
$idImg = addImg($title,$nom, $url);




$upload_dir = upload_meme();  //implement this function yourself
$img = $_POST['download'];
// $img = str_replace('data:image/png;base64,', '', $img);
// $img = str_replace(' ', '+', $img);
$data = base64_decode($img);
$file = $upload_dir."image_name.png";
$success = file_put_contents($file, $data);

header('Location: /meme-generator/upload-meme/'.$nom."&".$idImg);
?>