<?php
abstract class Heal
{
	public $name;
	public $level;
	public function __construct ($name, $level)
	{
		$this->name = $name;
		$this->level = $level;
	}
	public function use ($target)
	{
		switch ($this->level) 
		{
			case 1:
				echo $target->name . " regagne 20 PV. \n";
				$target->life += 20;
				break;
			case 2:
				echo $target->name . " regagne 50 PV. \n";
				$target->life += 50;
				break;
			case 3:
				echo $target->name . " regagne 200 PV. \n";
				$target->life += 200;
				break;
			case 4:
				echo $target->name . " revient full PV ! \n";
				$target->life += $target->maxlife;
				break;
		}
		if ($target->life > $target->maxlife)
		{
			$target->life = $target->maxlife;
		}
	}
}
?>