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
	$found = $api->getStockByFilter(
		array(
			// тип продукта
                  // Городская недвижимость
			'type' => 1, 
                  // Загородная недвижимость
//			'type' => 3, 
			// категория
//			'category' => 1,
			// фильтр по полю
			'fields' => array(
				array(
                                     'id'    =>  776,
				      'value' =>  'квартира вторичка'
                                )
			),
			// число записей
			'limit' => 100,
			// страница
			'page' => 1
		)
	);

// var_dump ($found[ 'data' ][ 'count' ]);
 echo "<h3>"."Городская недвижимость - Вторичный рынок"."</h3>";
 echo "Количество записей: ". $found[ 'data' ][ 'count' ]."<br><br>";

$found = $found[ 'data' ][ 'list' ];

foreach ( $found as $item )
{
// 	echo $item."<br>";
   $found_first[] = $item;
// var_dump ($item); 
}

foreach ( $found_first as $item )
{
// var_dump ($item); 
if ($item['parent'] == 3) $type_str = "Продажа";
else $type_str = "Аренда";

echo "id: ".$item['id']."<br>";
echo "Наименование продукта : ". $item['name'] ."<br>";
echo "Категория : ". $type_str ."<br>";
    foreach ( $item[ 'fields' ] as $field ) 
    {
/*
       if ( in_array( $field[ 'id' ], [ 470 ]))       $price = $field[ 'value' ];
       if ( ! $image AND $field[ 'type' ] == 'file' ) $image = $field[ 'value' ];
       if ( in_array( $field[ 'id' ], [ 855 ] ))      $price_unit = $field[ 'value' ];
       if ( in_array( $field[ 'id' ], [ 482 ] ))      $city = $field[ 'value' ];
       if ( in_array( $field[ 'id' ], [ 667 ] ))      $street = $field[ 'value' ];
       if ( in_array( $field[ 'id' ], [ 447 ] ))      $square = $field[ 'value' ];
       if ( in_array( $field[ 'id' ], [ 624 ] ))      $description = $field[ 'value' ];
*/
       if ( in_array( $field[ 'id' ], [ 470 ]))       echo "Цена: ".$field[ 'value' ]."<br>";
       if ( ! $image AND $field[ 'type' ] == 'file' ) echo "Изображение: ".$image = $field[ 'value' ]."<br>";
       if ( in_array( $field[ 'id' ], [ 855 ] ))      echo "Цена за кв.м.: ".$field[ 'value' ]."<br>";
       if ( in_array( $field[ 'id' ], [ 482 ] ))      echo "Город: ".$field[ 'value' ]."<br>";
       if ( in_array( $field[ 'id' ], [ 667 ] ))      echo "Улица: ".$field[ 'value' ]."<br>";
       if ( in_array( $field[ 'id' ], [ 447 ] ))      echo "Площадь: ".$field[ 'value' ]."<br>";
       if ( in_array( $field[ 'id' ], [ 624 ] ))      echo "Описание: ".$field[ 'value' ]."<br>";
    }
echo "<br><br>";
       
}

?>