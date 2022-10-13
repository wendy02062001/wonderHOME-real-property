<?php
    require_once("settings.php");

    $_SESSION["active_page"] = "home";

    if (isset($_GET["page"])){
        if (in_array($_GET["page"], $PAGES)){
            $_SESSION["active_page"] = $_GET["page"];
        }
        if (in_array($_GET["page"], $SERVICES)){
            $_SESSION["active_page"] = "services/".$_GET["page"];
        }
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>wonderHOME</title>


        <meta charset = "UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>


    <body>
        <!--header-->
        <header>
            <?php
                require(dirname(__FILE__) . "/includes/header.php");
            ?>
        </header>
        
        <!-- main body -->
        <div class="wrapper">
            <!-- page's content -->
            <div class="page-container">
                <?php
                    require("routes/".$_SESSION["active_page"].".php");
                ?>
            </div>
        </div>

        <!-- footer  -->
        <footer>
            <?php
                require(dirname(__FILE__) . "/includes/footer.php");
            ?>
        </footer>
    </body>


</html>