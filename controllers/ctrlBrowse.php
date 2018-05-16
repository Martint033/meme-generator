<?php 
    require("models/model.php");

    $posts = listImg();

    require 'vendor/autoload.php';

    $loader = new Twig_Loader_Filesystem('views');
    $twig = new Twig_Environment($loader, array(
        'cache'=> false
    ));

    $template = $twig->load('browse.html');
    echo $template->render (array('imgBase'=>$posts));