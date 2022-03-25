<?php
    include("config/config.inc.php");
    include("model/pdo.inc.php");
    
    
    try{
        $query = "SELECT contact_name, contact_message FROM `blog_contacts`";

        $req = $pdo->query($query);
        $data = $req->fetchAll();
        //var_dump($data);
    }
    catch(Exception $e){
        die("erreur mysql : " . $e->getMessage());
    }


    $bg="assets/img/message.png"; 
    $header_title="Vos Messages"; 
?>