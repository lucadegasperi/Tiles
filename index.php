<?php

define('DS', DIRECTORY_SEPARATOR);
define('PHP','.php');
define('JSON', '.json');
define('SYS_PATH', 'system');
define('USR_PATH', 'user');
define('SRC_PATH', 'source')
define('TILES_PATH', SRC_PATH.DS.'tiles.json');

$structure = json_decode(file_get_contents(TILES_PATH), true);

$template = $structure['template'];



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

//
//  class for extending and rendering tiles
//

class tile
{
	private $type;
	private $data;

	public function __construct($type, $data)
	{
		$this->type = $type;
		$this->data = $data;
	}
	
	public function render()
	{
		ob_start()
		$data = $this->data;
		if(find_file('tiles'.DS.$type.DS.'view'.PHP))
			file_get_contents('tiles'.DS.$type.DS.'view'.PHP);
		return ob_get_clean();
	}
}


//
//  convenience class for storing tiles
//
class column
{
	private $tiles = array();

	public function __construct($tiles = array())
	{
		$this->tiles = $tiles;
	}
	
	public function render()
	{
		ob_start();
		
		foreach($tiles as $tile)
		{
			echo $tile->render();
		}
		
		return ob_get_clean();
	}
}

?>