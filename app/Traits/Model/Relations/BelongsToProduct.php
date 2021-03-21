<?php

namespace App\Traits\Model\Relations;

use App\Models\Product\Product;

trait BelongsToProduct
{
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}