<?php 
    require("models/model.php");

    $selectedImg = selectedImg();
    $similarMemes = getsimilarMemes();
 
    require_once 'vendor/autoload.php';

    $loader = new Twig_Loader_Filesystem('views');
    $twig = new Twig_Environment($loader, array(
        'cache'=> false
    ));

    $template = $twig->load('edit-meme.html');
    echo $template->render (array('selection'=>$selectedImg, 'similarMemes'=>$similarMemes));
    


