Nama : Rahmat

NIM : 312010229

Kelas : TI.20.A.2

# Lab11Web

## Code Igniter

### Konfigurasi web server

Sebelum memulai menggunakan Framework Codeigniter, perlu dilakukan konfigurasi
pada webserver. Beberapa ekstensi PHP perlu diaktifkan untuk kebutuhan
pengembangan Codeigniter 4.
Untuk mengaktifkan ekstentsi, melalu XAMPP Control Panel, pada bagian
Apache klik Config kemudian klik PHP.ini dan pada bagian extention hilangkan tanda titik koma (;) kemudian simpan dan restart kembali apachenya.

### Instalasi Codeigniter 4

Untuk instalasi CI 4 ada cara manual dan dengan menggunakan composer, untuk praktikum kali ini menggunakan cara manual.

Ini langkah-langkahnya :

1. Unduh Codeigniter dari website https://codeigniter.com/download
2. Extrak file zip Codeigniter ke direktori htdocs/lab11_ci.
3. Ubah nama direktory framework-4.x.xx menjadi ci4.
4. Buka browser dengan alamat http://localhost/lab11_ci/ci4/public/

Seperti ini tampilannya di browser.

![Gambar 1](screenshot/ss1a.PNG)

### Menjalankan CLI (Command Line Interface)

Untuk mengakses CLI buka terminal/command prompt. Arahkan lokasi direktori sesuai dengan direktori kerja project dibuat
(xampp/htdocs/lab11_ci/ci4/) dengan menggunakan (cd c:\xampp\htdocs\lab11_ci\ci4) seperti gambar dibawah.

![Gambar 2](screenshot/ss1b.png)

Untuk memudahkan mengetahui jenis errornya, maka perlu diaktifkan mode debugging dengan mengubah nilai konfigurasi
pada environment variable CI_ENVIRONMENT menjadi development dan Ubah nama file env menjadi .env.

Untuk mencoba error tersebut, ubah kode pada file app/Controller/Home.php hilangkan titik koma pada akhir kode. Contoh error yang terjadi seperti gambar dibawah.

![Gambar 3](screenshot/ss1c.png)

### Routing dan Controller

Router terletak pada file app/config/Routes.php

**Membuat Route Baru**

Tambahkan kode berikut.

![Gambar 4](screenshot/ss2a.png)

Untuk mengetahui route yang ditambahkan sudah benar, buka CLI dan jalankan perintah **_php spark routes_**

![Gambar 5](screenshot/ss2b.png)

Sebelum akses, aktifkan dahulu servernya dengan membuka cmd kemudian ketikkan **php spark serve** seperti gambar dibawah

![Gambar](screenshot/sserver.png)

Kemudian coba akses route yang telah dibuat dengan mengakses alamat url http://localhost:8080/about Ketika di akses maka akan muncul tampilan error 404 not found, karena file tersebut belum ada isinya.

![Gambar 6](screenshot/ss2c.png)

Langkah selanjutnya yaitu membuat controller page

**Membuat Controller**

Buat file baru dengan nama page.php

Ini kodenya

![Gambar 7](screenshot/ss3a.png)

Selanjutnya refresh Kembali browser, maka akan ditampilkan hasilnya yaotu halaman
sudah dapat diakses

![Gambar 8](screenshot/ss3b.png)

### Auto Routing

Tambahkan method baru pada Controller Page seperti berikut.

![Gambar 9](screenshot/ss4a.png)

Method ini belum ada pada routing, sehingga cara mengaksesnya dengan menggunakan
alamat: http://localhost:8080/page/tos

![Gambar 10](screenshot/ss4b.png)

### Membuat View

Buat file baru dengan nama about.php pada direktori view (app/view/about.php) kemudian isi
kodenya seperti berikut.

![Gambar 11](screenshot/ss5a.png)

Ubah method about pada class Controller Page menjadi seperti berikut:

![Gambar 12](screenshot/ss5b.png)

Ini tampilannya di browser

![Gambar 13](screenshot/ss5c.png)

### Membuat Layout Web dengan CSS

Buat file css pada direktori public dengan nama style.css(filenya di ambil dari tugas sebelumnya)

Kemudian buat folder template pada direktori view kemudian buat file header.php dan
footer.php

Ini file header.php

![Gambar 14](screenshot/ss6a.png)

Ini file footer.php

![Gambar 15](screenshot/ss6b.png)

Kemudian ubah fileabout.php seperti berikut.

![Gambar 16](screenshot/ss6c.png)

Lalu refresh tampilan pada alamat http://localhost:8080/about

![Gambar 17](screenshot/ss6d.png)

Ini tampilan ketika di klik pada navigasi Artikel.

![Gambar 18](screenshot/ss6e.png)

Ini tampilan ketika di klik pada navigasi About.

![Gambar 19](screenshot/ss6f.png)

Ini tampilan ketika di klik pada navigasi Kontak.

