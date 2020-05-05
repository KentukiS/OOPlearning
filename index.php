<?php 

class Room
{
	public static $location = "Inside of the house";

	public static function sayWelcome()
	{
		echo "Hi, i'm static";
	}
}

echo Room::$location;
echo "<pre>";
echo Room::sayWelcome();


$myRoom = new Room();

echo "<br>";
echo "<br>";

echo $myRoom::$location;

echo "<br>";

$myRoom::sayWelcome();