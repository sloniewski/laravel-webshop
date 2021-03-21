<?php

namespace App\Traits\Model\Relations;

use App\Models\Order;

trait BelongsToOrder
{
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}