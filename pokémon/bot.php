<?php
class Bot 
{
	public $pokebot;
	public $balls;
	public $heals;
	public function __construct ($pokebot, $balls = [], $heals = [])
	{
		$this->pokebot = $pokebot;
		$this->balls = $balls;
		$this->heals = $heals;
	}
	public function countBalls ()
	{
		if ($this->balls)
		{
			return count($this->balls);
		}
		return 0;
	}
	public function countHeals ()
	{
		if ($this->heals)
		{
			return count($this->heals);
		}
		return 0;
	}
	public function useBall ($target)
	{
		if ($this->countBalls())
		{
			$best_i = 0;
			$level = $best_i;
			for ($i = 0; $i < $this->countBalls(); $i++)
			{
				if ($this->balls[$i]->level > $level)
				{
					$best_i = $i;
					$level = $this->balls[$i]->level;
				}
			}
			$capture = $this->balls[$best_i]->use($target);
			unset($this->balls[$best_id]);
			$this->balls = array_shift($this->balls);
			return $capture;
		}
	}
	public function useHeal ($target)
	{
		if ($this->countHeals())
		{
			$best_i = 0;
			$level = $best_i;
			for ($i = 0; $i < $this->countHeals(); $i++)
			{
				if ($this->heals[$i]->level > $level)
				{
					$best_i = $i;
					$level = $this->heals[$i]->level;
				}
			}
			$this->heals[$best_i]->use($target);
			unset($this->heals[$best_i]);
			$this->heals = array_values($this->heals);
		}
	}
	public function attackPoke ($target)
	{
		$this->pokebot->attack($target);
	}
	public function play ($target)
	{
		$captured = false;
		while ($target->life > 0 && $this->pokebot->life > 0 && $captured != true)
		{
			if ($this->pokebot->life <= $this->pokebot->maxlife/2 && $this->countHeals())
			{
				$this->useHeal($this->pokebot);
			}
			elseif ($target->life <= $target->maxlife/2)
			{
				$captured = $this->useBall($target);
			}
			else
			{
				$this->attackPoke($target);
			}
			
			if ($target->life > 0 && $captured != true)
			{
				$target->attack($this->pokebot);
			}
		}
		echo "\n";
		if ($target->life <= 0 || $captured == true)
		{
			if ($target->life <= 0)
				echo $target->name . " a 0 PV... \n";
			echo "Victoire ! Bien joué ! \n";
		}
		elseif ($this->pokebot->life <= 0) 
		{
			echo "Aïe... " . $this->pokebot->name . " a 0 PV... \n";
			echo "Vous avez perdu... Dommage ! \n";
		}
	}
}
?>