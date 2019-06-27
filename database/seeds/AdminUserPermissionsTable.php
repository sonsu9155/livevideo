<?php

use Illuminate\Database\Seeder;

class AdminUserPermissionsTable extends Seeder
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
        \DB::table('admin_user_permissions')->truncate();

        \DB::table('admin_user_permissions')->insert([
            [
                'user_id'             => 1,
                'permission_id'           => 1,                
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),     
            ]
        ]);
    }
}
