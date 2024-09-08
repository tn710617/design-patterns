<?php

class PokemonCounter implements SplSubject
{

    private SplObjectStorage $storage;
    private int $pokemonCount;

    public function __construct()
    {
        $this->storage = new SplObjectStorage();
        $this->pokemonCount = 0;
    }

    public function attach(SplObserver $observer): void
    {
        $this->storage->attach($observer);
    }

    public function detach(SplObserver $observer): void
    {
        $this->storage->detach($observer);
    }

    public function notify(): void
    {
        foreach ($this->storage as $observer) {
            $observer->update($this);
        }
    }

    public function getPokemonCount(): int
    {
        return $this->pokemonCount;
    }

    public function addPokemon(): void
    {
        $this->pokemonCount++;
        $this->notify();
    }

    public function subPokemon(): void
    {
        $this->pokemonCount--;
        $this->notify();
    }
}