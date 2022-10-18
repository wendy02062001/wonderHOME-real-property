<?php
   $service = '';
   if (isset($_GET['service'])){
        if (in_array($_GET["service"], $SERVICES)){
           $service = $_GET["service"];
        }
   } else if (isset($_POST['service'])){
        if (in_array($_POST["service"], $SERVICES)){
           $service = $_POST["service"];
        }
   }

    if ($service) {
        include($service.'.php');
    } else {
        include($ABS_ROOT_PATH."index.php");
    }
?>