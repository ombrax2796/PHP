<?php
class Pokeball extends Ball
{
	public function __construct ()
	{
		$name = 'Pokéball';
		$level = 10;
		
		parent::__construct($name, $level);
	}
}


class Hyperball extends Ball
{
	public function __construct ()
	{
		$name = 'Hyperball';
		$level = 50;
		
		parent::__construct($name, $level);
	}
}



class Superball extends LesBall
{
	public function __construct ()
	{
		$name = 'Superball';
		$level = 30;
		
		parent::__construct($name, $level);
	}
}


class Masterball extends Ball
{
	public function __construct ()
	{
		$name = 'Masterball';
		$level = 100;
		
		parent::__construct($name, $level);
	}
}
?>