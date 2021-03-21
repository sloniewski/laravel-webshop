<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Model\Getters\StaticTableNameGetter;

class Variant extends Model
{
    use HasFactory;
    use StaticTableNameGetter;

    public $table = 'product_variants';

    public $fillable = [
        'name'
    ];
}
