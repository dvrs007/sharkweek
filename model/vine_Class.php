<?php

Class VineClass{
    
    private $username,$video;
    
    public function __construct(){}
    
 
    public function getUsername(){   

        return $this->username;
    }
    
    public function setUsername($value){
        $this->username=$value;
    }
    
    public function getVideo(){

        return $this->video;
    }
    
    public function setVideo($value){

        $this->video=$value;
    }

    public function insertVine(){

        $db = Database::getDB();
        
        $username = $this->getUsername();
        $video = $this->getVideo();

        $query =
            "INSERT INTO vine
                 (username, video)
             VALUES
                 ('$username', '$video')";

        $vine_add = $db->exec($query);
        return $vine_add;
    }
}  
?>