<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        \App\User::create([
            'name' => 'admin',
            'email' => 'admin@whirlpool.com.cn',
            'password' => bcrypt('123456'),
        ]);
        $this->call('NewsTableSeeder');
        $this->call('LivesTableSeeder');
        $this->call('TerminalsTableSeeder');
        $this->call('ProductTypesTableSeeder');
    }
}
