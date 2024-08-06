<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'sql107.infinityfree.com');
define('DB_USERNAME', 'if0_37035985');
define('DB_PASSWORD', 'XImK9IB7H9LE');
define('DB_NAME', 'if0_37035985_teknisa');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>