<?php	
	$servername = "127.0.0.1";
	$username = "viajeroshubpal_admin";//"root";//viajeroshubpal_admin
	$password = "QUtv3A.G;j~Y";//QUtv3A.G;j~Y
	$dbname = "viajeroshubpal_DB";//"dbviajeros";//viajeroshubpal_DB	


	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
	   die("Connection failed: " . $conn->connect_error);
	}
?>


<?php
/////// Update your database login details here /////
$dbhost_name = "localhost"; // Your host name 
$database = "viajeroshubpal_DB";       // Your database name
$username = "viajeroshubpal_admin";            // Your login userid 
$password = "QUtv3A.G;j~Y";            // Your password 
//////// End of database details of your server //////

//////// Do not Edit below /////////
$connection = @mysqli_connect($dbhost_name, $username, $password, $database) ;

if (!$connection) {
	error_reporting(E_ALL ^ E_DEPRECATED);
	include('error/indexold.php');
    // echo "Error: Unable to connect to MySQL.<br>";
    // echo "<br>Debugging errno: " . mysqli_connect_errno();
    // echo "<br>Debugging error: " . mysqli_connect_error();
    exit;
}
?> 