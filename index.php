<?php

// //Rounting

// if (isset($_GET['action'])){
    
//     switch ($_GET['action']) { 
        
//     //routeur

//     case 'browse':
//     require_once('controllers/ctrlBrowse.php');
//     break;

//     case 'create':
//     require_once('controllers/ctrlCreate.php');

//     break;

//     case 'homepage':
//     require_once('controllers/real.php');
//     break;
    

//     default:

//     require_once('error.html');
    

//     }
// } else {
//     require_once('controllers/ctrlBrowse.php');
// }
    include("controllers/ctrlHomepage.php");

?>