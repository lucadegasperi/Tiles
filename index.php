<?php

define('TILES', 'Tiles');
define('DS', DIRECTORY_SEPARATOR);
define('PHP','.php');
define('JSON', '.json');
define('SYS_PATH', 'system');
define('CLS_PATH', SYS_PATH.DS.'classes');
define('USR_PATH', 'user');
define('SRC_PATH', 'source')
define('TILES_PATH', SRC_PATH.DS.'tiles.json');

$structure = json_decode(file_get_contents(TILES_PATH), true);

$template = $structure['template'];

include_once(CLS_PATH.DS.'column'.PHP);
include_once(CLS_PATH.DS.'tile'.PHP);

function find_file($file_path)
{
	$true_path = false;
	if(file_exists(USR_PATH.DS.$file_path))
	{
		$true_path = USR_PATH.DS.$file_path;
	}
	else if(file_exists(SYS_PATH.DS.$file_path))
	{
		$true_path = SYS_PATH.DS.$file_path;
	}
	return $true_path;
}

?>