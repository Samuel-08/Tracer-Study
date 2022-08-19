# Pemula Aplikasi CodeIgniter 4

 ## Apa itu CodeIgniter?
  
 CodeIgniter adalah framework web full-stack PHP yang ringan, cepat, fleksibel dan aman.

 Informasi lebih lanjut dapat ditemukan di [situs resmi] (http://codeigniter.com).
 Repositori ini menyimpan starter aplikasi yang dapat diinstal komposer.
 
 Itu telah dibangun dari
[repositori pengembangan](https://github.com/codeigniter4/CodeIgniter4). 
 Informasi lebih lanjut tentang rencana untuk versi 4 dapat ditemukan di [pengumuman](http://forum.codeigniter.com/thread-62615.html) di forum kami
 Panduan pengguna yang sesuai dengan versi kerangka kerja ini dapat ditemukan
[di sini](https://codeigniter4.github.io/userguide/).
 ## Instalasi & pembaruan kami
`composer create-project codeigniter4/appstarter` lalu `composer update` kapanpun

 ada rilis baru dari kerangka kerja.

 Saat memperbarui, periksa catatan rilis untuk melihat apakah ada perubahan yang mungkin perlu Anda terapkan

 ke folder `aplikasi` Anda. File yang terpengaruh dapat disalin atau digabungkan dari
  `vendor/codeigniter4/framework/app`.
 
  ## Mempersiapkan
 
  Salin `env` ke `.env` dan sesuaikan untuk aplikasi Anda, khususnya baseURL
  dan pengaturan basis data apa pun.
 
  ## Perubahan Penting dengan index.php
 
  `index.php` tidak lagi berada di root proyek! Itu telah dipindahkan ke dalam folder *publik*,
  untuk keamanan yang lebih baik dan pemisahan komponen.

  Ini berarti Anda harus mengonfigurasi server web Anda untuk "menunjuk" ke folder *publik* proyek Anda, dan
  bukan ke root proyek. Praktik yang lebih baik adalah mengonfigurasi host virtual untuk menunjuk ke sana. Praktik yang buruk adalah mengarahkan server web Anda ke root proyek dan berharap untuk memasukkan *public/...*, sebagai sisa logika Anda dan
  kerangka terpapar.
  kami
  **Silakan** baca panduan pengguna untuk penjelasan yang lebih baik tentang cara kerja CI4!
 
  ## Manajemen Repositori
 
 Kami menggunakan masalah GitHub, di repositori utama kami, untuk melacak **BUGS** dan untuk melacak paket kerja **DEVELOPMENT** yang disetujui.
 
 Kami menggunakan [forum](http://forum.codeigniter.com)  untuk memberikan DUKUNGAN dan berdiskusi
