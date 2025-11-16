# 📘 Tugas Akhir 4 Pemrograman Web — PHP & MANIPULASI FORM

## 📌 Deskripsi Proyek

Tugas Akhir ini merupakan implementasi dari **PHP & MANIPULASI FORM** menggunakan **PHP Native** dan **Session** sebagai media penyimpanan data sementara.

Website ini memiliki fitur:

* ✔ **Tambah Kontak**
* ✔ **Tampilkan Daftar Kontak**
* ✔ **Edit Kontak**
* ✔ **Hapus Kontak**
* ✔ **Session Management (Login & Logout)**


---

## 📁 Struktur File

```
project/
│── index.php       → Menampilkan daftar kontak
│── add.php         → Form tambah kontak
│── edit.php        → Form edit kontak
│── delete.php      → Hapus kontak berdasarkan ID
│── login.php       → Halaman login
│── logout.php      → Menghapus session login
│── style.css       → Style tampilan
│── README.md       → Dokumentasi proyek
```

---

## 🧩 Cara Kerja Sistem

### 1. Login

Pengguna harus login terlebih dahulu untuk mengakses halaman utama. Session digunakan untuk memverifikasi status login.

### 2. Menambah Kontak

Pengguna dapat menambahkan nama dan nomor telepon menggunakan form. Data akan disimpan dalam session:


### 3. Edit Kontak

Setiap data dapat diedit melalui halaman edit berdasarkan ID.

### 4. Hapus Kontak

Data dapat dihapus, dan ID akan dirapikan kembali agar tetap urut.

### 5. Logout

Session login dihapus dan pengguna kembali ke halaman login.

---


## 🖼 Screenshots 


### 1. Halaman Login

<img width="1920" height="1080" alt="Screenshot 2025-11-16 230303" src="https://github.com/user-attachments/assets/c1868b98-0bf9-4fec-944d-13e9a293e37d" />


### 2. Halaman Daftar Kontak

<img width="1920" height="1080" alt="Screenshot 2025-11-16 230347" src="https://github.com/user-attachments/assets/9df896ea-678b-47e0-89fd-5739d0a1bfea" />


### 3. Halaman Tambah Kontak

<img width="1920" height="1080" alt="Screenshot 2025-11-16 230329" src="https://github.com/user-attachments/assets/b9db089d-b40e-45c6-8e29-0219efe19715" />


### 4. Halaman Edit Kontak

<img width="1920" height="1080" alt="Screenshot 2025-11-16 230359" src="https://github.com/user-attachments/assets/2b2dc4b7-912f-4d17-b40e-ccf9e7f2ca35" />


---

## 🚀 Cara Menjalankan

1. Copy semua file ke folder `htdocs` (menggunakan XAMPP).
2. Jalankan Apache.
3. Buka browser dan masuk ke:

```
http://localhost/TugasAkhir4/login.php
```

4. Login menggunakan:

```
Username : admin
Password : 123
```

5. Sistem siap digunakan.

---



