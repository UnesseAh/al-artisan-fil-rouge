<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Subcategory::factory(5)->create();

        $subcategories  = [
            [
                'name' => 'modern ceiling lights',
                'slug' => Str::slug('modern ceiling lights'),
                'category_id' => '1'
            ],
            [
                'name' => 'moorish ceiling lights',
                'slug' => Str::slug('moorish ceiling lights'),
                'category_id' => '1'
            ],
            [
                'name' => 'flush mount lights',
                'slug' => Str::slug('flush mount lights'),
                'category_id' => '2'
            ],
            [
                'name' => 'wall scances',
                'slug' => Str::slug('wall scances'),
                'category_id' => '1'
            ],
            [
                'name' => 'table and floor lamps',
                'slug' => Str::slug('table and floor lamps'),
                'category_id' => '1'
            ],
            [
                'name' => 'lanterns and candle holders',
                'slug' => Str::slug('lanterns and candle holders'),
                'category_id' => '1'
            ],
            [
                'name' => 'subcategory 2',
                'slug' => Str::slug('subcategory 2'),
                'category_id' => '2'
            ],
            [
                'name' => 'checkered rugs',
                'slug' => Str::slug('checkered rugs'),
                'category_id' => '2'
            ],
            [
                'name' => 'beni ourain rug',
                'slug' => Str::slug('beni ourain rug'),
                'category_id' => '2'
            ],
            [
                'name' => 'azilal rug',
                'slug' => Str::slug('azilal rug'),
                'category_id' => '2'
            ],
            [
                'name' => 'taznakht rug',
                'slug' => Str::slug('taznakht rug'),
                'category_id' => '2'
            ],
            [
                'name' => 'flateweave area rug',
                'slug' => Str::slug('flateweave area rug'),
                'category_id' => '2'
            ],
            [
                'name' => 'area runner',
                'slug' => Str::slug('area runner'),
                'category_id' => '2'
            ],
            [
                'name' => 'leather pouffes',
                'slug' => Str::slug('leather pouffes'),
                'category_id' => '3'
            ],
            [
                'name' => 'floor cushions',
                'slug' => Str::slug('floor cushions'),
                'category_id' => '3'
            ],
            [
                'name' => 'kilim cushions',
                'slug' => Str::slug('kilim cushions'),
                'category_id' => '3'
            ],
            [
                'name' => 'cactus silk cushions',
                'slug' => Str::slug('cactus silk cushions'),
                'category_id' => '3'
            ],
            [
                'name' => 'embroidered pillows',
                'slug' => Str::slug('embroidered pillows'),
                'category_id' => '3'
            ],
            [
                'name' => 'pompom pillows',
                'slug' => Str::slug('pompom pillows'),
                'category_id' => '3'
            ],
            [
                'name' => 'cactus silk throws',
                'slug' => Str::slug('cactus silk throws'),
                'category_id' => '3'
            ],
            [
                'name' => 'men bangles',
                'slug' => Str::slug('men bangles'),
                'category_id' => '4'
            ],
            [
                'name' => 'women bangles',
                'slug' => Str::slug('women bangles'),
                'category_id' => '4'
            ],
            [
                'name' => 'earrings',
                'slug' => Str::slug('earrings'),
                'category_id' => '4'
            ],
            [
                'name' => 'pendants',
                'slug' => Str::slug('pendants'),
                'category_id' => '4'
            ],
            [
                'name' => 'jewellery boxes',
                'slug' => Str::slug('jewellery boxes'),
                'category_id' => '4'
            ],
            [
                'name' => 'mirrors',
                'slug' => Str::slug('mirrors'),
                'category_id' => '4'
            ],
            [
                'name' => 'moroccan fountians',
                'slug' => Str::slug('moroccan fountians'),
                'category_id' => '5'
            ],
            [
                'name' => 'moroccan mosaic tables',
                'slug' => Str::slug('moroccan mosaic tables'),
                'category_id' => '5'
            ],
            [
                'name' => 'moroccan doors',
                'slug' => Str::slug('moroccan doors'),
                'category_id' => '5'
            ],
            [
                'name' => 'moroccan tiles',
                'slug' => Str::slug('moroccan tiles'),
                'category_id' => '5'
            ]
        ];

        foreach ($subcategories as $subcategory){
            Subcategory::create($subcategory);
        }

    }
}
