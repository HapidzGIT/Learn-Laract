<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Userseed = [
            [
                'name' => 'pembaca',
                'email' => 'hpsgaming2@gmail',
                'role' => 'pembaca',
                'password' => bcrypt('PASSWORD'),
            ],
            [
                'name' => 'penulis',
                'email' => 'hpsgaming3@gmail',
                'role' => 'penulis',
                'password' => bcrypt('PASSWORD'),
            ],
            [
                'name' => 'mas_admin',
                'email' => 'hpsgaming4@gmail',
                'role' => 'admin',
                'password' => bcrypt('PASSWORD'),
            ]
        ];
        foreach ($Userseed as $key => $value) {
            User::create($value);
        }
    }
}
