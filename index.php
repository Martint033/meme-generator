<?php
 
$url = explode("/",$_SERVER['REQUEST_URI'],4);
if (count($url)>3){
    array_pop($url);
}
$path = implode("/", $url);

switch($path){
    case "/meme-generator":
    case "/meme-generator/" :
        require('controllers/ctrlHomepage.php');
        break;
    
}