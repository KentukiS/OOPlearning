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

$object = new Room();
$object->changeColor("green");
$object->getColor();
//test