<?php

Class Twitter {

    private $username, $accountname, $avatar, $hashtags, $txtcontent, $mediacontent, $link, $dateposted, $timestamp, $posting_id;

    public function __construct() {}

    public function getUsername() {

        return $this->username;
    }

    public function setUsername($value) {

        $this->username = $value;
    }

    public function getAccountname() {

        return $this->accountname;
    }

    public function setAccountname($value) {

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

        return $this->txtcontent;
    }

    public function setTxtContent($value) {

        $this->txtcontent = $value;
    }

    public function getMediaContent() {

        return $this->mediacontent;
    }

    public function setMediaContent($value) {

        $this->mediacontent = $value;
    }

    public function getLink() {

        return $this->link;
    }

    public function setLink($value) {

        $this->link = $value;
    }

    public function getDateposted() {

        return $this->dateposted;
    }

    public function setDateposted($value) {

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

        $query = "INSERT IGNORE INTO twitter
                 (username, acctname, avatar, hashtags, txtcontent, mediacontent, link, dateposted, posting_id)
             VALUES
                 ('$username', '$accountname','$avatar','$hashtags', '$txtcontent', '$mediacontent', '$link', '$dateposted','$postingID')";
       
        $twitter_add = $db->exec($query);
        return $twitter_add;
    }

}

?>
