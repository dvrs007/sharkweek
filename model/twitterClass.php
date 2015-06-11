<?php

Class Twitter {

    private $username, $accountname, $avatar, $hashtags, $txtcontent, $mediacontent, $link, $dateposted, $timestamp, $posting_id;

    public function __construct() {}

    /*
      public function __construct($user,$acct, $avatar, $hashtags, $txt, $media, $link, $date){
      $this->username=$user;
      $this->accountname = $acct;
      $this->avatar= $avatar;
      $this->hashtags=$hashtags;
      $this->txtcontent = $txt;
      $this->mediacontent = $media;
      $this->link=$link;
      $this->dateposted = $date;
      } */

    public function getUsername() {
        //read the category id from the table
        return $this->username;
    }

    public function setUsername($value) {
        //write the category id for the $value
        $this->username = $value;
    }

    public function getAccountname() {
        //read the category name from the table
        return $this->accountname;
    }

    public function setAccountname($value) {
        //write the category name for the $value
        $this->accountname = $value;
    }

    public function getAvatar() {
        return $this->avatar;
    }

    public function setAvatar($value) {
        $this->avatar = $value;
    }

    public function getHashtags() {
        return $this->hashtags;
    }

    public function setHashtags($value) {
        $this->hashtags = $value;
    }

    public function getTxtContent() {
        //read the category name from the table
        return $this->txtcontent;
    }

    public function setTxtContent($value) {
        //write the category name for the $value
        $this->txtcontent = $value;
    }

    public function getMediaContent() {
        //read the category name from the table
        return $this->mediacontent;
    }

    public function setMediaContent($value) {
        //write the category name for the $value
        $this->mediacontent = $value;
    }

    public function getLink() {
        //read the category name from the table
        return $this->link;
    }

    public function setLink($value) {
        //write the category name for the $value
        $this->link = $value;
    }

    public function getDateposted() {
        //read the category name from the table
        return $this->dateposted;
    }

    public function setDateposted($value) {
        //write the category name for the $value
        $this->dateposted = $value;
    }
    
    public function getPostingID(){
        return $this->posting_id;
    }
    
    public function setPostingID($value){
        $this->posting_id=$value;
    }

    public function insertTwitter() {
        $db = Database::getDB();

        $username = $this->getUsername();
        $accountname = $this->getAccountname();
        $avatar = $this->getAvatar();
        $hashtags= $this->getHashtags();
        $txtcontent = $this->getTxtContent();
        $mediacontent = $this->getMediaContent();
        $link = $this->getLink();
        $dateposted = $this->getDateposted();
        $postingID = $this->getPostingID();

        //the following query won't insert a duplicate posting , recognized by posting_id(UNIQUE)
        $query = "INSERT IGNORE INTO twitter
                 (username, acctname, avatar, hashtags, txtcontent, mediacontent, link, dateposted, posting_id)
             VALUES
                 ('$username', '$accountname','$avatar','$hashtags', '$txtcontent', '$mediacontent', '$link', '$dateposted','$postingID')";
       
        $twitter_add = $db->exec($query);
        return $twitter_add;
    }

}

?>
