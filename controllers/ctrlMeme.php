<?php 
    require("models/model.php");

    $oneMeme= getMeme();
    // $sim = getsimilar();
    
    require 'vendor/autoload.php';

    $loader = new Twig_Loader_Filesystem('views');
    $twig = new Twig_Environment($loader, array(
        'cache'=> false
    ));

    $template = $twig->load('meme.html');
    echo $template->render(array('meme'=>$oneMeme));
   