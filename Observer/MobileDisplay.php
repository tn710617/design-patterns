<?php

class MobileDisplay implements SplObserver
{

    private int $displayCount = 0;

    public function update(SplSubject $subject): void
    {
        $this->displayCount = $subject->getPokemonCount();
    }

    public function display(): string
    {
        return "Mobile Display: ".$this->displayCount.PHP_EOL;
    }

}