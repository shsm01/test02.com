<?php
//описание и документация по API INTRUM http://www.intrumnet.com/api/


	require_once __DIR__ . DIRECTORY_SEPARATOR. 'usage.php'; //настройте данный конфигурационный файл
	
$type_id = 2;	
	
	/*
	 * Вывод списка продуктов c фильтром по цене, первые 100 штук
	 */

	// цена от 2000
	//$value = '>= 2000';
	// цена до 3000
	//$value = '<= 3000';
	// цена между 2000 и 3000
	$value = '2000 & 3000';
	 
// $fields = $api->getStockFields();

// $fields = $fields[ 'data' ][ $type_id ][ 'fields' ];

	$found = $api->getStockByFilter(
		array(
			// тип продукта
                  // Городская недвижимость
//			'type' => 1, 
                  // Загородная недвижимость
			'type' => 3, 
			// категория
//			'category' => 1,
			// фильтр по полю
			'fields' => array(
				array(
					'id' => 814,
					'value' => 1
				)
			),
			// число записей
			'limit' => 100,
			// страница
			'page' => 1
		)
	);

// var_dump ($found[ 'data' ][ 'count' ]);
echo "<h3>"."Загородная недвижимость"."</h3>";
echo "Количество записей: ". $found[ 'data' ][ 'count' ]."<br><br>";

foreach ( $found[ 'data' ][ 'list' ] as $item )
{
if ($item['parent'] == 8) $type_str = "Продажа";
else $type_str = "Аренда";

echo "id продукта : ". $item['id'] ."<br>";
echo "Наименование продукта : ". $item['name'] ."<br>";
echo "Отметка о публикации продукта : ". $item['publish'] ."<br>";
echo "Категория : ". $type_str ."<br>";
// var_dump ($item);
// echo "<br><br>";
    foreach ( $item[ 'fields' ] as $field ) 
    {
     if ( in_array( $field[ 'id' ], [ 525 ]))       echo "Строение: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 526 ]))       echo "Площадь строения (кв.м.): ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 527 ]))       echo "Площадь участка (сот.): ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 528 ]))       echo "Цена: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 529 ]))       echo "Валюта: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 530 ]))       echo "Количество комнат: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 531 ]))       echo "Отапливаемый: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 532 ]))       echo "Водопровод (линия): ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 533 ]))       echo "Ремонт: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 534 ]))       echo "Канализация: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 535 ]))       echo "Электричество (линия): ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 536 ]))       echo "Гараж: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 537 ]))       echo "Год постройки/сдачи: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 538 ]))       echo "Материал стен: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 540 ]))       echo "Газ в доме: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 541 ]))       echo "Охрана: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 542 ]))       echo "Удаленность от города (км): ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 543 ]))       echo "Вид разрешительного использования: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 544 ]))       echo "Категория земли: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 545 ]))       echo "Вид права: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 546 ]))       echo "Цена за кв. м.: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 547 ]))       echo "Дополнительные строения: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 548 ]))       echo "Количество спален: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 549 ]))       echo "Бытовая техника: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 550 ]))       echo "Мебель: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 551 ]))       echo "Телефон: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 552 ]))       echo "Интернет: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 553 ]))       echo "Регион: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 554 ]))       echo "Населенный пункт: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 555 ]))       echo "Улица: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 556 ]))       echo "Дом: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 557 ] )) { 
            $comma = implode(" , ", $field[ 'value' ]);
            echo 'Координаты на карте "Яндекс" : ' . $comma ."<br>";
       }
     if ( in_array( $field[ 'id' ], [ 558 ]))       echo "Фото: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 638 ]))       echo "Комментарий (для сотрудников): ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 648 ]))       echo "Акция: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 671 ]))       echo "Контактный телефон (риелтора): ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 734 ]))       echo "Имя собственника: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 735 ]))       echo "Телефон собственника: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 736 ]))       echo "email собственника: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 778 ]))       echo "Тип недвижимости: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 784 ]))       echo "Район области: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 814 ]))       echo "Выгрузка на сайт компании: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 816 ]))       echo "Этажей в доме: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 822 ]))       echo "Шоссе: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 1100 ]))      echo "Площадь участка (кв.м.): ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 1110 ]))      echo "Выгрузка на YANDEX: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 1113 ]))      echo "Газ (линия): ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 1114 ]))      echo "Водопровод в доме: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 1115 ]))      echo "Электричество в доме: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 1154 ]))      echo "Выгрузка на realty.yandex.ru: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 1157 ]))      echo "Выгрузка на CIAN: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 1171 ]))      echo "Объект pyxi: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 1172 ]))      echo "Pyxi id: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 1185 ]))      echo "Реклама на доски объявлений: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 1193 ]))      echo "Выгрузка на MIRKVARTIR: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 1198 ]))      echo "Выгрузка на MOVE.SU.RU: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 1211 ]))      echo "Выгрузка на YANDEX.SU: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 1215 ]))      echo "Выгрузка на DMIR: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 1254 ]))      echo "Категория: ".$field[ 'value' ]."<br>";

/*
     if ( in_array( $field[ 'id' ], [ 557 ] )) { 
            $comma = implode(" , ", $field[ 'value' ]);
            echo 'Координаты на карте "Яндекс" : ' . $comma ."<br>";
//          echo "id поля продукта : ". $field[ 'id' ] . " его тип :  " . $field[ 'text' ] . " его значение :  " .$field[ 'value' ] ."<br>";
//             var_dump($field[ 'value' ])."<br>";
       }
*/
//          id: "342",
//          type: "text",
//          value: "43"
    }
echo "<br><br>";
// var_dump ($item['id']);
// var_dump ($item['name']);
// var_dump ($item);
}

// var_dump ($found[ 'data' ][ 'list' ][0]['name']);


?>