<?php if(!defined('TILES')) { exit('no direct script access allowed!'); }

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
		extract($this->data);
		if(find_file('tiles'.DS.$type.DS.'view'.PHP))
			file_get_contents('tiles'.DS.$type.DS.'view'.PHP);
		return ob_get_clean();
	}
}

?>