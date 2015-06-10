<?php
	require 'twitter_credentials.php';
	require 'twitteroauth-master/autoload.php';  //this is inside of downloaded folder
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
	
	
	echo '<pre>';
	print_r( $results);
	echo '</pre>';
		
	
	foreach($results->statuses as $value)
	//this was not working with $statuses->results June6
{
	echo '<div>
	<h2>'. $value->user->name . ' AS screen name: ' . $value->user->screen_name .'</h2>
	<img src="' . $value->user->profile_image_url_https .'"/>	<br/>';	
	//Profile: ' .//$value->user->description . ' <br/>
	//Created at: './/$value->user->created_at. '<br/>	
	echo 'Content: '. $value->text .'<br/>
	Hash Tags: ' . $value->entities->hashtags->text . '<br/>
	Media: <img src="' . $value->entities->media->media_url_https . '"/><br/>
	Posted at: ' .$value->created_at . '<br/> 
	Link: <a href="'. $value->entities->urls->display_url . '" target="_blank">Click for the actual post</a>' .
	'<br/><hr/><br/>
	</div>';
	
}

?>