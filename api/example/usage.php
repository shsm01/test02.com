<?php
//описание и документация по API INTRUM http://www.intrumnet.com/api/
	
//	require_once __DIR__ ."..". DIRECTORY_SEPARATOR. 'api.intrum.php';
	require_once ".." . DIRECTORY_SEPARATOR . 'api.intrum.php';
// 	require_once __DIR__ . DIRECTORY_SEPARATOR. 'cache.intrum.php';
 	require_once ".." . DIRECTORY_SEPARATOR . 'cache.intrum.php';
	
	IntrumExternalCache::getInstance()->setup(
		array(
//			"folder" => __DIR__ . "/cache",
			"folder" => ".." . DIRECTORY_SEPARATOR . "/cache",
			"expire" => 600
		)
	);
	
	$api = IntrumExternalAPI::getInstance()
	->setup(
		array(
			"host" => "intrum11-12.intrumnet.com", // имя intrum хоста
			"apikey" => "ca50b98107fa03c1278bfa6175673e5f",// выданный api ключ
			"cache" => false // рекомендуется включать кэш (true) в production версии
			//, "port" => 80 
		)
	);

?>