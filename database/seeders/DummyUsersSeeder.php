<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'Admin Global',
                'email'=>'admin@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'Guru Sekolah',
                'email'=>'guru@gmail.com',
                'role'=>'guru',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'Siswa Sekolah',
                'email'=>'siswa@gmail.com',
                'role'=>'siswa',
                'password'=>bcrypt('123456')
            ],
        ];

        foreach($userData as $key => $val) {
            User::create($val);
        }
    }
}
