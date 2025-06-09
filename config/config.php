<?php


//Host 
define('HOST', 'localhost');
//Database name
define('DB_NAME', 'ForumDB');
//Database user
define('DB_USER', 'root');
//Database password
define('DB_PASSWORD', '');


//connection to the database
try {
    $conn = new PDO("mysql:host=".HOST.";dbname=".DB_NAME."" , DB_USER, DB_PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// if (!$conn) {
//     die("Connection failed: " . $conn->errorInfo());
// } else {
//     echo "Connected successfully to the database.";
// }

} catch(PDOException $Exception) {
    echo $Exception->getMessage();
}



?>
