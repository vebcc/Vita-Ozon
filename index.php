<?php
    require("include/header.php");


    if(isset($_GET["page"]) && !empty($_GET["page"])){
        $page = htmlspecialchars(stripslashes(strip_tags(trim($_GET["page"]))));
        require("include/section/$page.php");
    }else{
        require("include/section/home.php");
    }

    require("include/footer.php");
?>
