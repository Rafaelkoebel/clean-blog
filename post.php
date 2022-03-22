<?php
    /* var_dump($_GET);
    exit; */
    /* die($_GET['article']); */
    /* echo($_GET['article']); */

    //ce controler doit recevoir un parametre article
    if (!isset($GET["article"])){
        var_dump("manque param");
    }


    include("./model/post.model.php");

    $layout_title= $title; 

    include("view/post.view.php");
?>