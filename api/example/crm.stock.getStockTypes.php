<?php
//описание и документация по API INTRUM http://www.intrumnet.com/api/


	require_once __DIR__ . DIRECTORY_SEPARATOR. 'usage.php'; //настройте данный конфигурационный файл
	
	
	
$found = $api->getStockTypes();

// Убираем статус запроса
unset($found['status']);
//        var_dump ($found);

foreach ( $found as $item )
{
   $found_first[] = $item;
}

foreach ( $found_first as $item ) {
   foreach ( $item as $item_1) {
       $item_2[$item_1['id']] = $item_1['name'];
   }
}

echo "<h3>"."Запрос всех доступных типов продуктов"."</h3>";
echo "Количество записей: ". count($item_2)."<br><br>";

ksort($item_2);

foreach($item_2 as $key => $value )
   {
     echo $key." => ".$value."<br>";
   } 

?>