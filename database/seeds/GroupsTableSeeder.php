<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Seia\Core\Model\User;
use Seia\Core\Model\Group;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $admin = User::find(1);

        $group = Group::create([
            'name' => 'Administrators',
            'slug' => 'admins',
            'policy' => 'public',
            'created_by' => $admin->id,
        ]);

        $admin->groups()->attach($group->id);

        Model::reguard();
    }
}
