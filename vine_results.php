<?php
require 'model/vine_Class.php';
//require 'model/database.php';


function pre( $data)
{ //function for debugging

	echo '<pre>';
	print_r( $data );
	echo '</pre>';
	
}

$search = file_get_contents('https://api.vineapp.com/timelines/tags/sharkweek');

//convert to json and display as an array
$search = json_decode($search, true);

pre($search);

foreach($search['data']['records'] as $key => $value)
{
   $embed = file_get_contents('https://vine.co/oembed.json?url='.urlencode($value['shareUrl']));

    $embed = json_decode($embed,true);
    
    
        //new instance of vine class
        $vine = new VineClass;
        //set the new properties of the vine object
	$vine->setUsername($value['username']);
	$vine->setVideo($embed['html']);
        //insert results into database
        $vine->insertVine();
        
        //var_dump($vine);
    
}


?>
