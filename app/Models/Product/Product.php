<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Model\Getters\StaticTableNameGetter;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;
    use StaticTableNameGetter;

    public $fillable = [
        'name'
    ];

    public function save(array $options = [])
    {
        $this->slug = 'abc';

        parent::save();
    }

    public function variantGroups(): BelongsToMany
    {
        return $this
            ->belongsToMany(Variant::class, Variant::tablename())
            ->using(VariantPivot::class)
        ;
    }

    public function variants()
    {
        return $this
            ->hasMany(VariantPivot::class)
        ;
    }
}
