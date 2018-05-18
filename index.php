<?php
 
$url = explode("/",$_SERVER['REQUEST_URI'],4);
if (count($url)>3){
    array_pop($url);
}
$path = implode("/", $url);

switch($path){
    case "/meme-generator/":
    case "/meme-generator/homepage":
    case "/meme-generator" :
        require('controllers/ctrlHomepage.php');
        break;
        break;
        break;
    case "/meme-generator/create":
        require('controllers/ctrlCreate.php');
        break;
    case "/meme-generator/browse":
        require('controllers/ctrlBrowse.php');
        break;
    case "/meme-generator/browse/meme":
        require('controllers/ctrldownload.php');
        break;
    case "/meme-generator/edit-meme":
        require('controllers/ctrlEditMeme.php');
        break;
}
