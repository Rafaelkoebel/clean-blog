<?php // on indique que le code qui va suivre est du php
    include("model/home.model.php"); //on appelle le model 'home'
    
    $layout_title= $header_title; // on définit la variable $layout_title en $header_title qui est égale à "Blog de surf" qui est lui meme définit dans le model 'home'

    include("view/home.view.php"); //on appelle la vue 'home'
?>