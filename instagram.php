<?php

//require 'model/database.php';
require 'model/instaClass.php';
require 'insta_credentials.php';
require 'Instagram-PHP-API-master/src/Instagram.php';

use MetzWeb\Instagram\Instagram;

$instagram = new Instagram( CLIENT_ID );

$search = $instagram->getTagMedia( 'sharkweek' );

echo '<h1>-----------------INSTAGRAM starts----------------</h1>';
echo '<pre>';
print_r($search);
echo '</pre>';
echo '<h1>------------------INSTAGRAM ends----------------</h1>';

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
