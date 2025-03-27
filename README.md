# SmartVentory
## Inventory Barang Berbasis Web

---

## Tentang SmartVentory
SmartVentory adalah aplikasi berbasis web yang dirancang untuk mengelola dan mencatat keluar masuk barang di masing-masing gudang dalam suatu perusahaan. Sistem ini mencakup pencatatan barang masuk dari supplier serta pencatatan barang keluar yang diajukan oleh petugas dan disetujui oleh admin.

## Fitur Website

### 1. Fitur Login
- Menggunakan enkripsi **MD5** untuk keamanan password.
- Admin dan Petugas memiliki halaman login masing-masing.

### 2. Fitur Admin
- Melihat statistik data melalui dashboard.
- Mengelola data pengguna:
  - Melihat, menambah, menghapus, dan mengubah data admin.
  - Melihat, menambah, menghapus, dan mengubah data petugas.
- Mengelola data supplier:
  - Melihat, menambah, menghapus, dan mengubah data supplier.
- Mengelola data gudang:
  - Melihat, menambah, dan menghapus data rak penyimpanan.
- Mengelola data barang:
  - Melihat, menambah, menghapus, dan mengubah data barang.
- Menyetujui pengajuan pengeluaran barang dari petugas.

### 3. Fitur Petugas
- Melihat statistik data melalui dashboard.
- Menambahkan stok barang.
- Mengajukan permintaan pengeluaran barang kepada admin.

---

## Login Default

### 1. Login Admin
- **Username:** `admin`
- **Password:** `admin`

### 2. Login Petugas
- **Username:** `petugas`
- **Password:** `petugas`

---

## Petunjuk Penggunaan
**Catatan Penting:**
Sebelum mengimpor database, pastikan Anda telah membuat database dengan nama **`inventory`** sesuai dengan file yang terdapat dalam folder **DATABASE**.

---

## Teknologi yang Digunakan
- **Backend:** PHP & MySQL
- **Frontend:** HTML, CSS, JavaScript
- **Keamanan:** MD5 untuk hashing password
- **Manajemen Data:** MySQL untuk penyimpanan data

---

## Cara Instalasi
1. **Clone Repository**
   ```bash
   git clone https://github.com/username/smartventory.git
   ```
2. **Impor Database**
   - Buka **phpMyAdmin** atau MySQL CLI.
   - Buat database dengan nama `inventory`.
   - Impor file SQL yang ada di folder **DATABASE**.
3. **Konfigurasi Koneksi Database**
   - Edit file konfigurasi database di `config.php` sesuai dengan pengaturan server Anda.
4. **Menjalankan Aplikasi**
   - Jalankan server lokal menggunakan **XAMPP/WAMP/LAMP**.
   - Akses aplikasi melalui browser di `http://localhost/smartventory`.

---

## Lisensi
Proyek ini dilisensikan di bawah [MIT License](LICENSE). Anda bebas menggunakan dan memodifikasi sesuai kebutuhan.

---

## Kontribusi
Kontribusi sangat disambut! Silakan buat **pull request** atau ajukan **issue** untuk perbaikan atau penambahan fitur.

---

Terima kasih telah menggunakan **SmartVentory**! 🚀
