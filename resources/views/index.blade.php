<?php
    // This is where all the universal settings is stored
    $ABS_ROOT_PATH = "wonderHOME.com";

    //available pages
    $PAGES = ["home"];
    $SERVICES = ["mua-nha", "ban-nha", "tim-chuyen-gia"];
    $PROPERTY = ["thong-tin"];

    $NAVLINK_VIE = array(["Mua nhà", "dich-vu/".$SERVICES[0]], ["Bán nhà", "dich-vu/".$SERVICES[1]], ["Tìm chuyên gia", "dich-vu/".$SERVICES[2]], ["Hướng dẫn", ""]); 

    //Font
    $FONT_FAMILY = "Poetsen One";

    //color palette
    $PRIMARY_BLACK = "171717";
    $PRIMARY_AMBER = "fbbf24";
    $PRIMARY_WHITE = "fff";
?>

<style>
html *
{
   font-family: <?php echo $FONT_FAMILY; ?>
}
</style>

@vite('resources/css/app.css')

<!DOCTYPE html>
<html>
    <head>
        <title>wonderHOME - Biến tổ ấm trong mơ thành hiện thực</title>
        <meta charset = "UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./assets/css/home.css">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body>
        @include('components/header')

        @include('landing')

        @include('components/footer')
    </body>
</html>