<?

echo "TimeZone: ".date_default_timezone_get ()."<br>";
echo "Сегодня: ".date("H:i:s d-M-Y")."<br>";
echo "Год: ".date("Y")."<br>";
echo "DIR_SEP: ".DIRECTORY_SEPARATOR;

phpinfo();

phpinfo(INFO_MODULES);

?>