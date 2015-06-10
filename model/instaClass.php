<?php

Class Insta {
    
    private $user,$img,$fname;

    public function __construct(){}

    public function getUser(){   
       //read the category id from the table
        return $this->user;
    }
    
    public function setUser($value){
        //write the category id for the $value
        $this->user=$value;
    }

    public function getImg(){   
       //read the category id from the table
        return $this->img;
    }
    
    public function setImg($value){
        //write the category id for the $value
        $this->img=$value;
    }

    public function getFullName(){   
       //read the category id from the table
        return $this->fname;
    }
    
    public function setFullName($value){
        //write the category id for the $value
        $this->fname=$value;
    }





}