<?php 
    require("models/model.php");

    $posts = listImg();
    $allhotMemes = hotMemes();

    require_once ('vendor/autoload.php');

    $loader = new Twig_Loader_Filesystem('views');
    $twig = new Twig_Environment($loader, array(
        'cache'=> false
    ));

    $template = $twig->load('homepage.html');
    echo $template->render (array('imgBase'=>$posts, 'allhotMemes'=>$allhotMemes));
