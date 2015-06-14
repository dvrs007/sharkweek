<?php include 'views/header.php'; ?>

<div class="row">

    <div class="hashtag-title">
        <h1>#sharkweek</h1>
    </div>

    <div class="medium-4 small-4 columns">
        <div class="col-title vine-title">
            <h2><i class="fa fa-vine"></i></h2>
            <b class="notch"></b>
        </div>
    </div>
    <div class="medium-4 small-4 columns">
        <div class="col-title twitter-title">
            <h2><i class="fa fa-twitter"></i></h2>
            <b class="notch"></b>
        </div>
    </div>
    <div class="medium-4 small-4 columns">
        <div class="col-title insta-title">
            <h2><i class="fa fa-instagram"></i></h2>
            <b class="notch"></b>
        </div>
    </div>
</div>

<div class="row">
    <div class="medium-4 columns">
        <div class="posts">
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
        <div class="posts">
        <?php

            /* --------------------------- *\
                        Twitter
            \* --------------------------- */

            foreach ($twitterposts as $p) 
            {
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
    </div><!-- end twitter-->

    <div class="medium-4 columns">
        <div class="posts">
        <?php

            /* --------------------------- *\
                        Instagram
            \* --------------------------- */

            foreach ($instaposts as $p) {
                echo '<div class="insta-img"><a href="' . $p['link'] . '" target="_blank" alt="View Image"><img src="' . $p['img'] . '" alt="Image from ' . $p['user'] . '"></a></div>';
                echo '<div class="insta-details">';
                echo '<p><i class="fa fa-heart"></i> ' . $p['likes'] . '</p>';
                echo '<a href="http://instagram.com/' . $p['user'] . '/" target="_blank" alt="View Profile">' . $p['user'] . '</a></p>';
                echo '</div>';
                echo '<hr />';
            }
        ?>
        </div>
    </div><!-- end instagram -->
</div>

<?php include 'views/footer.php'; ?>