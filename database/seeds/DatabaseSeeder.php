<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Seia\Core\Model\User;
use Seia\Core\Model\UserMeta;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(DatabaseCleaner::class);

        $faker = Faker\Factory::create();

        $admin = User::create([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'email' => $faker->email,
            'password' => bcrypt(str_random(10)),
            'remember_token' => str_random(10),
        ]);

        $userBirthdate = new UserMeta([
            'created_by' => $admin->id,
            'field_name' => 'birth_date',
            'field_type' => 'date',
            'date_value' => $faker->date,
        ]);

        $userPostalcode = new UserMeta([
            'created_by' => $admin->id,
            'field_name' => 'zip_code',
            'field_type' => 'string',
            'string_value' => $faker->postcode,
        ]);

        $admin->meta()->saveMany([$userBirthdate, $userPostalcode]);

        $this->call(GroupsTableSeeder::class);
        $this->call(UsersTableSeeder::class);

        Model::reguard();
    }
}
