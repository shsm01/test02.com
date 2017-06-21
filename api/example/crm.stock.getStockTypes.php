<?php
//описание и документация по API INTRUM http://www.intrumnet.com/api/


	require_once __DIR__ . DIRECTORY_SEPARATOR. 'usage.php'; //настройте данный конфигурационный файл
	
	
	
	/*
	 * Вывод списка продуктов c фильтром по цене, первые 100 штук
	 */

	// цена от 2000
	//$value = '>= 2000';
	// цена до 3000
	//$value = '<= 3000';
	// цена между 2000 и 3000
	$value = '2000 & 3000';
	 
// 	return $api->getStockByFilter(
	$found = $api->getStockTypes();

        unset($found['status']);
//        var_dump ($found);

foreach ( $found as $item )
{
   $found_first[] = $item;
//   var_dump($item[]);
/*
   foreach ($found_first as $item_01) {
     var_dump($item_01);
   }
*/
}

foreach ( $found_first as $item ) {
//   var_dump($key);
//   var_dump($item);
   foreach ( $item as $item_1) {
       $item_2[$item_1['id']] = $item_1['name'];
//       var_dump($item_1['name']);
//       var_dump($item_1['groups']);
   }

}

// var_dump ($found['data']['2']['id']);
// var_dump ($found_first[0][0]);
var_dump ($item_2);

// $found = $api->getStockCategory();
//        var_dump ($found['data']);

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

echo count($found_first_06)."<br>";


// for ($index = 0; $index < count($found_first_06); $index++){
/*
for ($index = 170; $index < 180; $index++){
   foreach ($found_first_06[$index] as $key => $value){
     $found_first_07[$key] = $value;
   }
}
*/


/*
foreach ( $found_first_03 as $key => $value ) {
   $value;
//    echo $key." ";
//    var_dump ($value);
}
        var_dump ($found_first_03);

        var_dump ($found_first_04);

        var_dump ($found_first_05);
*/
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
    echo $index." Элемент 'id' в массиве НЕТ!!!.<br>";
   }
}

//        var_dump ($found_first_06[200]);
   asort($found_first_07);
   var_dump ($found_first_07);
   var_dump ($found_first_07[800]);

/*
$var_prt = print_r($found_first_07, true);
echo $var_prt;
*/


//        var_dump ($found_first_04[0]['groups'][0]['id']);

        var_dump ($found_first_02[0][1]['groups'][1]['id']);
        var_dump ($found_first_02[0][1]['groups'][1]['name']);
/*
        var_dump ($found_first_01[0][1]['fields'][481]['id']);
        var_dump ($found_first_01[0][1]['fields'][481]['name']);
        var_dump ($found_first_01[0][1]['fields'][481]['variants']);
*/
//        var_dump ($found_first_01[1][1]['fields']);

//        var_dump ($found_first_01[1][1]['groups'][1]['id']); 
//        var_dump ($found_first_01[1][1]['groups'][1]['name']);

?>