<?php
require 'model/vine_Class.php';
//require 'model/database.php';


function pre( $data)
{ //function for debugging

	echo '<pre>';
	print_r( $data );
	echo '</pre>';
	
}

function file_get_contents_curl($url) {    
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    $data = curl_exec($ch);

    curl_close($ch);
    return $data;
}


print_r( file('https://api.vineapp.com/timelines/tags/sharkweek'));



$search = file_get_contents_curl('https://api.vineapp.com/timelines/tags/sharkweek');

//convert to json and display as an array
$search = json_decode($search, true);

echo '<h1>-----------------VINE starts----------------</h1>';
pre($search);
echo '<h1>-----------------VINE ends----------------</h1>';



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
