# Tugas Rutin 11 - E-Commerce DB + Secure Auth

## Identitas

- Nama: Anandita Wulanda Limbong
- NIM: 4252250003
- Program Studi: Ilmu Komputer
- Kelas: PSIK25C
- Mata Kuliah: Pemrograman Web

## Deskripsi

Tugas Rutin 11 merupakan pengembangan aplikasi berbasis Laravel yang
mengimplementasikan database e-commerce menggunakan Eloquent ORM serta
sistem autentikasi dan otorisasi pengguna.

Aplikasi ini memiliki beberapa fitur utama seperti database produk,
kategori, pesanan, keranjang, pembayaran, autentikasi menggunakan
Laravel Breeze, multi-role, middleware, dan policy authorization.

## Teknologi

- Laravel 12
- PHP 8.2
- MySQL
- Laravel Breeze
- Eloquent ORM
- Vite
- Tailwind CSS

## Fitur

### 1. Database & Eloquent

- 7 tabel utama e-commerce
- Foreign Key dan relasi antar tabel
- Factory dan Seeder
- 50+ data produk
- Eloquent Model dan Relationships
- Query Scope `available`
- Eager Loading

### 2. Authentication

- Register
- Login
- Logout
- Dashboard
- Profile

Authentication menggunakan Laravel Breeze.

### 3. Multi Role

Aplikasi memiliki tiga role pengguna:

- Admin
- Editor
- User

Setiap role memiliki hak akses yang berbeda.

### 4. Middleware

Middleware digunakan untuk membatasi akses berdasarkan role.

Contoh:

- Admin dapat mengakses halaman Admin.
- Editor dapat mengakses halaman Editor.
- User tidak dapat mengakses halaman Admin.

### 5. Policy Authorization

`ProductPolicy` digunakan untuk mengatur hak akses terhadap produk.

- Admin dapat Edit dan Delete.
- Editor dapat Edit tetapi tidak dapat Delete.
- User tidak dapat melakukan Edit maupun Delete.

## Database

Database yang digunakan:

```text
db_ecommerce
Tabel utama:

categories
products
orders
order_items
carts
cart_items
payments
Pengujian

Pengujian dilakukan terhadap beberapa kondisi:

Admin mengakses halaman Admin
Admin mengakses halaman Editor
Editor mengakses fitur Edit Product
Editor mencoba Delete Product
User mencoba mengakses halaman Admin
Pengguna yang belum login mencoba mengakses halaman yang dilindungi