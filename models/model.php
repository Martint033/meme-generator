<?php 
// ce model contient toutes les requêtes 

require_once("utils/db.php")


function listImg () {
    $response = $GLOBALS['bdd']->prepare('SELECT * FROM image');
    $response->execute();
    return $response->fetchAll(PDO::FETCH_ASSOC);
}


function addImg ($img, $title) {
    $response = $GLOBALS['bdd']->prepare('INSERT INTO `image`(`title`, `image`) VALUES ('.$title.' , '.$img.')');
    $response->execute();
}