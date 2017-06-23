
<!-- <head> <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> </head> -->

<?php
// header('Content-Type: text/html; charset=utf-8');

echo "Привет!"."<br>";

$dblocation = "localhost";
$dbname = "u0159116_default";
$dbuser = "u0159116_default";
$dbpasswd = "10gOCf2!";

$mysqli = new mysqli($dblocation, $dbuser, $dbpasswd, $dbname);

if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
} else {
    echo "Подключились к DB MySQL: ".$dbname;
}

system("mysqldump -u u0159116_default -p10gOCf2! -h localhost u0159116_default --single-transaction --quick --databases > shikhovo_ru_23_06_2017.dump.sql");

?>