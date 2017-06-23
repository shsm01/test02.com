<?php
//описание и документация по API INTRUM http://www.intrumnet.com/api/


	require_once __DIR__ . DIRECTORY_SEPARATOR. 'usage.php'; //настройте данный конфигурационный файл

$found = $api->getStockTypes();

// Убираем статус запроса
unset($found['status']);

foreach ( $found as $item )
{
   $found_first[] = $item;
}

foreach ( $found_first as $item ) {
   foreach ( $item as $item_1) {
       $item_2[$item_1['id']] = $item_1['name'];
   }
}

	

$found = $api->getStockCategory();
	
 echo "<h3>"."Запрос доступных категорий продуктов"."</h3>";
 echo "Количество записей: ". count($found[ 'data' ])."<br><br>";

/*	
for ($index = 0; $index < count($found[ 'data' ]); $index++){
   foreach ($found[ 'data' ][$index] as $value){
     $found_first_01[] = $value;
   }
}
*/

foreach ($found[ 'data' ] as $key => $value) 
{
//    echo $key . " " .  $value . " ";
    foreach ($value as $key1 => $value1) {
//       echo $item_2[$key];
//       echo $key . " " .  $value;
//       echo $value1['id']."<br>";
     if ($value1['name'] != '') {
         $found_first_01[$value1['id']] = $item_2[$key]." -> ".$value1['name'];
    }
//       var_dump($value1);
    }
}
ksort ($found_first_01);
// var_dump ($found[ 'data' ]);
// var_dump ($found);
foreach ($found_first_01 as $key => $value) {
  echo "Ключ: " . $key . " Наименование типа и категории продуктов: ". $value."<br>";
}
// var_dump ($found_first_01);


?>