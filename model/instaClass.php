<?php

Class Insta {
    
    private $user,$fname,$img,$img_id,$likes,$link;

    public function __construct(){}

    public function getUser(){   
        return $this->user;
    }
    
    public function setUser($value){
        $this->user=$value;
    }

    public function getFullName(){   
        return $this->fname;
    }
    
    public function setFullName($value){
        $this->fname=$value;
    }

    public function getImg(){   
        return $this->img;
    }
    
    public function setImg($value){
        $this->img=$value;
    }

    public function getImgID(){   
        return $this->img_id;
    }
    
    public function setImgID($value){
        $this->img_id=$value;
    }

    public function getLikes(){   
        return $this->likes;
    }
    
    public function setLikes($value){
        $this->likes=$value;
    }

    public function getLink(){   
        return $this->link;
    }
    
    public function setLink($value){
        $this->link=$value;
    }

    public function insertInsta(){

    	$db = Database::getDB();

    	$user = $this->getUser();
        $fname = $this->getFullName();
        $img = $this->getImg();
        $imgID = $this->getImgID();
        $likes = $this->getLikes();
        $link = $this->getLink();

	    $query = "INSERT IGNORE INTO instagram
	    		  (user, full_name, img, img_id, likes, link)
	    		  VALUES
	    		  ('$user','$fname','$img','$imgID','$likes','$link')";

	   	$addInsta = $db->exec($query);
	   	return $addInsta;

	}

}