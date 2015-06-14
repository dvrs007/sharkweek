<?php

require 'model/database.php';
require 'model/instaClass.php';
 
define( 'CLIENT_ID', 'ede51ae1fd5e43dca130ac6f239eb589' );
define( 'CLIENT_SECRET', '2894f8ff8dc84eca8ceaf3d222b6cdef' );

require 'Instagram-PHP-API-master/src/Instagram.php';

use MetzWeb\Instagram\Instagram;

$instagram = new Instagram( CLIENT_ID );

$search = $instagram->getTagMedia( 'sharkweek' );


echo '<pre>';
print_r($search);
echo '</pre>';


foreach ( $search->data as $key => $value ) {

	$instagram = new Insta();

	$instagram->setUser($value->user->username);
	$instagram->setFullName($value->user->full_name);
	$instagram->setImg($value->images->thumbnail->url);
	$instagram->setImgID($value->id);
	$instagram->setCaption($value->caption->text);
	$instagram->setLikes($value->likes->count);
	$instagram->setLink($value->link);
	$instagram->setCreatedTime($value->created_time);

	//var_dump($instagram);
	$instagram->insertInsta();

}