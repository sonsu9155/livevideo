<?php

use Illuminate\Database\Seeder;

class AdminRoleUsersTable extends Seeder
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
        \DB::table('admin_role_users')->truncate();

        \DB::table('admin_role_users')->insert([
            [
                'role_id'             => 1,
                'user_id'           => 1, 
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),     
            ]
        ]);
    }
}
