<?php

require 'model/database.php';

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'getposts';
}

if ($action == 'getposts'){

	$db = Database::getDB();

	//get vine posts
	$query = 'SELECT * FROM vine ORDER BY reg_date DESC LIMIT 10';
	$vineposts = $db->query($query);
	$vineposts->setFetchMode(PDO::FETCH_ASSOC);

	//get twitter posts
	$query = 'SELECT  DISTINCT * FROM twitter ORDER BY dateposted DESC LIMIT 20';
	$twitterposts = $db->query($query);
	$twitterposts->setFetchMode(PDO::FETCH_ASSOC);

	//get instagram posts
	$query = 'SELECT * FROM instagram ORDER BY created_time DESC LIMIT 20';
	$instaposts = $db->query($query);
	$instaposts->setFetchMode(PDO::FETCH_ASSOC);

	include 'results.php';

}
