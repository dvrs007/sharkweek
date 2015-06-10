<?php

class CategoryDB {    
    //CategoryDB class is to control the data from the categories table
    //two methods to manipulate the data
    //(1) getCategories() : to get all the categories. (list of categories)
    //(2) getCategory($category_id) : to get a chosen category
    
    public static function getTwitter() {
        $dbCon = Database::getDB();
        $query = 'SELECT * FROM twitter ORDER BY id';
        $result = $dbCon->query($query);
        $feeds = array();
        foreach ($result as $row) {
            $feed = new Twitter();
            $feeds[] = $category;
        }
        return $feeds;   //return the array of feeds
    }        
}
?>