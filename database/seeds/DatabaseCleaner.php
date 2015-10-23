<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseCleaner extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::beginTransaction();

            DB::statement('SET FOREIGN_KEY_CHECKS = 0');

                DB::table('routes')->delete();
                DB::table('contents')->delete();
                DB::table('categories')->delete();
                DB::table('content_types')->delete();
                DB::table('languages')->delete();
                DB::table('group_user')->delete();
                DB::table('user_meta')->delete();
                DB::table('users')->delete();
                DB::table('groups')->delete();

                DB::table('routes')->truncate();
                DB::table('contents')->truncate();
                DB::table('categories')->truncate();
                DB::table('content_types')->truncate();
                DB::table('languages')->truncate();
                DB::table('group_user')->truncate();
                DB::table('user_meta')->truncate();
                DB::table('users')->truncate();
                DB::table('groups')->truncate();

            DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        DB::commit();

        Model::reguard();
    }
}
