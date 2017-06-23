
<!-- <head> <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> </head> -->

<?php
// header('Content-Type: text/html; charset=utf-8');

echo "Привет!"."<br>";

$dblocation = "localhost";
$dbname = "shikhovo";
$dbuser = "shikhovo";
$dbpasswd = "N1q4J5h8";

$mysqli = new mysqli($dblocation, $dbuser, $dbpasswd, $dbname);

if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
} else {
    echo "Подключились к DB MySQL: ".$dbname;
}

system("mysqldump -u shikhovo -pN1q4J5h8 -h localhost shikhovo --single-transaction --quick --databases > shikhovo_rsrf_ru_22_06_2017.dump.sql");

?>