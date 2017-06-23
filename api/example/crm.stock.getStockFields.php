<?php
//описание и документация по API INTRUM http://www.intrumnet.com/api/


	require_once __DIR__ . DIRECTORY_SEPARATOR. 'usage.php'; //настройте данный конфигурационный файл
	

$found = $api->getStockFields();
//         var_dump ($found['data']);

foreach ( $found as $item )
{
   $found_first_01[] = $item;
}
        unset($found_first_01[0]);
        sort($found_first_01);

//        var_dump ($found_first_01[0]);

foreach ( $found_first_01 as $item )
{
   $found_first_02[] = $item;
}

foreach ( $found_first_02 as $key => $value ) {
   $found_first_03[] = $value;
//    echo $key." ";
//    var_dump ($value);
}

for ($index = 0; $index < count($found_first_03); $index++){
   foreach ($found_first_03[$index] as $value){
     $found_first_04[] = $value;
   }
}

for ($index = 0; $index < count($found_first_04); $index++){
   foreach ($found_first_04[$index] as $value){
     $found_first_05[] = $value;
   }
}

for ($index = 0; $index < count($found_first_05); $index++){
   foreach ($found_first_05[$index] as $value){
     $found_first_06[] = $value;
   }
}

$count_add = 0;

for ($index = 0; $index < count($found_first_06); $index++){
   if (is_array($found_first_06[$index]) && (array_key_exists('id', $found_first_06[$index]))) {
//       echo "Массив содержит элемент 'id'.";
   $count_add++; 
   foreach ($found_first_06[$index] as $key => $value){
     if ($key == 'id') {
//        echo "key ".$key." = "."value ".$value." ".$found_first_06[$index]['id']." ".$found_first_06[$index]['name']."<br>";
        $found_first_07[$found_first_06[$index]['id']] = $found_first_06[$index]['name'];
     }
   }

   } else {
//    echo $index." Элемент 'id' в массиве НЕТ!!!.<br>";
   }
}

   ksort($found_first_07);

echo "<h3>"."Получение перечня и структуры дополнительных полей для типов продукта"."</h3>";
echo "Количество записей: ". count($found_first_07)."<br><br>";

   foreach($found_first_07 as $key => $value )
   {
     echo "Ключ ".$key." = "."Значение ".$value."<br>";
   } 
/*
   var_dump ($found_first_07);
   var_dump ($found_first_07[800]);
*/

/*
        var_dump ($found_first_02[0][1]['groups'][1]['id']);
        var_dump ($found_first_02[0][1]['groups'][1]['name']);
*/

?>