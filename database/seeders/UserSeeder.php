<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Admin
        User::create([
            'name' => 'Admin SIAKAD',
            'email' => 'admin@siakad.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // Mahasiswa
        User::create([
            'name' => 'Nicky Falians',
            'email' => 'nicky@siakad.com',
            'password' => Hash::make('password'),
            'role' => 'mahasiswa',
            'npm' => '5520124056',
        ]);
    }
}