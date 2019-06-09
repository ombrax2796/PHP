<?php
abstract class LesBall
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
		echo "Vous lancez une " . $this->name . " sur " . $target->name . " ! \n";
		if ($this->level <= 50)
		{
			$chance = round((($target->maxlife - $target->life) / $target->maxlife) * (1 + $this->level - $target->level) / 25, 2);	
		}
		else 
		{
			$chance = 1;
		}
		$capture = rand(0, 100) / 100 - $chance;
		if ($capture <= 0)
		{
			echo "Vous avez capturé " . $target->name . " ! Bravo ! \n";
			$capture = 1;
		}
		else
		{
			echo "Raté... \n";
			$capture = 0;
		}
		return $capture;
	}
}
?>