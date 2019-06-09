<?php
//Les potion normale
class Potion extends Heal
{
	public function __construct ()
	{
		$name = 'Potion';
		$level = 1;
		parent::__construct($name, $level);
	}
}

//Les Hyper potion
class Hyperpotion extends Heal
{
	public function __construct ()
	{
		$name = 'Hyperpotion';
		$level = 3;
		parent::__construct($name, $level);
	}
}

//Les potion max
class Potionmax extends Heal
{
	public function __construct ()
	{
		$name = 'Potionmax';
		$level = 4;
		parent::__construct($name, $level);
	}
}

//Les Super potion
class Superpotion extends Heal
{
	public function __construct ()
	{
		$name = 'Superpotion';
		$level = 2;
		parent::__construct($name, $level);
	}
}
?>