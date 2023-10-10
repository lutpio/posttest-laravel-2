<h1>KelasPro - Kelas programming</h1>

<p>Alasan saya memilih ini karena, punya niat untuk mengajarkan programming di sekolah saya <i><strong>agar anak2 tidak terkejut dan stress karena coding dadakan saat mereka memilih jurusan SI / IF.</strong></i></p>

<hr>
<h2>Tugas 1</h2>
<hr>


<br>
<h2>Demo</h2>

<h3>Halaman Beranda</h3>

![Reference Image](/public/img/ss/beranda.png)

<p>Menampilkan halaman berisi yang diawali dengan slogan dari KelasPro <i>"BELAJAR CODING. BELAJAR MENJADI LEBIH KREATIF"</i> yang diberi <i>weight</i>-nya Bold agar mendapat perhatian dari user, kemudian Diikuti dengan tujuan dari KelasPro dibawahnya</p>

<p>Menampilkan halaman yang membuat user <i>"tertarik menggunakan".</i></p>

<br>
<h3>Halaman Kelas</h3>

![Reference Image](/public/img/ss/kelas.png)

<p>Menampilkan halaman yang berisi kelas yang tersedia pada KelasPro</p>

<br>
<h3>Halaman Kelas</h3>

![Reference Image](/public/img/ss/artikel.png)

<p>Menampilkan halaman yang berisi artikel yang dapat mempermudah user untuk belajar.</p>

<hr>
<h2>Tugas 2</h2>
<hr>

<br>
<h3>Tabel baru</h3>
<p>Ada sebanyak 3 Model baru yaitu <strong>Article, Category dan Participant</strong>. yang sebelumnya hanya User (bawaan), Speaker dan Course.</p>
<p>Setiap Model yang dibuat memiliki relasi</p>
<ul>
<li>Speaker, Memiliki relasi 1-1 dengan User dan M-1 dengan Course</li>
<li>Participant, Memiliki relasi 1-1 dengan User</li>
<li>Category, Memiliki relasi M-1 dengan Article</li>
</ul>

<br>
<h3>Controller Tambahan</h3>
<p>Ada sebanyak <strong>8 Controller yang dipakai</strong>, setiap controller dibuat berdasarkan Model dan Authentikasi.</p>
<p>Didalam controller memiliki fungsi <strong>create dan read</strong> dan menerapkan <strong>Query Builder dan ORM</strong> sesuai fungsinya.</p>

<br>
<h3>Form</h3>
<p>Ada sebanyak 6 form yang dibuat yaitu login (user), daftar (participant,user), article, category, course dan speaker. Dan setiap form ini tesimpan kedalam database <strong>pwf_kelas_programming.sqlite</strong>.</p>

<br>
<h3>Tambahan</h3>
<ol>
<li>
<p>Untuk melakukan migrasi disarakan menggunakan perintah:</p>

`php artisan migrate:fresh --seed`

<p>Untuk menambah User Super(admin). email & password tersedia di seeders</p>
</li>
<li>
<p>Jika file gambar tidak ter-upload setelah input form. coba jalankan perintah</p>

`php artisan storage:link`

</li>
</ol>