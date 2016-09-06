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
            'email' => '82011220@qq.com',
            'password' => bcrypt('hahaha'),
        ]);
        $this->call('NewsTableSeeder');
        $this->call('LivesTableSeeder');
        $this->call('TerminalsTableSeeder');
    }
}
