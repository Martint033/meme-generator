<<<<<<< HEAD
<?php 
require("models/model.php");
echo'coucou';
$title = $_POST['title'];
$url = $target_dir.'/'.$target_file;
$idImg = addImg($title,$nom, $url);


require_once 'vendor/autoload.php';


$upload_dir = upload_meme();  //implement this function yourself
$img = $_POST['download'];
// $img = str_replace('data:image/png;base64,', '', $img);
// $img = str_replace(' ', '+', $img);
$data = base64_decode($img);
$file = $upload_dir."image_name.png";
$success = file_put_contents($file, $data);


// $template = $twig->load('upload-meme.html');

header('Location: /meme-generator/upload-meme/'.$nom."&".$idImg);
?>
=======
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
>>>>>>> 715a16f3460849bfa2fa8ecbbaf58a269813cf23
