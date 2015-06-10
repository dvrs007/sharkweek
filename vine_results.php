<?php
//VINE API

//anytime we want to know what's in a variable, display so it can be read easily
function pre($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

$search = file_get_contents('https://api.vineapp.com/timelines/tags/cute');

//convert to json and display as an array
$search = json_decode($search, true);

//pre($search);

foreach($search['data']['records'] as $key => $value)
{
    $embed = file_get_contents('https://vine.co/oembed.json?url='.urlencode($value['shareUrl']));

    $embed = json_decode($embed,true);
    
    echo '<div>
        <h2>'.$value['username'].'</h2>'
        .'<img src="'.$value['avatarUrl'].'" /><br />'
        .$embed['html']
        .'<br /><hr /><br />'
        .'</div>';
}

?>