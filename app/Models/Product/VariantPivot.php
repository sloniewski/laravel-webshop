<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VariantPivot extends Model
{
    use HasFactory;

    public $table = 'product_variant_pivot';

    public $fillable = [
        'product_id',
        'variant_id',
        'name',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function variant()
    {
        return $this->belongsTo(Variant::class);
    }
}
