<?php 

class Room
{
	// public $color = 'red'; //выведет красный при исполнении инструкции $object->color;
	private $color = 'red'; // не выведет цвет при сполнении инструкции $object->color 
							// но при это вывыедет текст при использовании функций внутри обьекта

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
echo $object->getColor();
echo $object->color;
