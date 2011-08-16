<?php

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