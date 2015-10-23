<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Seia\Core\Model\Content;

class ContentsTableSeeder extends Seeder
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
            [
                'content_type_id' => 2,
                'created_by' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'mime_type' => 'text/html',
                'title' => 'About',
                'summary' => 'About our team',
                'body' => '<p>Everything you ever wanted to know about us, but were afraid to ask.</p>',
            ],
        ];

        foreach ($seeds as $seed) {
            Content::create($seed);
        }

        Model::reguard();
    }
}
