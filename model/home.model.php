<?php 
    include("config/config.inc.php");
    include("model/pdo.inc.php");
    
    
    try{
        $query = "
        SELECT post_ID, post_date, LEFT(post_content, " . TRONCATURE . ") AS post_content, post_title, post_img_url, display_name, cat_descr
        FROM `blog_posts`
        JOIN blog_users
        ON blog_posts.post_author=blog_users.ID
        JOIN blog_categories
        ON blog_categories.cat_id=blog_posts.post_category
        ORDER BY post_date DESC";

        $req = $pdo->query($query);
        //echo "Connection établie";
        /* while($data = $req->fetch()){
            var_dump($data);
        }
        $req->closeCursor(); */

        $data = $req->fetchAll();
        //var_dump($data);
    }
    catch(Exception $e){
        die("erreur mysql : " . $e->getMessage());
    }


    $bg="assets/img/home-bg.jpg";
    $header_title="Blog de surf";
    $header_subtitle="Comment bien lui demander";

    /* $title_art_1="Planche de surf";
    $subtitle_art_1="Comment bien la choisir";
    $auteur_art_1="Philippe G";
    $date_art_1="22 Mars 2022"; */
?>