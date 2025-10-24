# data_penjualan
# 💻 Data Penjualan Barang
Project UTS Pengantar Basis Data  
Dibuat oleh: **Dinda Anggia Putri**

---

## 📌 Deskripsi
Sistem ini digunakan untuk mengelola **data penjualan barang**.  
Fitur utama:
- Menampilkan data penjualan
- Menambah data baru
- Mengedit dan menghapus data
- Menghitung total otomatis (jumlah × harga)

---

## ⚙️ Tools yang digunakan
- **PHP** untuk logika sistem
- **MySQL (phpMyAdmin)** untuk database
- **HTML + CSS** untuk tampilan web
- **XAMPP** sebagai server lokal

---

## 🧩 Struktur Database
Nama Database: `db_penjualan`  
Tabel: `penjualan`

| Kolom | Tipe Data | Keterangan |
|:--|:--|:--|
| id | INT (Primary, Auto Increment) | ID unik |
| nama_barang | VARCHAR(50) | Nama barang |
| jumlah | INT | Jumlah terjual |
| harga | INT | Harga satuan |
| total | INT | Hasil jumlah × harga |

---

## 🚀 Cara Menjalankan
1. Buka **XAMPP**, aktifkan **Apache** dan **MySQL**
2. Buka `http://localhost/phpmyadmin`, buat database `db_penjualan`
3. Import struktur tabel di atas
4. Letakkan folder project ini di `C:\xampp\htdocs\data_penjualan`
5. Jalankan di browser:  

