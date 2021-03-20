<?php


namespace App\Cart;


use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Session;
use App\Cart\AbstractCart;

class SessionCart extends AbstractCart
{
    /**
     * @var Collection
     */
    private $items;

    public function __construct(Collection $items)
    {
        $this->items = $items;
    }

    public function addItem($productId, $qty): AbstractCart
    {

    }

    public function removeItem($productId, $qty): AbstractCart
    {

    }

    public function flush(): AbstractCart
    {

    }

    public function toArray(): array
    {
        $items = [];

        foreach($this->items as $productId => $qty) {
            $items[$productId] = $qty;
        }

        return $items;
    }

    public static function fromArray(array $itemArray): self
    {
        $items = new Collection();

        foreach($itemArray as  $productId => $qty) {
            $items->push(new CartItem($productId, $qty));
        }

        return new self($items);
    }

    public static function make(): AbstractCart
    {
        $items = Session::get('cart', []);

        return self::fromArray($items);
    }
}