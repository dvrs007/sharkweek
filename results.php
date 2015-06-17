<?php include 'views/header.php'; ?>

<div class="row">

    <div class="hashtag-title">
        <h1>#sharkweek</h1>
    </div>

    <div class="medium-4 small-4 columns">
        <div class="col-title vine-title" id="vine">
            <h2 id="vine_logo"><i class="fa fa-vine"></i></h2>
            <b class="notch" id="vine_notch"></b>
        </div>
    </div>
    <div class="medium-4 small-4 columns">
        <div class="col-title twitter-title" id="twitter">
            <h2 id="twitter_logo"><i class="fa fa-twitter"></i></h2>
            <b class="notch" id="twitter_notch"></b>
        </div>
    </div>
    <div class="medium-4 small-4 columns">
        <div class="col-title insta-title" id="insta">
            <h2 id="insta_logo"><i class="fa fa-instagram"></i></h2>
            <b class="notch" id="insta_notch"></b>
        </div>
    </div>
</div>

<div class="row">
    <div class="medium-4 columns">
        <div class="posts-list" id="vine_col">
            <?php
            /* --------------------------- *\
              Vine
            \* --------------------------- */

            foreach ($vineposts as $p) {
                echo '<div>' . $p['username'] . '</div>';
                echo '<div class="vine-container">' . $p['video'] . '</div><hr />';
            }
            ?>
        </div>
    </div><!-- end vine -->

    <div class="medium-4 smacolumns">
        <div class="posts-list" id="twitter_col">
            <?php
            /* --------------------------- *\
              Twitter
              \* --------------------------- */

            foreach ($twitterposts as $p) {
                echo '<img src="' . $p['avatar'] . '" alt="profile pic from "' . $p['username'] . 'title="avatar" />';
                echo ' <a href="http://twitter.com/' . $p['acctname'] . '" target="_blank">' . $p['username'] . " @ <i>" . $p['acctname'] . '</i></a><br/>';
                echo '# ' . $p['hashtags'] . '<br/>';
                echo '<strong>' . $p['txtcontent'] . '</strong><br/>';

                if ($p['mediacontent'] != null || $p['mediacontent'] != '') {
                    echo '<div style="width:40%;"><a href="' . $p['mediacontent'] . '" target="_blank"><img src="' . $p['mediacontent'] . '" alt="media_photo" title="media_photo"/></a></div>';
                }
                if ($p['link'] != null || $p['link'] != '') {
                    echo '<a href="' . $p['link'] . '" target="_blank">Click for the actual post</a><br/>';
                }

                $triggerOn = date('m/d/Y H:i:s', strtotime($p['dateposted'])); //in UTC/GMT
                $utc_tz = date_default_timezone_get(); //returns UTC/GMT

                $posted_date = new DateTime($triggerOn, new DateTimeZone($utc_tz));
                $posted_date->setTimeZone(new DateTimeZone('EDT')); //Eatern Time Zone-daylightsavings
                $triggerOn = $posted_date->format('D, M jS Y h:i:s A');

                echo 'Posted at: ' . $triggerOn . ' (EDT)'.'<br/><hr/>';

            }
            ?>
        </div>
    </div><!-- end twitter-->

    <div class="medium-4 columns">
        <div class="posts-list" id="insta_col">
            <?php
            /* --------------------------- *\
              Instagram
            \* --------------------------- */

            foreach ($instaposts as $p) {

                echo '<div class="insta-posts">';
                echo '<div class="insta-img"><a href="' . $p['link'] . '" target="_blank" alt="View Image"><img src="' . $p['img'] . '" alt="Image from ' . $p['user'] . '"></a></div>';


                if ($p['likes'] == 1) {
                    echo '<p><i class="fa fa-heart"></i> ' . $p['likes'] . ' Like</p>';
                } else {
                    echo '<p><i class="fa fa-heart"></i> ' . $p['likes'] . ' Likes</p>';
                }

                /* Time posted */

                $now = time();
                $posted = $p['created_time'];
                $diff = ($now - $posted);

                if ($diff <= 3599) {
                    echo date("i", $diff) . 'm'; //get minutes old
                } else if ($diff > 3600) {
                    echo floor((date("h", $diff) - 2)) . 'h'; //get hours old
                } else if ($diff > 86400) {
                    echo floor((date("d", $diff) - 2)) . 'd'; //get days old
                } 

                /* User profile */

                echo '<p>Posted by: <a href="http://instagram.com/' . $p['user'] . '/" target="_blank" alt="View Profile">' . $p['user'] . '</a></p>';

                /* Displaying hashtags */

                $str = $p['caption'];
                $str = str_replace("#", " #", $str);
                $caption = explode(" ", $str);

                foreach ($caption as $c) {
                    if (preg_match('/#\w+/', $c)) {
                        $tag = str_replace("#", "", $c);
                        echo '<a href="http://instagram.com/explore/tags/' . $tag . '/" target="_blank">' . $c . '</a> ';
                    }
                }

                echo '</div><hr />';
            }
            ?>
        </div>
    </div><!-- end instagram -->
</div>

<?php include 'views/footer.php'; ?>
