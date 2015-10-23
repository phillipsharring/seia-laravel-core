<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Seia\Core\Model\Route;

class RoutesTableSeeder extends Seeder
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
                'uri' => 'about',
                'controller' => 'ContentsController',
                'method' => 'show',
                'params' => serialize(['id' => 1]),
            ],
            [
                'uri' => 'about-us',
                'controller' => 'ContentsController',
                'method' => 'redirect',
                'params' => serialize(['to' => '/about']),
            ],
        ];

        foreach ($seeds as $seed) {
            Route::create($seed);
        }

        Model::reguard();
    }
}
