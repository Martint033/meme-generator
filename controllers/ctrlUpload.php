<?php

$target_dir = "assets/medias/images";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$nom = md5(uniqid(rand(), true));
$target_file = $nom.".".$imageFileType;

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "<p>File is an image - " . $check["mime"] . ".</p>";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    if ($_FILES["fileToUpload"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } 
    else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir.'/'.$target_file)) {
            echo "<p>The file has been upload at ".  $target_dir.'/'.$target_file." . . . </p>";
        } 
        else {
            echo "Sorry, there was an error uploading your file.";
        }
       
    }

require("models/model.php");
$title = $_POST['title'];
$url = $target_dir.'/'.$target_file;
$idImg = addImg($title,$nom, $url);




  
header('Location: /meme-generator/edit-meme/'.$nom."&".$idImg); 