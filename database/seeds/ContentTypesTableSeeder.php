<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Seia\Core\Model\ContentType;

class ContentTypesTableSeeder extends Seeder
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
            ['name' => 'Template'],
            ['name' => 'Page'],
            ['name' => 'Post'],
            ['name' => 'News'],
        ];

        foreach ($seeds as $seed) {
            ContentType::create($seed);
        }

        Model::reguard();
    }
}
