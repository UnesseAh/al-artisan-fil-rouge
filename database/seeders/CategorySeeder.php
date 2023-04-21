<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

//        Category::factory(5)->create();

        $categories  = [
            [
                'name' => 'moroccan lighting',
                'slug' => Str::slug('moroccan lighting')
            ],
            [
                'name' => 'moroccan area rugs',
                'slug' => Str::slug('moroccan area rugs')
            ],
            [
                'name' => 'moroccan soft furnishing',
                'slug' => Str::slug('moroccan soft furnishing')
            ],
            [
                'name' => 'moroccan jewellery',
                'slug' => Str::slug('moroccan jewellery')
            ],
            [
                'name' => 'moroccan furniture',
                'slug' => Str::slug('moroccan furniture')
            ]
        ];

        foreach ($categories as $category){
            Category::create($category);
        }

    }
}
