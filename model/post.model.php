<?php 
    include("config/config.inc.php");
    include("model/pdo.inc.php");

    try{
        $query = "
        SELECT post_date, post_content, post_title, post_img_url, display_name, cat_descr
        FROM `blog_posts`
        JOIN blog_users
        ON blog_posts.post_author=blog_users.ID
        JOIN blog_categories
        ON blog_categories.cat_id=blog_posts.post_category
        WHERE post_ID = " . $_GET["article"];

        $req = $pdo->query($query);
        //echo "Connection établie";
        /* while($data = $req->fetch()){
            var_dump($data);
        }
        $req->closeCursor(); */

        $data = $req->fetch();
        //var_dump($data);
    }
    catch(Exception $e){
        die("erreur mysql : " . $e->getMessage());
    }




    /* if( (!isset($_GET['article'])) || ($_GET['article'] == '1') ){
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
    } */
?>