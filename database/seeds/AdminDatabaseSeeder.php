<?php

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name'  => 'Alaa shareef',
            'email'  => 'alaa1996_2013@hotmail.com',
            'password'  => bcrypt('123456'),

        ]);
    }
}
