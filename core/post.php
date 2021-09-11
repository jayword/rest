<?php 
$con = mysqli_connect("localhost","root","","test");

//$doso = file_get_contents("https://www.fengfanghana.com:2083/cpsess5249969623/3rdparty/phpMyAdmin/db_structure.php?server=1&db=information_schema");
//var_dump($doso) . "<br><br>";

class Post{
	
	//db things
	private $conn;
	private $table = "products";
	
	
}

?>

<?php 

//$fili = file_get_contents("http://localhost/phpmyadmin/server_databases.php");
//var_dump($fili) . "<br><br> data";

$set = mysqli_query($con,"SHOW DATABASES");
$dbs = array();
while($db = mysqli_fetch_row($set)){
	$dbs[] = $db[0];
	echo implode('<br/>', $dbs);
}
?>