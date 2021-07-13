<?php
/*
// mysql_connect("database-host", "username", "password")
$conn = mysql_connect("localhost","root","root") 
			or die("cannot connected");

// mysql_select_db("database-name", "connection-link-identifier")
@mysql_select_db("test",$conn);
*/

/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */

$databaseHost = 'localhost';
$databaseName = 'potensi_tsunami';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

// function myaddslashes($string){
// 	$a=str_replace("'","^",$string);
// 	return $a;
// }

// function mystripslashes($string){
// 	$a=str_replace("^","'",$string);
// 	return $a;
// }

// function mystripslashesjs($string){
// 	$a=str_replace("^"," ",$string);
// 	return $a;
// }

// function replacemi($string){

// return str_replace("mi","mill", $string);
// }

// function replacemins($string){
 
// return str_replace("mins","menit", $string);
// }
function curl_get_contents($url)
{
$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
$data = curl_exec($ch);
curl_close($ch);
return $data;
}
?>
