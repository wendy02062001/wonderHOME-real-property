<?php
session_start();
?>
<?php
    require_once("settings.php");

    $_SESSION["active_page"] = "home";

    if (isset($_GET["page"])){
        if (in_array($_GET["page"], $PAGES)){
            $_SESSION["active_page"] = $_GET["page"];
        } else if (in_array($_GET["page"], $SERVICES)){
            $_SESSION["active_page"] = "dich-vu/".$_GET["page"];
        } else if (in_array($_GET["page"], $PROPERTY)){
            $_SESSION["active_page"] = "nha-dat/".$_GET["page"];
        }
    } else  if (isset($_POST["page"])){
        if (in_array($_POST["page"], $PAGES)){
            $_SESSION["active_page"] = $_POST["page"];
        } else if (in_array($_GET["page"], $SERVICES)){
            $_SESSION["active_page"] = "dich-vu/".$_POST["page"];
        } else if (in_array($_GET["page"], $PROPERTY)){
            $_SESSION["active_page"] = "nha-dat/".$_POST["page"];
        }
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>wonderHOME - Biến tổ ấm trong mơ thành hiện thực</title>
        <meta charset = "UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="http://fonts.cdnfonts.com/css/poetsen-one" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="./assets/css/home.css">
    </head>

    <body>
        <?php
            // header
            require("includes/header.php");

            // main body content
            require("pages/".$_SESSION["active_page"].".php");

            // footer
            require("includes/footer.php");
        ?>
    </body>
</html>