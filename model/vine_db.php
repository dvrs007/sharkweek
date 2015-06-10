<?php

class vineClass {
    
    public static function getResults() {
        $db = Database::getDB();
        $query = 'SELECT * FROM vine';
        $result = $db->query($query);
        //convert result into array to be used in view
        $vines = array();
        foreach ($result as $row) {
            $vine = new Vine(
                                   $row['username'],
                                   $row['video']);
            $vine->setId($row['id']);
            $vines[] = $vine;
        }
        var_dump($vines);
        return $vines;
    }
    
    
    public function insertResults(){
        database::getDB();
    }
}


