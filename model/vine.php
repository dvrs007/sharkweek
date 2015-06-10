<?php

require 'database.php';

class vineClass {
    
    public function getResults(){
        Database::getDB();
        $query = 'SELECT * FROM vine
                  ORDER BY id DESC';
        $result = $db->query($query);
        var_dump($result);
        
    }
    public function insertResults(){
        Database::getDB();
    }
}


