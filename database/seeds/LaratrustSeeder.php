<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaratrustSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return  void
     */
    public function run()
    {
        $this->command->info('Truncating User, Role and Permission tables');
        $this->truncateLaratrustTables();

        $config = config('laratrust_seeder.role_structure');
        $mapPermission = collect(config('laratrust_seeder.permissions_map'));
        $superAdmin = config('laratrust_seeder.superadmin');


        $this->command->info("Creating Super Admin user");
        $user = \App\User::create([
            'name' => $superAdmin['name'],
            'user_name' => $superAdmin['user_name'],
            'password' => bcrypt('123456'),
            'remember_token' => str_random(10),
        ]);

        foreach ($config as $key => $roleValue) {
            // Create a new role
            $role = \App\Role::create([
                'name' => $key,
                'display_name' => $roleValue['display_name'],
                'description' => $roleValue['description']
            ]);

            $this->command->info('Creating Role ' . strtoupper($key));

            $permissions = explode(',', $roleValue['permissions']);

            // Reading role permission modules
            foreach ($permissions as $perm) {

                $permissionValue = $mapPermission->get($perm);

                $permission = \App\Permission::firstOrCreate([
                    'name' => $key . '-' . $permissionValue['name'],
                    'display_name' => $permissionValue['display_name'] . $roleValue['display_name'],
                    'description' => $permissionValue['description'] . $roleValue['description']
                ]);

                $this->command->info('Creating Permission to ' . $permissionValue['name'] . ' for ' . $key);

                if (!$role->hasPermission($permission->name)) {
                    $role->attachPermission($permission);
                } else {
                    $this->command->info($key . ': ' . $perm . ' ' . $permissionValue['name'] . ' already exist');
                }
            }

            $user->attachRole($role);
        }
    }

    /**
     * Truncates all the laratrust tables and the users table
     * @return    void
     */
    public function truncateLaratrustTables()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('permission_role')->truncate();
        DB::table('role_user')->truncate();
        \App\User::truncate();
        \App\Role::truncate();
        \App\Permission::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

    }
}
