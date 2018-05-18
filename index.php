<?php  
    if (isset($_GET['action'])){
        switch ($_GET['action']){
            
            case "create":
                require("controllers/ctrlCreate.php");
            break;

            case "upload":
                require("controllers/ctrlUpload.php");
            break;
        }
    }

    else {
        require("controllers/ctrlHomepage.php");
    }
?>