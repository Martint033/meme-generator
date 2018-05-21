<?php 
    require("models/model.php");

    $meme = getallMemes();
    require 'vendor/autoload.php';
    $loader = new Twig_Loader_Filesystem('views');
    $twig = new Twig_Environment($loader, array(
        'cache'=> false
    ));

    $template = $twig->load('browse.html');
    echo $template->render (array('memes'=>$meme));
