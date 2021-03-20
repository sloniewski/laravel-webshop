<?php


namespace App\Cart;


abstract class AbstractCart
{
    public abstract function addItem($productId, $qty): self;
    public abstract function removeItem($productId, $qty): self;
    public abstract function flush(): self;
    public abstract function toArray(): array;
    public abstract static function make(): self;
}