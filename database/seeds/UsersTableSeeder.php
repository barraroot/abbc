<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class)->create([
            'name' => 'Administrador ABBC',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin')
        ]);
    }
}
