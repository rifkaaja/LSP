<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Rifka Ayu',
            'email' => 'rifkayualiyaristy@gmail.com',
            'password' => bcrypt('rifkaa1910'),
            'prodi' => 'D3-MI PSDKU Kediri',
            'nim' => '2131730122',
            'tgl' => '2023-11-12',            
        ]);
    }
}