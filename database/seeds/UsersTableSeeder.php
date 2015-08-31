<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Generator;
use Seia\Core\Model\Group;
use Seia\Core\Model\User;
use Seia\Core\Model\UserMeta;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        factory(User::class, 2)->create()
            ->each(function($user)
            {
                $user->meta()->save(factory(UserMeta::class)->make());
            });

        Model::reguard();
    }
}
