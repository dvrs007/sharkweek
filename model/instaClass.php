<?php

Class Insta {
    
    private $user,$fname,$img,$img_id,$caption,$likes,$link,$created_time;

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

    public function getCaption(){   
        return $this->caption;
    }
    
    public function setCaption($value){
        $this->caption=$value;
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

    public function getCreatedTime(){   
        return $this->created_time;
    }
    
    public function setCreatedTime($value){
        $this->created_time=$value;
    }

    public function insertInsta(){

    	$db = Database::getDB();

    	$user = $this->getUser();
        $fname = $this->getFullName();
        $img = $this->getImg();
        $imgID = $this->getImgID();
        $caption = $this->getCaption();
        $likes = $this->getLikes();
        $link = $this->getLink();
        $time = $this->getCreatedTime();

	    $query = "INSERT IGNORE INTO instagram
	    		  (user, full_name, img, img_id, caption, likes, link, created_time)
	    		  VALUES
	    		  ('$user','$fname','$img','$imgID', '$caption', '$likes','$link', '$time')";

	   	$addInsta = $db->exec($query);
	   	return $addInsta;

	}

    /*public function updateLikes($imgID,$likes){

        $db = Database::getDB();

        $query = 'UPDATE instagram SET likes = "' . $imgID . '" WHERE img_id = "' . $imgID . '"';
        
        $updatedLikes = $db->exec($query);
        return $updatedLikes;

    }*/

}