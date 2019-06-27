<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(AdminUsersTableSeeder::class);
         $this->call(AdminRolesTableSeeder::class);
         $this->call(AdminRolePermissionsTable::class);
         $this->call(AdminRoleUsersTable::class);
         $this->call(AdminPermissions::class);
         $this->call(AdminRoleMenuTable::class);
         $this->call(AdminUserPermissionsTable::class);
         $this->call(AdminMenuTable::class);
    }
}
