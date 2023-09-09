<?php 
define('ROOT', $_SERVER['DOCUMENT_ROOT']);

require_once ROOT . '/config\db_conn.php'; // db
require_once ROOT . '/header.php'; // 헤더 

if($_SERVER['QUERY_STRING']) {
	/**
	 * c = contents
	 * d = directory
	 */
	$_GET['c'] = !empty($_GET['c']) ? $_GET['c'] : 'index';
	if($_GET['d'] && $_GET['c']) {
		require_once ROOT . "/{$_GET['d']}/{$_GET['c']}.php";
	}
} else {
	require_once ROOT . '/main.php';
}

require_once ROOT . '/footer.php'; // 푸터 


