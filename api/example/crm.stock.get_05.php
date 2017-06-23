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
//			'type' => 1, 
                  // Коммерческая недвижимость
//			'type' => 2, 
                  // Загородная недвижимость
//			'type' => 3, 
			// категория
                  // Другая недвижимость
//			'type' => 4, 
//			'category' => 1,
                  // Зарубежная недвижимость
			'type' => 5, 
			// фильтр по полю
/*
			'fields' => array(
				array(
					'id' => 575,
					'value' => 1
				)
			),
*/
			// число записей
			'limit' => 300,
			// страница
			'page' => 1
		)
	);

// var_dump ($found[ 'data' ][ 'count' ]);
 echo "<h3>"."Зарубежная недвижимость"."</h3>";
 echo "Количество записей: ". $found[ 'data' ][ 'count' ]."<br><br>";

$found = $found[ 'data' ][ 'list' ];

foreach ( $found as $item )
{
// 	echo $item."<br>";
   $found_first[] = $item;
// var_dump ($item); 
}

// var_dump($found_first);

foreach ( $found_first as $item )
{
// var_dump ($item); 
if ($item['parent'] == 37) $type_str = "Продажа";
else $type_str = "Аренда";

echo "id: ".$item['id']."<br>";
echo "Наименование продукта : ". $item['name'] ."<br>";
echo "Отметка о публикации продукта : ". $item['publish'] ."<br>";
echo "Категория : ". $type_str ."<br>";

// var_dump ($item[ 'fields' ]);
    foreach ( $item[ 'fields' ] as $field ) 
    {
/*
     if ( in_array( $field[ 'id' ], [ 488 ]))       echo "Общая площадь (кв.м): ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 489 ]))       echo "Тип здания: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 490 ]))       echo "Класс: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 491 ]))       echo "Цена: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 492 ]))       echo "Валюта: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 493 ]))       echo "Этажей в здании: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 494 ]))       echo "Общее количество машиномест: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 495 ]))       echo "Год постройки/сдачи: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 497 ]))       echo "Материал стен: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 498 ]))       echo "Высота потолков (м.): ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 499 ]))       echo "Система отопления: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 500 ]))       echo "Лифты в здании: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 501 ]))       echo "Охрана здания: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 503 ]))       echo "1-я линия: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 504 ]))       echo "Центральное кондиционирование: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 505 ]))       echo "Парковка: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 506 ]))       echo "Этаж: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 507 ]))       echo "Отдельный вход: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 508 ]))       echo "Отделка: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 509 ]))       echo "Городской телефон: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 511 ] )) { 
            $comma = implode(" , ", $field[ 'value' ]);
            echo 'Координаты на карте "Яндекс" : ' . $comma ."<br>";
       }
     if ( in_array( $field[ 'id' ], [ 512 ]))       echo "Регион: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 513 ]))       echo "Населенный пункт: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 515 ]))       echo "Дом: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 516 ]))       echo "Метро: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 517 ]))       echo "До метро, минут пешком: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 518 ]))       echo "Удаленность от города, км: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 519 ]))       echo "Система водоснабжения: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 520 ]))       echo "Назначение помещения: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 521 ]))       echo "Подключенная мощность (кВт): ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 522 ]))       echo "Ж/д пути: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 523 ]))       echo "Холодильная камера: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 524 ]))       echo "Оборудование: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 625 ]))       echo "Общее описание: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 631 ]))       echo "Район города: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 637 ]))       echo "Комментарий (для сотрудников): ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 647 ]))       echo "Акция: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 668 ]))       echo "Улица: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 669 ]))       echo "Контактный телефон (риелтора): ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 731 ]))       echo "Имя собственника: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 732 ]))       echo "Телефон собственника: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 733 ]))       echo "email собственника: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 777 ]))       echo "Тип недвижимости: ".$field[ 'value' ]."<br>";
*/
     if ( in_array( $field[ 'id' ], [ 799 ]))       echo "Тип недвижимости: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 800 ]))       echo "Банковская: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 801 ]))       echo "Возможна ипотека: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 802 ]))       echo "Страна: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 803 ]))       echo "Город: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 804 ]))       echo "Расположение: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 805 ]))       echo "Количество спален: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 806 ]))       echo "Количество ванных: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 807 ]))       echo "Площадь недвижимости (кв.м): ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 808 ]))       echo "Площадь земли: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 809 ]))       echo "Описание: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 810 ]))       echo "Цена: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 811 ]))       echo "Валюта: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 997 ]))       echo "Вид объекта: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 1000 ] )) { 
            $comma = implode(" , ", $field[ 'value' ]);
            echo 'Координаты на карте "Яндекс" : ' . $comma ."<br>";
       }
     if ( in_array( $field[ 'id' ], [ 1187 ]))       echo "Реклама на доски объявлений: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 1200 ]))       echo "Выгрузка на MOVE.SU.RU: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 1239 ]))       echo "Выгрузка на сайт компании: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 1240 ]))       echo "Акция (выгодная цена): ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 885 ]))       echo "Фото: ".$field[ 'value' ]."<br>";

/*
     if ( in_array( $field[ 'id' ], [ 786 ]))       echo "Район области: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 813 ]))       echo "Выгрузка на сайт компании: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 823 ]))       echo "Наличие погрузочной/разгрузочной зоны: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 824 ]))       echo "Арендная ставка действующего арендатора (за кв.м.): ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 825 ]))       echo "Тип спецотделки (если есть): ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 826 ]))       echo "Наличие пожарной сигнализации: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 827 ]))       echo "Возможность увеличения мощности: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 828 ]))       echo "Количество входов на объекте: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 829 ]))       echo "Возможна ли перепланировка: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 830 ]))       echo "Готовность документов: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 831 ]))       echo "Примерный размер коммунальных платежей в месяц: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 832 ]))       echo "Предоплата (мес): ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 856 ]))       echo "Цена за кв. м.: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 1109 ]))       echo "Выгрузка на YANDEX: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 1117 ]))       echo "Размер комиссии (в руб.): ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 1118 ]))       echo "Размер комиссии в %: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 1120 ]))       echo "Арендные каникулы: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 1121 ]))       echo "Срок арендных каникул (мес.): ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 1122 ]))       echo "Обеспечительный платеж: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 1123 ]))       echo "Входят ли коммунальные платежи в стоимость: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 1124 ]))       echo "Работают с НДС: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 1125 ]))       echo "Уместен ли торг: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 1136 ]))       echo "Площадь земельного участка (сот.): ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 1137 ]))       echo "Назначение земельного участка: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 1138 ]))       echo "Дополнительная информация по земельному участку: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 1153 ]))       echo "Выгрузка на realty.yandex.ru: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 1165 ]))       echo "шоссе: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 1167 ]))       echo "Расстояние от МКАД: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 1184 ]))       echo "Реклама на доски объявлений: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 1197 ]))       echo "Выгрузка на MOVE.SU.RU: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 1210 ]))       echo "Выгрузка на YANDEX.SU: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 1213 ]))       echo "Выгрузка на DMIR: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 1249 ]))       echo "Площадь всего здания (кв.м): ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 1253 ]))       echo "Х.З.: ".$field[ 'value' ]."<br>";
     if ( in_array( $field[ 'id' ], [ 510 ]))       echo "Фото: ".$field[ 'value' ]."<br>";
*/
    }

echo "<br><br>";
       
}

?>