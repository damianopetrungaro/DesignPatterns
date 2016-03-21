<?php

namespace FactoryMethod\Pattern\Factory;

abstract class CreatorAbstract
{
    protected abstract function factoryMethod(Fruits $fruit);

    public function startFactory($fruit)
    {
        return $this->factoryMethod($fruit);
    }
}