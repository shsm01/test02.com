
<!-- <head> <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> </head> -->

<?php
// header('Content-Type: text/html; charset=utf-8');

echo "Привет!"."<br>";

$dblocation = "kz.mysql";
$dbname = "kz_kolizeyBD";
$dbuser = "kz_mysql";
$dbpasswd = "jzWqMQ+5";
$dbpfx = "keys";

$mysqli = new mysqli($dblocation, $dbuser, $dbpasswd, $dbname);

if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
} else {
    echo "Подключились к DB MySQL: ".$dbname;
}

system("mysqldump -u kz_mysql -pjzWqMQ+5 -h kz.mysql kz_kolizeyBD --single-transaction --quick --databases > kz_kolizeyBD_09_06_2017.dump01.sql");

?>