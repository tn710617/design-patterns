<?php

namespace DesignPatterns;

class FireElement extends ElementDecorator
{

    protected array $elements = ['fire_element'];
    protected AbstractMove $move;

    public function __construct(AbstractMove $move)
    {
        $this->move = $move;
    }

    public function strike(): string
    {
        return $this->move->strike().', '.implode(", ", $this->elements);
    }
}