<?php 
// ce model contient toutes les requêtes 
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
//     //stNewPicture
    
//         global $dbo;
//         $stnm = $dbo->prepare('INSERT INTO `memes`(`title_m`, `meme`) VALUES (`title`, `mem`)'
//         // $stnp = $dbo->prepare('INSERT GROUP_CONCAT( CONCAT(prenom_a," ", nom_a)) as acteur FROM acteurs a INNER JOIN liaison_a_f laf ON laf.id_acteur = a.id_a WHERE laf.id_film = :id_film');                    
//         $stnm->bindParam(':id_meme', $id_meme);
//         $stnm->execute();
//         $newMeme = $stnm->fetch();
    
//         return $stnm;
    
//     }
    

// function getMemeTag(){
    
//     global $dbo;
//     $stgmt = $dbo->prepare('SELECT SELECT GROUP_CONCAT( CONCAT(prenom_a," ", nom_a)) as acteur FROM acteurs a INNER JOIN liaison_meme_tag lmt ON lmt.id_acteur = a.id_a WHERE laf.id_film = :id_film ')
//     $stgmt->bindParam(':id_film', $id_film);
//     $stgmt->execute();
//     $acteurs = $stgmt->fetch();

//     return $acteurs['acteur'];

// }
// }