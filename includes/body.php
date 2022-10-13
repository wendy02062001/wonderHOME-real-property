
<?php
    $page = "";

    if (isset($_GET['page'])){
        $page = $_GET['page'];
    }
    else if (isset($_POST['page'])){
        $page = $_POST['page'];
    }

    switch($page) {
        case "":
            include('pages/home.php');
            break;
        case 'buy-a-home':
            include('pages/services/buy-a-home/idex.php');
            break;
        
        case 'sell-a-home':
            include('pages/services/sell-a-home/idex.php');
            break;
    
        case 'find-an-expert':
            include('pages/services/find-an-expert/index.php');
            break;
    
        default:
            include('pages/'.$page.'.php');
            break;
    }
?>