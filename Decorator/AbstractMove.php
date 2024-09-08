<?php

namespace DesignPatterns;

abstract class AbstractMove
{

    protected string $name = 'unknown move';
    protected array $elements = [];

    public function strike(): string
    {
        return "$this->name: Strike with elements ".implode(", ", $this->elements);
    }

}