<?php
/* Script to connect to the database
done as an include file to keep it slightly more secure and easier to maintain
than just dumping it in each file */

$servername = "localhost";  //sets servername

//inschool user
$username = "occbooking";

$password = "Tlevel25!";  //password for database useraccount

//inschool at home
$dbname = "occbooking";


//$dbname = "membss";  //database name to connect to

try {  //attempt this block of code, catching an error
    $conn = new PDO("mysql:host=$servername;port=3306;dbname=$dbname", $username, $password);  // creates a PDO connection to the database
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //sets error modes
} catch(PDOException $e) {  //catch statement if it fails
    echo "Connection failed: " . $e->getMessage();  // outputs the error
}

?>