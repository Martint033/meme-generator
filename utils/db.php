<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=meme_generator;charset=utf8', 'adnane', 'piccolo333');
}
catch(Exception $e) {
    die('Erreur:'.$e->getMessage());
}
?>