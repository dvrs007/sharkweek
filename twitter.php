<?php

require 'twitter_credentials.php';
require 'twitteroauth-master/autoload.php';  //this is inside of downloaded folder	

require 'model/twitterClass.php';

//https://twitteroauth.com/
use Abraham\TwitterOAuth\TwitterOAuth;   //abrahamclass/library/object

$connection = new TwitterOAuth(
        CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);

$verify = $connection->get('account/verify_credentials');
//get method request ....json converted to array
//echo '<pre>';
//print_r( $verify);
//echo '</pre>';

$parameters = array(
    'q' => '#sharkweek',
    //'q' => '#webdevforhire',
    'count' => 20);

$results = $connection->get('search/tweets', $parameters);
//1st arg: api call,  2nd arg:pass those in as an array

/*
  echo '<pre>';
  print_r($results);
  echo '</pre>';
 */

foreach ($results->statuses as $value) {
//this was not working with $statuses->results June6
    $hashtags = array();
    $tags=array();
    $hashtags = $value->entities->hashtags;
    $n = count($hashtags);

    for ($i = 0; $i < $n; $i++) {
        //echo ' [' . ($i + 1) . '] ' . $hashtags[$i]->text;
        $tags[]= ' [' . ($i + 1) . '] ' . $hashtags[$i]->text;
    }
    
    //echo '<pre>';
    //print_r($tags);
    //echo '</pre>';
    //echo implode("" , $tags);
    
  
      $twitterClass = new Twitter();

      $twitterClass->setUsername($value->user->name);
      $twitterClass->setAccountname($value->user->screen_name);
      $twitterClass->setAvatar($value->user->profile_image_url_https);
      $twitterClass->setHashtags(implode("" , $tags));
      $twitterClass->setTxtContent($value->text);
      $twitterClass->setMediaContent($value->entities->media[0]->media_url_https);
      $twitterClass->setLink($value->entities->urls[0]->expanded_url);
      $twitterClass->setDateposted(date("Y-m-d h:i:s A",strtotime($value->created_at)));
      $twitterClass->setPostingID($value->id_str);

      $twitterClass->insertTwitter();
}
?>