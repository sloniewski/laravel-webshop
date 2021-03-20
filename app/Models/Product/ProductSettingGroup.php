<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSetttigGroup extends Model
{
    use HasFactory;

    public $table = 'product_setting_group_pivot';
}