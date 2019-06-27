<?php

use Illuminate\Database\Seeder;

class AdminRoleMenuTable extends Seeder
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
        \DB::table('admin_role_menu')->truncate();

        \DB::table('admin_role_menu')->insert([
            [
                'role_id'             => 1,
                'menu_id'           => 2,
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),     
            ],
            [
                'role_id'             => 1,
                'menu_id'           => 8,
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),     
            ],
            [
                'role_id'             => 1,
                'menu_id'           => 9,
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),     
            ],
            [
                'role_id'             => 1,
                'menu_id'           => 10,
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),     
            ],
            [
                'role_id'             => 1,
                'menu_id'           => 13,
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),     
            ],
            [
                'role_id'             => 1,
                'menu_id'           => 14,
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),     
            ],
            [
                'role_id'             => 1,
                'menu_id'           => 15,
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),     
            ],
            [
                'role_id'             => 1,
                'menu_id'           => 16,
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),     
            ],
            [
                'role_id'             => 1,
                'menu_id'           => 17,
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),     
            ],
            [
                'role_id'             => 1,
                'menu_id'           => 18,
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),     
            ],
            [
                'role_id'             => 1,
                'menu_id'           => 19,
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),     
            ]
        ]);
    }
}
