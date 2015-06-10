<?php

class InstaDB {
    
    public function insertInsta(){

    	$db = Database::getDB();

    	$user = $this->getUser();
        $img = $this->getImg();
        $fname = $this->getFullName();

	    $query = "INSERT INTO instagram
	    		  (user, img, full_name)
	    		  VALUES
	    		  ('$user','$img','$full_name')";

	   	$addInsta = $db->exec($query);
	   	return $addInsta;

	}  
}
