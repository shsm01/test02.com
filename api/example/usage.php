<?php
//�������� � ������������ �� API INTRUM http://www.intrumnet.com/api/
	
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
			"host" => "intrum11-12.intrumnet.com", // ��� intrum �����
			"apikey" => "ca50b98107fa03c1278bfa6175673e5f",// �������� api ����
			"cache" => false // ������������� �������� ��� (true) � production ������
			//, "port" => 80 
		)
	);

?>