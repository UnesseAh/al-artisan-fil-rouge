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
        Category::factory(5)->create();

        /*
        $categories  = [
            [
                'name' => 'category 1',
                'slug' => Str::slug('category 1')
            ],
            [
                'name' => 'category 2',
                'slug' => Str::slug('category 2')
            ],
        ];

        Category::insert($categories);
        */
    }
}
