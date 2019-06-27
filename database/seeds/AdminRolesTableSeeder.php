<?php

use Illuminate\Database\Seeder;

class AdminRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \DB::table('admin_roles')->truncate();

        \DB::table('admin_roles')->insert([
            [
                'id'             => 2,
                'name'           => 'Administrator',                
                'slug'       => 'administrator',
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),     
            ]
        ]);
    }
}
