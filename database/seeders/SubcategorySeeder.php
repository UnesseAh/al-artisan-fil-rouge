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
        Subcategory::factory(3)->create();
        /*
        $subcategories  = [
            [
                'name' => 'subcategory 1',
                'slug' => Str::slug('subcategory 1'),
                'category_id' => '1'
            ],
            [
                'name' => 'subcategory 2',
                'slug' => Str::slug('subcategory 2'),
                'category_id' => '2'
            ],
        ];

        Subcategory::insert($subcategories);
        */
    }
}
