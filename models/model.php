<?php 

require_once("utils/db.php");



function getPictures(){
//stNewPictureS
   
    global $bdd;
    $stps = $bdd->prepare('SELECT * FROM pictures');
    $stps->execute();
    $result = $stps->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
getPictures();



function getMemes(){
    //stMemeS

    global $bdd;
    $stms = $bdd->prepare('SELECT title_m, meme, date_m FROM memes');
    $stms->execute();
    var_dump($stms->fetchAll(PDO::FETCH_ASSOC));

    return $stms->fetchAll(PDO::FETCH_ASSOC);
}
// getMemes();

    

// function insertNewPicture(){
// //stNewPicture

//     global $bdd;
//     $stnp = $bdd->prepare('INSERT INTO `pictures`(`title_p`, `picture`) VALUES (`title`, `pic`)');
//     // $stnp->bindParam(':id_picture', $id_picture);
//     $stnp->execute();
//     var_dump($stnp->fetchAll(PDO::FETCH_ASSOC));

//     return $stnp->fetchAll(PDO::FETCH_ASSOC);
// }
// insertNewPicture();

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
// getMemeTag();

function getTags(){
    global $bdd;
    $response = $bdd->prepare('SELECT tag FROM tag');
    $response->execute();
    $allTags = $response->fetchAll(PDO::FETCH_ASSOC);
    return $allTags;
    $response->closeCursor();
}

// function listImg () {
    
//     global $dbo;
//     $response = $GLOBALS['bdd']->prepare('SELECT * FROM pictures');
//     $response->execute();
//     var_dump($response->fetchAll(PDO::FETCH_ASSOC));
//     return $response->fetchAll(PDO::FETCH_ASSOC);
// }
// listImg();

// function addImg ($img, $title) {
    
//     global $dbo;
//     $response = ->prepare('INSERT INTO `pictures`(`title_p`, `picture`) VALUES ('.$title.' , '.$img.')');
//     $response->execute();
// }
function listImg () {
    global $bdd;
    $response = $bdd->prepare('SELECT id, title, `image`,`newName`  FROM image');
    $response->execute();
    $allImages = $response->fetchAll(PDO::FETCH_ASSOC);
    return $allImages;
    $response->closeCursor();
}


function selectedImg(){
    global $bdd;
    $newName = $_GET['id'];
    $resultat = $bdd->prepare("SELECT `id`, `image` FROM `image` WHERE `id` = :selectedImg");
    $resultat->bindParam(':selectedImg', $newName, PDO::PARAM_INT);
    $resultat->execute();   
    $selectedImage = $resultat->fetch(PDO::FETCH_ASSOC);
    return $selectedImage;
}


function addImg ($img, $title) {
    global $bdd;
    $response = $bdd->prepare('INSERT INTO `pictures`(`title_p`, `picture`) VALUES (:title , :url)');
    $response->bindParam(':title', $title);
    $response->bindParam(':url', $url);
    $response->execute();
}
