<?php
    /* var_dump($_GET);
    exit; */
    /* die($_GET['article']); */
    /* echo($_GET['article']); */

    //ce controler doit recevoir un parametre article
    if (!isset($_GET["article"])){
        var_dump("manque param");
    }

    include("./model/post.model.php");

    $bg= $data["post_img_url"];
    $layout_title= $data["post_title"]; 
    $header_title= substr($data["post_title"], 0, TRONCATURE_HEADER) . '...'; 
    $header_subtitle= '...' . substr($data["post_title"], TRONCATURE_HEADER); 

    include("view/post.view.php");
?>