<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Dosen;

class DosenSeeder extends Seeder
{
    public function run(): void
    {
        Dosen::create(['nidn' => '0101010001', 'nama' => 'Dr. pak lalan']);
        Dosen::create(['nidn' => '0101010002', 'nama' => 'Dr. ibu  siti nazila']);
        Dosen::create(['nidn' => '0101010003', 'nama' => 'Prof. pak sutono']);
    }
}