![Gambar 20](screenshot/ss6g.png)

# Lanjutan praktikum

# Membuat Database: Studi Kasus Data Artikel

Buka Xampp kemudian aktifkan Apache dan Mysql, setelah itu buka browser dengan mengetikan localhost/phpmyadmin.

### Membuat Database

Gunakan syntax **CREATE DATABASE lab_ci4;** sehingga seperti gambar di bawah

![Gambar 1](screenshot2/ss1a.png)

### Membuat Tabel

Gunakan syntax

**CREATE TABLE artikel (**

**id INT(11) auto_increment,**

**judul VARCHAR(200) NOT NULL,**

**isi TEXT,**

**gambar VARCHAR(200),**

**status TINYINT(1) DEFAULT 0,**

**slug VARCHAR(200),**

**PRIMARY KEY(id)**

**);**

### Konfigurasi koneksi database

Konfigurasi dapat dilakukan dengan du acara, yaitu pada file app/config/database.php
atau menggunakan file .env. Pada praktikum ini kita gunakan konfigurasi pada file .env.

![Gambar 2](screenshot2/ss1b.png)

### Membuat Model

Buat file baru pada direktori app/Models dengan nama ArtikelModel.php

Ini kodenya

![Gambar 3](screenshot2/ss2a.png)

### Membuat Controller

Buat Controller baru dengan nama Artikel.php pada direktori app/Controllers.

Ini kodenya

![Gambar 4](screenshot2/ss2b.png)

### Membuat View

Buat direktori baru dengan nama artikel pada direktori app/views, kemudian buat file
baru dengan nama index.php.

Seperti ini kodenya

![Gambar 5](screenshot2/ss2c.png)

Ini tampilannya di browser dengan mengakses url http://localhost:8080/artikel

![Gambar 6](screenshot2/ss2d.png)

Dikarenakan belum ada data, maka isi terlebih dahulu datanya

Ini syntaxnya

INSERT INTO artikel (judul, isi, slug) VALUE

('Artikel pertama', 'Lorem Ipsum adalah contoh teks atau dummy dalam industri
percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi
standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak
dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah
buku contoh huruf.', 'artikel-pertama'),

('Artikel kedua', 'Tidak seperti anggapan banyak orang, Lorem Ipsum bukanlah
teks-teks yang diacak. Ia berakar dari sebuah naskah sastra latin klasik dari
era 45 sebelum masehi, hingga bisa dipastikan usianya telah mencapai lebih
dari 2000 tahun.', 'artikel-kedua');

Refresh kembali browser, sehingga akan ditampilkan hasilnya.

![Gambar 7](screenshot2/ss3b.png)

### Membuat Tampilan Detail Artikel

Tambahkan fungsi baru pada Controller Artikel dengan nama view().

Ini kodenya

![Gambar 8](screenshot2/ss4a.png)

### Membuat View Detail

Buat view baru untuk halaman detail dengan nama app/views/artikel/detail.php.

![Gambar 9](screenshot2/ss4b.png)

### Membuat Routing untuk artikel detail

Buka Kembali file app/config/Routes.php, kemudian tambahkan routing untuk artikel
detail.

![Gambar 10](screenshot2/ssrout.png)

Ini tampilan ketika di klik artikelnya

Artikel pertama
![Gambar 11](screenshot2/ss4d.png)

Artikel kedua
![Gambar 12](screenshot2/ss4e.png)

### Membuat Menu Admin

Buat method baru pada Controller Artikel dengan nama admin_index().

![Gambar 13](screenshot2/ss5a.png)

Buat view untuk tampilan admin dengan nama admin_index.php

![Gambar 14](screenshot2/ss5b.png)
![Gambar 15](screenshot2/ss5c.png)

Tambahkan routing untuk menu admin seperti berikut:

![Gambar 16](screenshot2/ss5d.png)

Akses menu admin dengan url http://localhost:8080/admin/artikel

![Gambar 17](screenshot2/ss5g.png)

### Menambah Data Artikel

Tambahkan fungsi/method baru pada Controller Artikel dengan nama add().

![Gambar 18](screenshot2/ss6aa.png)

Kemudian buat view untuk form tambah dengan nama form_add.php

![Gambar 19](screenshot2/ss6bb.png)

Ini tampilannya di browser

![Gambar 20](screenshot2/ss6c.png)

### Mengubah Data

Tambahkan fungsi/method baru pada Controller Artikel dengan nama edit().

![Gambar 21](screenshot2/ss7a.png)

Kemudian buat view untuk form tambah dengan nama form_edit.php

![Gambar 22](screenshot2/ss7b.png)

Ini tampilannya di browser

![Gambar 23](screenshot2/ss7c.png)

### Menghapus Data

Tambahkan fungsi/method baru pada Controller Artikel dengan nama delete().

![Gambar 24](screenshot2/ss8a.png)
