<?php 
    if( (!isset($_GET['article'])) || ($_GET['article'] == '1') ){
        $bg="assets/img/post-bg.jpg";
        $title="Planche de surf";
        $subtitle="Comment bien la choisir ?";
        $content="Mon article1";
    }
    
    //article 2
    
    else if($_GET['article'] == '2'){
        $bg="assets/img/surf.jpg";
        $title="Découvrez nos selections";
        $subtitle="Des dix meilleurs";
        $content="article2";
    }

    //article 3

    else if($_GET['article'] == '3'){
        $bg="assets/img/surf2.jpg";
        $title="Surf";
        $subtitle="Partie intégrante de la culture hawaïenne";
        $content="article3";
    }
    else{
        $bg="assets/img/erreur.png";
        $title="Erreur";
        $subtitle="Une erreur est survenue";
        $content="";
    }
?>