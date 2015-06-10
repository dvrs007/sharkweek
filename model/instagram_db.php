<?php

//database
require('instagramDB.php');

class Insta {
    
    
    private $user, $image, $fullname;
    
    
    function InsertInsta($user, $image, $fullname){
        
        $dbcon=Database::getDB();
        
        $sql="INSERT INTO instagram(user, img, full_name) VALUES ($user, $image, $fullname)";
        $dbcon->exec($sql);
    }
    
    
}
