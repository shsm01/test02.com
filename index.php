<?

echo "TimeZone: ".date_default_timezone_get ()."<br>";
echo "Сегодня: ".date("H:i:s d-M-Y")."<br>";
echo "Год: ".date("Y")."<br>";
echo "DIR_SEP: ".DIRECTORY_SEPARATOR."<br>";
echo "Current DIR: ".__DIR__."<br>";
echo "Current FILE: ".__FILE__."<br>";
// echo getenv('DOCUMENT_ROOT')."<br>";

phpinfo();

// phpinfo(INFO_MODULES);

?>