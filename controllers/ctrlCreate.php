<?php 
    require("models/model.php");

    $posts = listImg();
    $tags = getTags();
    
    require 'vendor/autoload.php';

    $loader = new Twig_Loader_Filesystem('views');
    $twig = new Twig_Environment($loader, array(
        'cache'=> false
    ));

    $template = $twig->load('create.html');
    echo $template->render(array('images'=>$posts,'categories'=>$tags));



