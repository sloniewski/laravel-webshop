<?php


namespace App\Cart;

class CartItem
{
    /**
     * @var int| string
     */
    private $productId;

    /**
     * @var int| string
     */
    private $qty;

    public function __construct($productId, $qty)
    {
        $this->productId = $productId;
        $this->qty = $qty;
    }

    public function toArray()
    {
        return [
            'product_id' => $this->productId,
            'qty' => $this->qty
        ];
    }
}