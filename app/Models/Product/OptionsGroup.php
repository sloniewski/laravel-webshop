<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OptionsGroup extends Model
{
    use HasFactory;

    public $table = 'product_options_group';
}
