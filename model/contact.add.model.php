<?php
include("config/config.inc.php");
include("model/pdo.inc.php");

try{
    //var_dump($_POST);
    $query = "
        INSERT INTO blog_contacts
        (contact_name2, contact_email, contact_phone, contact_message)
        VALUES
        ('" . addslashes($_POST["name"]) . "', '" . $_POST["email"] . "', '" . $_POST["phone"] . "', '" . addslashes($_POST["message"]) . "' )";
    //die($query);
    $req = $pdo->exec($query);
    //echo"fin";
}
catch(Exception $e){
    //die("erreur mysql : " . $e->getMessage());
    header("Location: index.php?erreur=1");
    exit;
}
?>