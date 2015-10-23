<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Seia\Core\Model\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $seeds = [
            ['content_type_id' => 1, 'name' => 'Uncategorized'],
        ];

        foreach ($seeds as $seed) {
            Category::create($seed);
        }

        Model::reguard();
    }
}
