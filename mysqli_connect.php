<?php 
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_DATABASE', 'shopping-lists');
define('DB_PASSWORD', '');

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE) or die ("Cannot connect to the database");
/*if($dbc){

	echo "Connected to the database";
}*/


