<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Craft;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CraftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        CraftSeeder::factory(5)->create();

        $products = [
            [
                'title' => '1 title',
                'slug' => '1-title',
                'description' => '1 description',
                'price' => '1',
                'image' => 'text-1.png',
                'subcategory_id' => '1'
            ],
            [
                'title' => '2 title',
                'slug' => '1-title',
                'description' => '2 description',
                'price' => '2',
                'image' => 'text-2.png',
                'subcategory_id' => '2'
            ],
            [
                'title' => '3 title',
                'slug' => '1-title',
                'description' => '3 description',
                'price' => '3',
                'image' => 'text-3.png',
                'subcategory_id' => '3'
            ],
        ];

        Craft::insert($products);
    }
}
