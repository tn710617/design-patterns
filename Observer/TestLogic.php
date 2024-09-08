<?php
require 'PokemonCounter.php';
require 'MobileDisplay.php';
require 'ComputerDisplay.php';

$computerDisplay = new ComputerDisplay();
$mobileDisplay = new MobileDisplay();
$pokemonCounter = new PokemonCounter();

$pokemonCounter->attach($computerDisplay);
$pokemonCounter->attach($mobileDisplay);

echo 'Initial Display'.PHP_EOL;
echo $mobileDisplay->display();
echo $computerDisplay->display();
echo PHP_EOL;

$pokemonCounter->addPokemon();
echo 'Add Pokemon'.PHP_EOL;

echo $mobileDisplay->display();
echo $computerDisplay->display();
echo PHP_EOL;

$pokemonCounter->addPokemon();
echo 'Add Pokemon'.PHP_EOL;

echo $mobileDisplay->display();
echo $computerDisplay->display();
echo PHP_EOL;

$pokemonCounter->subPokemon();
echo 'Sub Pokemon'.PHP_EOL;

echo $mobileDisplay->display();
echo $computerDisplay->display();
