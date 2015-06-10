<?php
require 'model/db.php';
include 'views/header.php';

//get vine posts
$query = 'SELECT * FROM vine';
        $vineposts = $db->query($query);
        //fetch associative arrays from the data so we can reference column names in the foreach loop
        $vineposts->setFetchMode(PDO::FETCH_ASSOC);
        
//get twitter posts
$query = 'SELECT * FROM twitter';
        $twitterposts = $db->query($query);
        //fetch associative arrays from the data so we can reference column names in the foreach loop
        $twitterposts->setFetchMode(PDO::FETCH_ASSOC);

//get instagram posts
$query = 'SELECT * FROM instagram';
        $instaposts = $db->query($query);
        //fetch associative arrays from the data so we can reference column names in the foreach loop
        $instaposts->setFetchMode(PDO::FETCH_ASSOC);

?>

<div class="row">
        <div class="medium-4 columns">
            <h2>Twitter</h2>
            <?php 
                foreach($vineposts as $p){
                echo $p['username'] . "<br>" . $p['video'];
                }
            ?>
        </div>
        <div class="medium-4 columns">
            <h2>Vine</h2>
            <?php 
                foreach($twitterposts as $p){
                echo $p['username'] . "<br>" . $p['acctname'];
                }
            ?>
        </div>
        <div class="medium-4 columns">
            <h2>Instagram</h2>
            <?php foreach($instaposts as $p){
            	echo $p['user'];
            	echo '<img src="'.$p['img'].'" alt="Image from '.$p['user'].'">';
            }
            ?>
        </div>
</div>



<?php 

include 'views/footer.php';

?>



