<?php

require 'AbstractMove.php';
require 'ElementDecorator.php';
require 'FireElement.php';
require 'IceElement.php';
require 'Move1.php';
require 'Move2.php';

$move1 = new DesignPatterns\Move1();
echo $move1->strike().PHP_EOL;

$move1 = new DesignPatterns\FireElement($move1);
echo $move1->strike().PHP_EOL;

$move1 = new DesignPatterns\IceElement($move1);
echo $move1->strike().PHP_EOL;

$move2 = new DesignPatterns\Move2();
echo $move2->strike().PHP_EOL;

$move2 = new DesignPatterns\FireElement($move2);
echo $move2->strike().PHP_EOL;

$move2 = new DesignPatterns\IceElement($move2);
echo $move2->strike().PHP_EOL;

