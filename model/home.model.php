<?php // on indique que le code qui va suivre est du php
    include("config/config.inc.php"); //on appelle le fichier config qui définie les paramètres de la connection à la BDD
    include("model/pdo.inc.php"); //on appelle le fichier 'pdo' qui établie la connection la BDD
    
    
    try{
        // on définit dans la variable $query la requete SQL suivante...
        $query = "  
        SELECT post_ID, post_date, LEFT(post_content, " . TRONCATURE . ") AS post_content, post_title, post_img_url, display_name, cat_descr 
        FROM `blog_posts`
        JOIN blog_users
        ON blog_posts.post_author=blog_users.ID
        JOIN blog_categories
        ON blog_categories.cat_id=blog_posts.post_category
        ORDER BY post_date DESC"; // Dans cette requete sql 'SELECT' on selectionne les champs que l'on veut afficher, la const 'TRONCATURE' (qui est définit dans le ficher de config, define("TRONCATURE", 250);) tronc le texte d'un article.
        // FROM définit dans quelle table on veut aller chercher les infos.
        // JOIN permet de faire une jointure entre la table blog_posts et blog_users avec comme paramètre (défnie par ON) le post_author de la table blog_post doit etre égale à l'ID de la table blog _users.
        // On fait de meme pour la jointure entre blog_posts et blog_categories.
        //on termine avec un ORDER BY qui donne un ordre de lecture avec le champ post_date, DESC signifie décroissant.

        

        $req = $pdo->query($query); // On définit dans la variable $req la requete pdo de la variable $query vu plus tot.
        //echo "Connection établie";
        /* while($data = $req->fetch()){
            var_dump($data);
        }
        $req->closeCursor(); */

        $data = $req->fetchAll(); // On définit dans la variable $data la requete qui récupère les données sous forme de tableau (2 dimensions).
        //var_dump($data);
    }
    catch(Exception $e){  // La clause catch est la pour récupérer le file de la boucle si dans le try il y a une Exception.
        die("erreur mysql : " . $e->getMessage()); // die stop l'exécution du script et affiche quelque chose, en l'ocurrence, 'erreur mysql :' + un message qui affiche l'exception détectée.
    }


    $bg="assets/img/home-bg.jpg"; // On définit dans la variable $bg le chemin d'une image.jpg qui se retrouve dans le layout header
    $header_title="Blog de surf"; // On définit dans la variable $header_title du texte qui se retrouve dans l'index.php
    $header_subtitle="Comment bien lui demander"; // On définit dans la variable  $header_subtitle du texte qui se retrouve dans le layout header

    /* $title_art_1="Planche de surf";
    $subtitle_art_1="Comment bien la choisir";
    $auteur_art_1="Philippe G";
    $date_art_1="22 Mars 2022"; */
?>