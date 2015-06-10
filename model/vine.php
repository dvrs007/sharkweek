<?php

class VineClass {
    
    public function getResults(){
        require_once 'db.php';
        $query = 'SELECT * FROM vine';
        $posts = $db->query($query);
        //fetch associative arrays from the data so we can reference column names in the foreach loop
        $allposts = $posts->setFetchMode(PDO::FETCH_ASSOC);
        
        return $allposts;
        
    }
    
    public function insertResults(){
        
    }
}


