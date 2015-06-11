<?php

Class VineClass{
    
    private $username,$video;
    
    public function __construct(){}
    
 
    public function getUsername(){   
       //read the category id from the table
        return $this->username;
    }
    
    public function setUsername($value){
        //write the category id for the $value
        $this->username=$value;
    }
    
    public function getVideo(){
        //read the category name from the table
        return $this->video;
    }
    
    public function setVideo($value){
        //write the category name for the $value
        $this->video=$value;
    }

    public function insertVine(){
        require 'db.php';

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