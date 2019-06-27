<?php

use Illuminate\Database\Seeder;

class AdminUsersTableSeeder extends Seeder
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
        \DB::table('admin_users')->truncate();

        \DB::table('admin_users')->insert([
            [
                'id'             => 1,
                'username'           => 'admin',                
                'password'       => Hash::make(123456),
                'name' => 'administrator',
                'avatar'       => '',
                'remember_token'         => '1233445',
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),     
            ]
        ]);
    }
}
