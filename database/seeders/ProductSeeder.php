<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product\Product;
use App\Models\Product\Variant;
use App\Models\Product\VariantPivot;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $color = Variant::create(['name' => 'color']);
        $size = Variant::create(['name' => 'size']);

        $tshirt = Product::create([
            'name' => 'T-shirt',
        ]);

        $longSleeve = Product::create([
            'name' => 'Longsleeve',
        ]);

        $redTshirt = new VariantPivot([
            'variant_id' => $color->id,
            'product_id' => $tshirt->id,
            'name' => 'red',
        ]);

        $redTshirt->save();


    }
}
