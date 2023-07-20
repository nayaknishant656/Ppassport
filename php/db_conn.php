<?php  
$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "test";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}
?>

<?php
    // define("DB_HOST", "localhost");
    // define("DB_USER", "id17456653_host");
    // define("DB_PASSWORD", "~V5x7MZX$l#{7v|J");
    // define("DB_DATABASE", "id17456653_photodow");
	// define("DB_PORT", "3306");
    // $db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE, DB_PORT);
	// if (!$db) {
	// 	echo "Connection failed!";
	// 	exit();
	// }
?>