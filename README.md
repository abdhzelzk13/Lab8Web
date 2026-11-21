# Praktikum 8 - PHP dan MySQL

## Identitas
- **Nama:** Abid Hazel Zaki
- **Mata Kuliah:** Pemrograman Web
- **Praktikum:** 8 - PHP dan MySQL
- **Repository:** Lab8Web

## Deskripsi
Praktikum ini membahas penerapan PHP dan MySQL untuk membuat aplikasi pengelolaan data barang berbasis web. Aplikasi ini menerapkan konsep CRUD (*Create, Read, Update, Delete*) untuk menambahkan, menampilkan, mengubah, dan menghapus data barang dari database.

## Tujuan Praktikum
1. Menghubungkan PHP dengan database MySQL.
2. Menampilkan data dari database ke halaman web.
3. Menambahkan data barang ke database.
4. Mengubah data barang yang sudah tersimpan.
5. Menghapus data barang dari database.

## Teknologi yang Digunakan
- PHP
- MySQL
- XAMPP
- HTML
- CSS
- Visual Studio Code


## Database
Nama database: `latihan1`

Nama tabel: `data_barang`

Struktur tabel:
| Kolom | Tipe Data | Keterangan |
|---|---|---|
| id_barang | INT | Primary Key, Auto Increment |
| kategori | VARCHAR(30) | Kategori barang |
| nama | VARCHAR(30) | Nama barang |
| gambar | VARCHAR(100) | Nama file gambar |
| harga_beli | DECIMAL(10,0) | Harga beli |
| harga_jual | DECIMAL(10,0) | Harga jual |
| stok | INT(4) | Jumlah stok |

## Langkah-Langkah Praktikum

### 1. Membuat Database
Membuat database MySQL dengan nama `latihan1` melalui phpMyAdmin, kemudian membuat tabel `data_barang` beserta kolom-kolom yang dibutuhkan.

**Screenshot:**
<!-- Tambahkan screenshot database di sini -->
[Gambar](Screenshot/Database.png)

### 2. Membuat Koneksi Database
Membuat file `koneksi.php` untuk menghubungkan aplikasi PHP dengan database MySQL.

File ini digunakan agar setiap halaman PHP dapat mengakses database `latihan1`.

**Screenshot:**
<!-- Tambahkan screenshot koneksi.php di sini -->
[Gambar](Screenshot/koneksi.png)

### 3. Menampilkan Data Barang (Read)
Membuat file `index.php` untuk mengambil dan menampilkan data barang dari tabel `data_barang`.

Data yang ditampilkan meliputi:
- Gambar barang
- Nama barang
- Kategori
- Harga beli
- Harga jual
- Stok
- Aksi untuk mengubah dan menghapus data

**Screenshot:**
<!-- Tambahkan screenshot index.php di sini -->
[Gambar](Screenshot/index.png)

### 4. Menambahkan Data Barang (Create)
Membuat file `tambah.php` untuk menambahkan data barang baru ke dalam database.

Form tambah barang berisi nama barang, kategori, harga beli, harga jual, stok, dan gambar barang.

**Screenshot:**
<!-- Tambahkan screenshot tambah.php di sini -->
[Gambar](Screenshot/tambah.png)

### 5. Mengubah Data Barang (Update)
Membuat file `ubah.php` untuk mengubah informasi barang yang sudah tersimpan di database berdasarkan ID barang.

Data yang dapat diubah meliputi nama, kategori, harga beli, harga jual, stok, dan gambar.

**Screenshot:**
<!-- Tambahkan screenshot ubah.php di sini -->
[Gambar](Screenshot/ubah.png)

### 6. Menghapus Data Barang (Delete)
Membuat file `hapus.php` untuk menghapus data barang dari database berdasarkan ID barang.

Setelah data dihapus, halaman akan kembali menampilkan daftar barang.

**Screenshot:**
<!-- Tambahkan screenshot hapus.php di sini -->
[Gambar](Screenshot/delete.png)

## Hasil Praktikum
Aplikasi pengelolaan data barang berhasil dibuat menggunakan PHP dan MySQL. Fitur menampilkan, mengubah, dan menghapus data telah dicoba. Fitur penambahan data sudah dibuat, tetapi belum dicatat sebagai hasil pengujian.

## Kesimpulan
Melalui praktikum ini, dapat dipahami cara menghubungkan PHP dengan MySQL serta menerapkan operasi CRUD dalam pengelolaan data barang. Dengan adanya aplikasi ini, data barang dapat dikelola melalui halaman web secara lebih mudah.

---
**Pemrograman Web - Praktikum 8**