<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Matakuliah;

class MatakuliahSeeder extends Seeder
{
    public function run(): void
    {
        Matakuliah::create(['kode_matakuliah' => 'IF001', 'nama_matakuliah' => 'Pemrograman Web', 'sks' => 3]);
        Matakuliah::create(['kode_matakuliah' => 'IF002', 'nama_matakuliah' => 'Basis Data', 'sks' => 3]);
        Matakuliah::create(['kode_matakuliah' => 'IF003', 'nama_matakuliah' => 'Jaringan Komputer', 'sks' => 2]);
        Matakuliah::create(['kode_matakuliah' => 'IF004', 'nama_matakuliah' => 'Kecerdasan Buatan', 'sks' => 3]);
        Matakuliah::create(['kode_matakuliah' => 'IF005', 'nama_matakuliah' => 'Sistem Operasi', 'sks' => 2]);
    }
}