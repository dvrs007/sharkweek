<?php

include 'views/header.php';
require 'model/db.php';

//get vine posts
$query = 'SELECT * FROM vine ORDER BY reg_date DESC';
//$db = Database::getDB();
$vineposts = $db->query($query);
//fetch associative arrays from the data so we can reference column names in the foreach loop
$vineposts->setFetchMode(PDO::FETCH_ASSOC);

//get twitter posts
$query = 'SELECT  DISTINCT * FROM twitter ORDER BY dateposted DESC';
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
        <h2>Vine</h2>
        <?php
        foreach ($vineposts as $p) {
            echo $p['username'] . "<br />";
            echo $p['video'] . "<br />";
        }
        ?>
    </div>
    <div class="medium-4 columns">
        <h2>Twitter</h2>
        <?php
        foreach ($twitterposts as $p) {
            echo '<img src="' . $p['avatar'] . '" alt="profile pic from "' . $p['username'] . 'title="avatar" />';
            echo ' '.$p['username'] . " | <i>" . $p['acctname'] . '</i><br/>';
            echo '# ' . $p['hashtags'].'<br/>';
            echo '<strong>'.$p['txtcontent'] . '</strong><br/>';

            if ($p['mediacontent'] != null || $p['mediacontent'] != '') {
                echo '<div style="width:40%;"><a href="'.$p['mediacontent'].'" target="_blank"><img src="' . $p['mediacontent'] . '" alt="media_photo" title="media_photo"/></a></div>';
            }
            if ($p['link'] != null || $p['link'] != '') {
                echo '<a href="' . $p['link'] . '" target="_blank">Click for the actual post</a><br/>';
            }
            echo 'Posted at: ' . $p['dateposted'] . '<br/><hr/>';
        }
            ?>
        </div>
        <div class="medium-4 columns">
            <h2>Instagram</h2>
            <?php
            foreach ($instaposts as $p) {
                echo '<div>' . $p['user'] . '</div>';
                echo '<img src="' . $p['img'] . '" alt="Image from ' . $p['user'] . '">';
            }
            ?>
    </div>
</div>
<?php 
    include 'views/footer.php';
    ?>