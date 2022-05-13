<?php 
// DB credentials.
define('DB_HOST','db4free.net');
define('DB_USER','apollomain');
define('DB_PASS','ApolloPlus1');
define('DB_NAME','apollo');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
