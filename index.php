<?php
 
$url = explode("/",$_SERVER['REQUEST_URI'],4);
if (count($url)>3){
    array_pop($url);
}
$path = implode("/", $url);

switch($path){
    
    case "/meme-generator/" :
        require('controllers/ctrlHomepage.php');
        break;
       
    case "/meme-generator/homepage":
        require('controllers/ctrlHomepage.php');
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

    case "/meme-generator/upload":
        require('controllers/ctrlUpload.php');
        break;

    case "/meme-generator/edit-meme":
        require('controllers/ctrlEditMeme.php');
        break;
<<<<<<< HEAD

    case "/meme-generator/upload-meme":
        require('controllers/ctrlUpload-meme.php');
        break;
}
=======
    case "/meme-generator/upload-meme":
        require('controllers/ctrlUpload-meme.php');
        break;
}
>>>>>>> 715a16f3460849bfa2fa8ecbbaf58a269813cf23
