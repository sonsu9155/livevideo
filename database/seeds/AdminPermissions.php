<?php

use Illuminate\Database\Seeder;

class AdminPermissions extends Seeder
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
        \DB::table('admin_permissions')->truncate();

        \DB::table('admin_permissions')->insert([
            [
                'id'             => 1,
                'name'           => 'All permission',                
                'slug'       => '*',
                'http_method' => '',
                'http_path'       => '*',                
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),     
            ],
            [
                'id'             => 2,
                'name'           => 'Dashboard',                
                'slug'       => 'dashboard',
                'http_method' => 'GET',
                'http_path'       => '/',                
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),     
            ]
            ,
            [
                'id'             => 3,
                'name'           => 'Login',                
                'slug'       => 'auth.login',
                'http_method' => '',
                'http_path'       => '/auth/logout',                
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),     
            ],
            [
                'id'             => 4,
                'name'           => 'User setting',                
                'slug'       => 'auth.setting',
                'http_method' => 'GET, PUT',
                'http_path'       => '/auth/setting',                
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),     
            ],
            [
                'id'             => 5,
                'name'           => 'Auth management',                
                'slug'       => 'auth.management',
                'http_method' => '',
                'http_path'       => '/auth/logs',                
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),     
            ]
        ]);
    }
}
