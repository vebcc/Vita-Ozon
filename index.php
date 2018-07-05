<?php

    if(isset($_GET["page"]) && !empty($_GET["page"])){
        $page = htmlspecialchars(stripslashes(strip_tags(trim($_GET["page"]))));
    }else{
        $page="home";
    }
    require("include/header.php");
    require("include/section/$page.php");
    require("include/footer.php");

?>
