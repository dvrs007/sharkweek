<?php

Class Twitter{
    
    private $username,$accountname,$txtcontent,$mediacontent, $link, $dateposted;
    
    public function __construct(){}
    
 
    public function getUsername(){   
       //read the category id from the table
        return $this->username;
    }
    
    public function setUsername($value){
        //write the category id for the $value
        $this->username=$value;
    }
    
    public function getAccountname(){
        //read the category name from the table
        return $this->accountname;
    }
    
    public function setAccountname($value){
        //write the category name for the $value
        $this->accountname=$value;
    }
    public function getTxtContent(){
        //read the category name from the table
        return $this->txtcontent;
    }
    
    public function setTxtContent($value){
        //write the category name for the $value
        $this->txtcontent=$value;
    }
    public function getMediaContent(){
        //read the category name from the table
        return $this->mediacontent;
    }
    
    public function setMediaContent($value){
        //write the category name for the $value
        $this->mediacontent=$value;
    }
    
    public function getLink(){
        //read the category name from the table
        return $this->link;
    }
    
    public function setLink($value){
        //write the category name for the $value
        $this->link=$value;
    }
    public function getDateposted(){
        //read the category name from the table
        return $this->dateposted;
    }
    
    public function setDateposted($value){
        //write the category name for the $value
        $this->dateposted=$value;
    }

    public function insertTwitter(){
        
    }
}  
?>