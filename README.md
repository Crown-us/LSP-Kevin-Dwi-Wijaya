<p align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400">
</p>

<h1 align="center">📂 Aplikasi Arsip Surat Digital</h1>

<p align="center">
  <strong>Ucapkan selamat tinggal pada tumpukan kertas! 🚀</strong><br>
  Solusi modern untuk mengelola, mencari, dan mengamankan arsip surat masuk & keluar secara digital.
</p>

<p align="center">
  <img src="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExd2hjcHhxOGx2aHZlenVwMjh2eTFnY21vNXJ5MXN0bGJzZzU1bmk5aSZlcD12aV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/L1R1tvI9svkAZj9i0g/giphy.gif" width="600">
</p>

---

## ✨ Fitur Unggulan

Aplikasi ini dirancang untuk membuat manajemen surat menjadi pengalaman yang menyenangkan dan efisien.

| Fitur                   | Deskripsi                                                    | Ikon      |
| ----------------------- | ------------------------------------------------------------ | --------- |
| **Manajemen Kategori** | Kelola kategori surat dengan mudah (Tambah, Edit, Hapus).    | `📑`      |
| **Manajemen Surat** | CRUD (Create, Read, Update, Delete) data surat secara lengkap. | `📂`      |
| **Upload & Download** | Unggah dan unduh lampiran surat (PDF) dengan satu klik.      | `📥`      |
| **Pencarian Cepat** | Temukan surat secara instan berdasarkan judul atau isi.      | `🔍`      |
| **Desain Responsif** | Tampilan optimal di berbagai perangkat, dari PC hingga mobile. | `📱`      |
| **Halaman "About"** | Kenali lebih jauh tentang pembuat aplikasi.                  | `🖼️`      |

## 🛠️ Teknologi yang Digunakan

Dibangun dengan tumpukan teknologi modern yang andal dan skalabel.

<p align="left">
  <img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg" alt="Laravel" width="50" height="50"/>
  <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" alt="PHP" width="50" height="50"/>
  <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mysql/mysql-original-wordmark.svg" alt="MySQL" width="50" height="50"/>
  <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original-wordmark.svg" alt="HTML5" width="50" height="50"/>
  <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/bootstrap/bootstrap-plain-wordmark.svg" alt="Bootstrap" width="50" height="50"/>
</p>

---

## ⚙️ Panduan Instalasi & Menjalankan Aplikasi

Hanya butuh beberapa langkah untuk menjalankan aplikasi ini di komputermu.

1.  **Clone Repository**
    Buka terminalmu dan jalankan perintah berikut:
    ```bash
    git clone (https://github.com/Crown-us/LSP-Kevin-Dwi-Wijaya.git)
    ```

2.  **Masuk ke Direktori Proyek**
    ```bash
    cd arsip_surat
    ```

3.  **Install Dependencies**
    Pastikan kamu sudah punya Composer. Lalu, jalankan:
    ```bash
    composer install
    ```

4.  **Setup Environment**
    Salin file `.env.example` menjadi `.env` dan sesuaikan konfigurasi databasemu.
    ```bash
    cp .env.example .env
    ```
    Buka file `.env` dan atur:
    ```
    DB_DATABASE=arsip_surat
    DB_USERNAME=root
    DB_PASSWORD=
    ```

5.  **Generate Application Key**
    ```bash
    php artisan key:generate
    ```

6.  **Import Database**
    - Buka **phpMyAdmin**.
    - Buat database baru dengan nama `arsip_surat`.
    - Klik tab `Import`, lalu pilih file `database/arsip_surat.sql` dari dalam folder proyek.

7.  **Jalankan Server Lokal**
    Yeay, langkah terakhir!
    ```bash
    php artisan serve
    ```

8.  **Buka Aplikasi**
    Akses melalui browser favoritmu di: **[http://127.0.0.1:8000](http://127.0.0.1:8000)**

---

Screenshots 


<img width="1917" height="1033" alt="about" src="https://github.com/user-attachments/assets/de0dd8c3-8ccd-4f09-b145-a3f397480508" />
<img width="1918" height="1002" alt="create-kategori" src="https://github.com/user-attachments/assets/817f8423-d2a7-4ae9-b921-f38c5d0094dc" />
<img width="1919" height="1079" alt="create-surat" src="https://github.com/user-attachments/assets/6bc12fb5-03e3-4329-86da-3c49189e6d3d" />
<img width="1919" height="1079" alt="index-kategori" src="https://github.com/user-attachments/assets/05966282-832b-4b44-b72d-564c3f7cb67a" />
<img width="1919" height="1027" alt="index-surat" src="https://github.com/user-attachments/assets/ba2392b3-49d7-44d1-b23f-5b4049d970a5" />
<img width="1919" height="1079" alt="lihat-surat" src="https://github.com/user-attachments/assets/0ae37e50-01eb-460b-9def-9648a99103b4" />

<p align="center">
  Dibuat dengan ❤️ oleh Kevin DW
</p>
