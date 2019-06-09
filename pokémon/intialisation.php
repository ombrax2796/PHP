<?php 
include './pokemon.php';
include './pokémonbase.php';

include './ball.php';
include './pokéball.php';

include './heal.php';
include './Lespotions.php';

include './bot.php';


echo "Vous invoquez Carapuce !\n";
$bot = new Bot (new Carapuce (8), [new Pokeball (), new Superball (), new Pokeball ()], [new Potion (), new Potion (), new Superpotion ()]);
echo "Carapuce est niveau " . $bot->pokebot->level . " et a " . $bot->pokebot->maxlife . " PVs. \n";
echo "L'adversaire invoque Salamèche !\n";
$adversaire = new Salameche (8);
echo "Salamèche est niveau " . $adversaire->level . " et a " . $adversaire->maxlife . " PVs. \n";
echo "---------------------\n";
echo "   Début du combat   \n";
echo "---------------------\n";
$bot->play($adversaire);
echo "---------------------\n";
echo "    Fin du combat    \n";
echo "---------------------\n";
?>