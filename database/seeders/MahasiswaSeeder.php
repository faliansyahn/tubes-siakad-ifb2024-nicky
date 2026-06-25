<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        Mahasiswa::create(['npm' => '5520124056', 'nama' => 'Nicky Falians']);
        Mahasiswa::create(['npm' => '5520124057', 'nama' => 'Nopal aprijat']);
        Mahasiswa::create(['npm' => '5520124058', 'nama' => 'Riansyah']);
    }
}