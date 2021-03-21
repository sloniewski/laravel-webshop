<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OptionGroupPivot extends Model
{
    use HasFactory;

    public $table = 'product_option_group_pivot';
}