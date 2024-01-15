<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'name' => 'Admin Kejaksaan Sijunjung',
                'email' => 'admin@gmail.com',
                'role' => 'admin', 
                'password' => bcrypt('admin123')
            ],
            [
                'name' => 'Kajari Kejaksaan Sijunjung',
                'email' => 'kajari@gmail.com',
                'role' => 'kajari', 
                'password' =>bcrypt('kajari123')
            ],
            [
                'name' => 'Staff BB Kejaksaan Sijunjung',
                'email' => 'staffbb@gmail.com',
                'role' => 'staff bb', 
                'password' =>bcrypt('staffbb123')
            ],
        ];
        
        foreach($userData as $key => $val) {
            User::create($val);
        }
    }
}
