<?php

include_once(__DIR__ . "/Db.php");


function canLogin($p_username, $p_password) {

    $conn = new PDO('mysql:host=ID391610_conneco.db.webhosting.be;dbname=ID391610_conneco', "ID391610_conneco", "C0nn3c01sg3w3ld1g");
    $statement = $conn->prepare("SELECT * FROM users WHERE email = :email");
    $statement->bindValue(":email", $p_username); // sql beschermen tegen injectie
    $statement->execute();
    $user = $statement->fetch(PDO::FETCH_ASSOC);
    $hash = $user['password'];
    
    if(password_verify($p_password, $hash)){
        return true;
    }
    else{
        return false;
    }
};


?>