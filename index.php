<?php 

class Room
{
	public $color = 'red'; 

	public function getColor()
	{
		echo $this->color;
	}

	public function changeColor($color)
	{
		echo $this->color;
		$this->color = $color ;
	}
}

?>
