<?php 

require_once("utils/db.php");

function hotMemes(){

}
// function insertNewMeme(){
//     //stNewMeme
    
//     global $bdd;
//     $stnm = $bdd->prepare('INSERT INTO `memes`(`title_m`, `meme`) VALUES (`title`, `mem`)'
//     $stnm->execute();
//     var_dump($stnm->fetchAll(PDO::FETCH_ASSOC));
    
//     return $stnm->fetchAll(PDO::FETCH_ASSOC));
    
// }
// insertNewMeme();
    

// function getMemeTag(){
    
//     global $bdd;
//     $stgmt = $bdd->prepare('SELECT FROM  INNER JOIN liaison_meme_tag lmt ON lmt.id_ = a.id_a WHERE laf.id_film = :id_film ')
//     $stgmt->execute();
//     var_dump($stgmt->fetch(PDO::FETCH_ASSOC));

//     return ($stnm->fetch(PDO::FETCH_ASSOC));

// }


// obtenir les catégories
function getTags(){
    global $bdd;
    $response = $bdd->prepare('SELECT tag FROM tag');
    $response->execute();
    $allTags = $response->fetchAll(PDO::FETCH_ASSOC);
    return $allTags;
    $response->closeCursor();
}

// afficher toutes les images 
function listImg () {
    global $bdd;
    $response = $bdd->prepare('SELECT id_p, title_p, `picture`,`newName` FROM pictures');
    $response->execute();
    $allImages = $response->fetchAll(PDO::FETCH_ASSOC);
    return $allImages;
    $response->closeCursor();
}

// afficher une seule image sélectionnée
function selectedImg(){
    global $bdd;
    $newName = $_GET['id'];
    $resultat = $bdd->prepare("SELECT `id_p`, `picture` FROM `pictures` WHERE `id_p` = :selectedImg");
    $resultat->bindParam(':selectedImg', $newName, PDO::PARAM_INT);
    $resultat->execute();   
    $selectedImage = $resultat->fetch(PDO::FETCH_ASSOC);
    return $selectedImage;
}

<<<<<<< HEAD
// ajouter une image
function addImg ($title, $nom, $url) {
=======

function addImg($nom, $url) {
>>>>>>> a8f41d8db0923b60cec37483f6612353c1d29b1a
    global $bdd;
    $response = $bdd->prepare('INSERT INTO `pictures`(title_p, `picture`, `newName`) VALUES (:title,:chemin, :nom)');
    $response->bindParam(':nom', $nom);
    $response->bindParam(':chemin', $url);
    $response->bindParam(':title',$title);
    $response->execute();
    return $bdd->lastInsertId(); 
}
