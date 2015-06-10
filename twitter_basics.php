<?php
	require 'twitter_credentials.php';
	require 'twitteroauth-master/autoload.php';  //this is inside of downloaded folder
	require 'model/twitterDB.php';
	require 'model/twitterClass.php';
	//https://twitteroauth.com/
	use Abraham\TwitterOAuth\TwitterOAuth;   //abrahamclass/library/object
	
	$connection = new TwitterOAuth(
	CONSUMER_KEY,
	CONSUMER_SECRET,
	ACCESS_TOKEN,
	ACCESS_TOKEN_SECRET);
	
	$verify= $connection->get( 'account/verify_credentials');
	//get method request ....json converted to array
	
	
	//echo '<pre>';
	//print_r( $verify);
	//echo '</pre>';
	
	$parameters =array(
		//'q' => 'twitterapi'
		'q' => '#gold',
		//'q' => '#webdevforhire',
		'count'=> 10);
	
	$results = $connection -> get('search/tweets', $parameters ); 
	//1st arg: api call,  2nd arg:pass those in as an array
	
	
	// echo '<pre>';
	// print_r( $results);
	// echo '</pre>';


		
	
	foreach($results->statuses as $value)
	//this was not working with $statuses->results June6
{

	$twitterClass = new Twitter();

	$twitterClass->setUsername($value->user->name);
	$twitterClass->setAccountname($value->user->screen_name);
	$twitterClass->setTxtContent($value->text);
	$twitterClass->setMediaContent($value->entities->media->media_url_https);
	$twitterClass->setLink($value->entities->urls->display_url);
	$twitterClass->setDateposted($value->created_at);

	$twitterClass->insertTwitter();

	// echo '<div>
	// <h2>'. $value->user->name . ' AS screen name: ' . $value->user->screen_name .'</h2>
	// <img src="' . $value->user->profile_image_url_https .'"/>	<br/>
	// Content: '. $value->text .'<br/>
	// Hash Tags: ' . $value->entities->hashtags->text . '<br/>
	// Media: <img src="' . $value->entities->media->media_url_https . '"/><br/>
	// Posted at: ' .$value->created_at . '<br/> 
	// Link: <a href="'. $value->entities->urls->display_url . '" target="_blank">Click for the actual post</a>' .
	// '<br/><hr/><br/>
	// </div>';
	
}

?>