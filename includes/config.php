<?php 

$host = "localhost";
$user = "root";
$password = "";
$db = "test";
$appname = "Testing App";

define("DB_NAME",$db);
//echo DB_NAME;
$dns = "mysql:host=".$host.";dbname=".DB_NAME.";charset=utf8";

$pdo = new PDO($dns,$user,$password);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$pdo->setAttribute(PDO:MYSQL_ATTR_USE_BUFFERED_QUERY, true); //this makes mysql connection faster.
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
define("APP_NAME", $appname);

?>