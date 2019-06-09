<?php
//Bulbizarre
class Bulbizarre extends Pokemon
{
	public function __construct ($level, $life = null)
	{
		$name = 'Bulbizarre';
		$maxlife = 100 + 7 * $level;
		$life = $life ?? $maxlife;
		$type = 'plante';
		$strength = 10 + 3 * $level;
		
		parent::__construct($name, $maxlife, $life, $level, $type, $strength);
	}
	
	public static function say_hi ()
	{
		echo "Bulbi !\n";
	}
}

//Carapuce
class Carapuce extends Pokemon
{
	public function __construct ($level, $life = null)
	{
		$name = 'Carapuce';
		$maxlife = 100 + 9 * $level;
		$life = $life ?? $maxlife;
		$type = 'eau';
		$strength = 10 + 2 * $level;
		
		parent::__construct($name, $maxlife, $life, $level, $type, $strength);
	}
	
	public static function say_hi ()
	{
		echo "Cara !\n";
	}
}

//Salameche
class Salameche extends Pokemon
{
	public function __construct ($level, $life = null)
	{
		$name = 'Salamèche';
		$maxlife = 100 + 5 * $level;
		$life = $life ?? $maxlife;
		$type = 'feu';
		$strength = 10 + 4 * $level;
		
		parent::__construct($name, $maxlife, $life, $level, $type, $strength);
	}
	
	public static function say_hi ()
	{
		echo "Salam !\n";
	}
}
?>

