
<!-- <head> <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> </head> -->

<?php
header('Content-Type: text/html; charset=utf-8');

echo "Привет!"."<br>";

$mysqli = new mysqli("localhost", "kolizeyrealty", "1234567", "kolizeyrealty");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

/*
$sql = "SET NAMES utf8";
$res = $mysqli->query($sql); 

$sql = "SET collation_connection = 'utf8_general_ci'";
$res = $mysqli->query($sql); 

*/

$sql = "SHOW SESSION VARIABLES LIKE 'character_set_connection'"; 
$res = $mysqli->query($sql); 

while ($row = $res->fetch_assoc()) {

echo " character_set_connection value = " . $row['Value']. "<br>";;
// var_dump($row);
}

$sql = "SHOW SESSION VARIABLES LIKE 'collation_connection'";
$res = $mysqli->query($sql); 

while ($row = $res->fetch_assoc()) {

echo " collation_connection value = " . $row['Value']. "<br>";;
// var_dump($row);
}

$res = $mysqli->query("SELECT * FROM article ORDER BY id");

while ($row = $res->fetch_assoc()) {
    echo " id = " . $row['id'] . " body = ". $row['body']. "<br>";
}

$sql = "SHOW CREATE TABLE article_type";
$res = $mysqli->query($sql);

while ($row = $res->fetch_assoc()) {

echo " Create table = " . $row['Create Table']. "<br>";;
// var_dump($row);
}


?>