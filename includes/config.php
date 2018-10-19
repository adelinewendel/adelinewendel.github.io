<?php

ob_start();
session_start();

// db properties
define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DBNAME','cms');

// make a connection to mysql here
$conn = mysqli_connect('localhost', 'root', '', 'cms');
if(!$conn){
	die( "Sorry! There seems to be a problem connecting to our database.");
}


// define site path
define('DIR','index.php');

// define admin site path
define('DIRADMIN','admin/index.php');

// define site title for top of the browser
define('SITETITLE','Nutritie&Alimentatie');

//define include checker
define('included', 1);

include('functions.php');
?>
