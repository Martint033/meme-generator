<?php 
// ce model contient toutes les requêtes 
// require_once("utils/db.php");

try {

$dbo = new PDO('mysql:host=localhost;dbname=meme_generator', 'root', '');
}

catch(PDOException $e){
    echo'Problem during connection' . $e->getMessage();
}



function getPictures(){
//stNewPictureS
   
    global $dbo;
    $stps = $dbo->prepare('SELECT * FROM pictures' );
    $stps->execute();
    var_dump($stps->fetchAll(PDO::FETCH_ASSOC));

    return $stps->fetchAll(PDO::FETCH_ASSOC);
}
// getPictures();



function getMemes(){
    //stMemeS

    global $dbo;
    $stms = $dbo->prepare('SELECT title_m, meme, date_m FROM memes');
    $stms->execute();
    var_dump($stms->fetchAll(PDO::FETCH_ASSOC));

    return $stms->fetchAll(PDO::FETCH_ASSOC);
}
// getMemes();

    

function insertNewPicture(){
//stNewPicture

    global $dbo;
    $stnp = $dbo->prepare('INSERT INTO `pictures`(`title_p`, `picture`) VALUES (`title`, `pic`)');
    // $stnp->bindParam(':id_picture', $id_picture);
    $stnp->execute();
    var_dump($stnp->fetchAll(PDO::FETCH_ASSOC));

    return $stnp->fetchAll(PDO::FETCH_ASSOC);
}
// insertNewPicture();

// function insertNewMeme(){
//     //stNewMeme
    
//     global $dbo;
//     $stnm = $dbo->prepare('INSERT INTO `memes`(`title_m`, `meme`) VALUES (`title`, `mem`)'
//     $stnm->execute();
//     var_dump($stnm->fetchAll(PDO::FETCH_ASSOC));
    
//     return $stnm->fetchAll(PDO::FETCH_ASSOC));
    
// }
// insertNewMeme();
    

// function getMemeTag(){
    
//     global $dbo;
//     $stgmt = $dbo->prepare('SELECT FROM  INNER JOIN liaison_meme_tag lmt ON lmt.id_ = a.id_a WHERE laf.id_film = :id_film ')
//     $stgmt->execute();
//     var_dump($stgmt->fetch(PDO::FETCH_ASSOC));

//     return ($stnm->fetch(PDO::FETCH_ASSOC));

// }
// getMemeTag();



function listImg () {
    $response = $GLOBALS['bdd']->prepare('SELECT * FROM image');
    $response->execute();
    return $response->fetchAll(PDO::FETCH_ASSOC);
}


function addImg ($img, $title) {
    $response = $GLOBALS['bdd']->prepare('INSERT INTO `image`(`title`, `image`) VALUES ('.$title.' , '.$img.')');
    $response->execute();
}
