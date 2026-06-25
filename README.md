# SIAKAD - Sistem Informasi Akademik Sederhana

Aplikasi ini dibuat untuk memenuhi Tugas Besar mata kuliah Web II (IF53413). SIAKAD adalah aplikasi web sederhana berbasis Laravel yang digunakan untuk mengelola data akademik seperti dosen, mahasiswa, mata kuliah, jadwal, dan KRS.

**Nama:** Nicky Faliansyah  
**NPM:** 5520124056  
**Kelas:** IFB 2024  

---

## Teknologi
- Laravel 12
- Bootstrap 5
- SQLite

---

## Akun untuk Login
| Role | Email | Password |
|------|-------|----------|
| Admin | admin@siakad.com | password |
| Mahasiswa | nicky@siakad.com | password |

---

## Halaman yang Ada

### Admin
| Halaman | Keterangan |
|---------|-----------|
| Dashboard | Lihat ringkasan data seperti jumlah dosen, mahasiswa, mata kuliah, jadwal, dan KRS |
| Data Dosen | Tambah, edit, hapus, dan lihat data dosen |
| Data Mahasiswa | Tambah, edit, hapus, dan lihat data mahasiswa |
| Data Mata Kuliah | Tambah, edit, hapus, dan lihat mata kuliah beserta SKS |
| Data Jadwal | Atur jadwal kuliah termasuk dosen, hari, jam, dan kelas |

### Mahasiswa
| Halaman | Keterangan |
|---------|-----------|
| Dashboard | Halaman utama setelah login, berisi info akun |
| KRS Saya | Lihat mata kuliah yang sudah diambil dan total SKS |
| Ambil Mata Kuliah | Pilih dan tambah mata kuliah ke KRS |
| Jadwal Saya | Lihat jadwal kuliah sesuai KRS yang diambil |

---

## Cara Pakai

1. Clone repo ini
2. Jalankan `composer install` dan `npm install`
3. Copy `.env.example` ke `.env` lalu jalankan `php artisan key:generate`
4. Jalankan `php artisan migrate:fresh --seed`
5. Jalankan `php artisan serve`
6. Buka `http://127.0.0.1:8000`

---

## Screenshots
Ada di folder `screenshots/`