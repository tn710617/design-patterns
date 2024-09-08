<?php

namespace DesignPatterns;

abstract class ElementDecorator extends AbstractMove
{

    protected array $elements = [];

    public function strike(): string
    {
        return $this->move->strike().', '.implode(", ", $this->elements);
    }

}