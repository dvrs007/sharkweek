<?php

require 'model/instaClass.php';
//require 'model/db.php';

	/*function pre($code){
		echo '<pre>';
			print_r( $code );
		echo '</pre>';
	}*/
 
define( 'CLIENT_ID', 'ede51ae1fd5e43dca130ac6f239eb589' );
define( 'CLIENT_SECRET', '2894f8ff8dc84eca8ceaf3d222b6cdef' );

require 'Instagram-PHP-API-master/src/Instagram.php';

use MetzWeb\Instagram\Instagram;

$instagram = new Instagram( CLIENT_ID );

// $popular = $instagram->getPopularMedia();

$search = $instagram->getTagMedia( 'sharkweek', 10 );

//pre( $search );

foreach ( $search->data as $key => $value ) {
	
	/*echo '<pre>';
	print_r($value);
	echo '</pre>';*/

	$instagram = new Insta();

	$instagram->setUser($value->user->username);
	$instagram->setImg($value->images->thumbnail->url);
	$instagram->setFullName($value->user->full_name);

	$instagram->insertInsta();

}