<?php 

require_once("utils/db.php");

function hotMemes(){
    global $bdd;
    $response = $bdd->prepare('SELECT id_m, title_m, meme, date_m FROM memes WHERE date_m <= CURRENT_TIMESTAMP() ORDER BY date_m DESC LIMIT 9');
    $response->execute();
    return $response->fetchAll(PDO::FETCH_ASSOC); 
}

function addMeme($title,$memeURL,$newName_m, $id_picture){
    global $bdd;
    $response = $bdd->prepare("INSERT INTO memes(`title_m`,`meme`, newName_m, `date_m`, id_picture) VALUES (:title, :memeURL,:newName_m, CURRENT_TIMESTAMP, :id_picture)");
    $response->bindParam(":title",$title);
    $response->bindParam(":memeURL",$memeURL);
    $response->bindParam(":newName_m",$newName_m);
    $response->bindParam(":id_picture",$id_picture);
    $response->execute();
    return $response->fetchAll(PDO::FETCH_ASSOC); 
}

function getMeme(){
    global $bdd;
    $id_m = $_GET['id'];
    $response = $bdd->prepare("SELECT title_m, meme FROM memes WHERE id_m = :id_m");
    $response->bindParam(':id_m', $id_m);
    $response->execute();
    return $response->fetch(PDO::FETCH_ASSOC);
}

function getallMemes(){
    global $bdd;
    $response = $bdd->prepare("SELECT id_m, title_m, meme FROM memes");
    $response->execute();
    return $response->fetchAll(PDO::FETCH_ASSOC);
}    

function getsimilarMemes(){
    global $bdd;
    $id_p = $_GET['id'];
    $response = $bdd->prepare("SELECT id_picture, id_m, title_m, meme FROM memes WHERE id_picture = :id_p");
    $response->bindParam(":id_p", $id_p);
    $response->execute();
    return $response->fetchAll(PDO::FETCH_ASSOC);
}

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

// ajouter une image
function addImg ($title, $nom, $url) {
    global $bdd;
    $response = $bdd->prepare('INSERT INTO `pictures`(title_p, `picture`, `newName`) VALUES (:title,:chemin, :nom)');
    $response->bindParam(':nom', $nom);
    $response->bindParam(':chemin', $url);
    $response->bindParam(':title',$title);
    $response->execute();
    return $bdd->lastInsertId(); 
}
