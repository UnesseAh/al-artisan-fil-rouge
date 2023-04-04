<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Product::factory(5)->create();
//        $products = [
//            [
//                'title' => '1 title',
//                'description' => '1 description',
//                'price' => '1',
//                'image' => 'text-1.png',
//                'subcategory_id' => '1'
//            ],
//            [
//                'title' => '2 title',
//                'description' => '2 description',
//                'price' => '2',
//                'image' => 'text-2.png',
//                'subcategory_id' => '2'
//            ],
//            [
//                'title' => '3 title',
//                'description' => '3 description',
//                'price' => '3',
//                'image' => 'text-3.png',
//                'subcategory_id' => '3'
//            ],
//        ];
//
//        Product::insert($products);
    }
}
