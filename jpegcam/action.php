<?php
session_start();
$username=$_SESSION['username'];
$filename = $username . '.jpg';
$_SESSION['filename']=$filename;
$result = file_put_contents( '../upload/'.$filename, file_get_contents('php://input') );
if (!$result) {
	print "ERROR: Failed to write data to $filename, check permissions\n";
	exit();
}


//$url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/pics/' . $filename;
//echo "$url\n";




?>
