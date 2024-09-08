<?php

namespace DesignPatterns;

class IceElement extends ElementDecorator
{

    protected array $elements = ['ice_element'];
    protected AbstractMove $move;

    public function __construct(AbstractMove $move)
    {
        $this->move = $move;
    }

}