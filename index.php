<?php
require_once 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./assets/styles/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <title>EDUTECH</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <header class="header-section">
    <nav class="navbar">
      <div class="logo">EDUTECH</div>
      <ul class="nav-links">
        <li><a href="#pendaftaran">Pendaftaran</a></li>
        <li><a href="#Testimoni">Testimoni</a></li>
        <li><a href="#tentang">Tentang</a></li>
        <li><a href="#kontak" class="cta">Kontak</a></li>
      </ul>
    </nav>

    <div class="hero-content">
      <h1>EDUTECH</h1>
      <p>Cara mudah belajar dimana saja dan kapan saja</p>
      <a href="#" class="cta-button">Mulai Sekarang</a>
    </div>
  </header>
  <section class="mapel-section">
    <h2>Mapel yang dapat diambil</h2>
    <div class="mapel-container">
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <div class="img-container">
              <img src="assets/images/Front.jpg" alt="Materi">
            </div>
            <h3>Materi Front End</h3>
            <p>Cocok untuk siswa SMK dan mahasiswa jurusan teknologi.</p>
          </div>
          <div class="flip-card-back">
            <h3>Penjelasan Lengkap</h3>
            <p>Materi mencakup HTML, CSS, JavaScript, serta praktik UI/UX dasar.</p>
          </div>
        </div>
      </div>

      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <div class="img-container">
              <img src="assets/images/math.jpg" alt="Materi">
            </div>
            <h3>Materi Matematika</h3>
            <p>Dari Dasar Hingga Lanjutan belajar jadi mudah.</p>
          </div>
          <div class="flip-card-back">
            <h3>Penjelasan Lengkap</h3>
            <p>Matematika berperan penting dalam kehidupan sehari-hari dan berbagai disiplin ilmu, seperti fisika,
              kimia, ekonomi, dan komputer. </p>
          </div>
        </div>
      </div>

      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <div class="img-container">
              <img src="assets/images/english2.jpg" alt="Materi">
            </div>
            <h3>Materi Bahasa Inggris</h3>
            <p>Kuasai Grammar,speaking,dan listening dengan mudah.</p>
          </div>
          <div class="flip-card-back">
            <h3>Penjelasan Lengkap</h3>
            <p>Bahasa Inggris adalah bahasa ibu ketiga yang paling banyak dituturkan di seluruh dunia, setelah bahasa
              Mandarin dan Spanyol.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="content-section">
    <div class="two-column">
      <div class="content-text">
        <h3>Lakukan dimana saja</h3>
        <p>Belajar dari gadget yang dapat diakses melalui HP, notebook,dan perangkat lainnya kapan dimana saja.</p>
        <button class="btn">Button</button>
        <button class="btn btn-secondary">Secondary button</button>
      </div>
      <div class="content-image">
        <img src="assets/images/r (1).jpg" alt="Student learning">
      </div>
    </div>

    <div class="two-column">
      <div class="content-image">
        <img src="assets/images/r (2).jpg" alt="Learning anytime">
      </div>
      <div class="content-text">
        <h3>Lanjut kapan saja</h3>
        <p>Dengan sistem video yang dapat di pause kapan saja dan dimana saja sehingga membuat belajar jadi lebih
          nyaman.</p>
        <button class="btn">Button</button>
        <button class="btn btn-secondary">Secondary button</button>
      </div>
    </div>
  </section>

  <section class="content-section">
    <h2 class="section-title">Kami punya 3 tingkatan kelas</h2>
    <div class="course-grid">
      <div class="course-card">
        <div class="course-image">
          <img src="assets/images/smp.jpg" alt="Kelas pemula">
        </div>
        <div class="course-content">
          <h4>Paket ESEMPEH</h4>
          <p>Cocok untuk kamu yang masih ESEMPEH</p>
          <div class="price">$19.99</div>
        </div>
      </div>

      <div class="course-card">
        <div class="course-image">
          <img src="assets/images/sma.jpg" alt="Kelas menengah">
        </div>
        <div class="course-content">
          <h4>Paket SMA</h4>
          <p>khusus untuk siswa SMA</p>
          <div class="price">$39.99</div>
        </div>
      </div>

      <div class="course-card">
        <div class="course-image">
          <img src="assets/images/kuliah.jpg" alt="Kelas lanjutan">
        </div>
        <div class="course-content">
          <h4>Paket UNIVERSITAS</h4>
          <p>Khusus untuk kamu tingkat Mahasiswa</p>
          <div class="price">$59.99</div>
        </div>
      </div>
    </div>
  </section>


  <section class="content-section">
    <h2 class="section-title">Pencapaian Pelajar EduTech</h2>

    <div class="two-column" style="margin-bottom: 40px;">
      <div class="content-image">
        <img src="assets/images/char4.jpg" alt="Frontend coding">
      </div>
      <div class="content-text">
        <h3>Frontend coding</h3>
        <p>Pernah jadi IT Developer pada tahun ke 3</p>
        <p>Peraih nilai tertinggi dan berhasil meraih juara dengan
          website inovatif yaitu schedule tracker yang dapat digunakan sebagai growth media..</p>
      </div>
    </div>

    <div class="two-column">
      <div class="content-text">
        <h3>Pidato Bahasa Inggris</h3>
        <p>Mengajak kamu | Pidato Bahasa Inggris</p>
      </div>
      <div class="content-image">
        <img src="assets/images/char3.jpg" alt="English speech">
      </div>
    </div>
  </section>


  <section class="content-section" id="Testimoni">
    <h2 class="section-title">Apa kata Mereka?</h2>
    <div class="testimonial-grid">
      <div class="testimonial-card">
        <div class="testimonial-avatar">
          <img src="assets/images/char4.jpg" alt="Student">
        </div>
        <p>"Dari saya sudah banyak belajar matematika, tapi opsi dari EduTech merupakan yang paling berkesan" — Ara
          Mahasiswa Teknik Informatika ITS</p>
      </div>

      <div class="testimonial-card">
        <div class="testimonial-avatar">
          <img src="assets/images/char5.png" alt="Student">
        </div>
        <p>"Fitur kelas online nya mudah digunakan, dan jadwal bejalamar tidak bentrok dengan aktivitas" — Mini, Siswi
          SMA kelas 11</p>
      </div>

      <div class="testimonial-card">
        <div class="testimonial-avatar">
          <img src="assets/images/char3.jpg" alt="Student">
        </div>
        <p>"Setelah sering nilai privat senior di sekolah, belajar bersama merasa mudah banget. Highly recommended sama
          yang lain" — Ryo Siswa SMA kelas 12</p>
      </div>
    </div>
  </section>


  <section class="content-section" id="tentang">
    <h2 class="section-title">Fun fact</h2>
    <div class="two-column">
      <div class="content-text">
        <h3>🎯 Fun Fact #1</h3>
        <p>Terdapat fungsi yang memudahkan perangkat & Paledysics — dengan dengan seluler 3 joni yang dibutuhkan.
          Semakin sering belajar, semakin banyak "rek pengalaman" yang kamu itu.</p>
      </div>
      <div class="content-image">
        <img src="assets/images/char3.jpg" alt="Fun fact illustration">
      </div>
    </div>

    <div class="two-column">
      <div class="content-image">
        <img src="assets/images/Stelle.jpg" alt="Student studying">
      </div>
      <div class="content-text">
        <h3>📚 Fun Fact #2</h3>
        <p>Belajar sebekan tidak harus membosankan mempelajokat. Dengan menerapkan konsep "offline" dan bahkan otakn
          memproses informasi saat kamu tidur!</p>
      </div>
    </div>
  </section>


  <section class="formula-section">
    <h2 class="section-title">Formula 3B Bantu Kamu Mencapai Target Akademikmu!</h2>
    <div class="formula-grid">
      <div class="formula-item">
        <div class="formula-icon">📚</div>
        <div class="formula-label">Belajar</div>
      </div>
      <div class="formula-item">
        <div class="formula-icon">💪</div>
        <div class="formula-label">Berlatih</div>
      </div>
      <div class="formula-item">
        <div class="formula-icon">🏆</div>
        <div class="formula-label">Bertanding</div>
      </div>
    </div>
  </section>


  <section class="content-section" id="kontak">
    <h2 class="section-title">Hubungi Kami</h2>
    <div class="contact-form">
      <form id="contactForm">
        <div class="form-group">
          <label for="nama">Nama:</label>
          <input type="text" id="nama" name="nama" required>
        </div>

        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
          <label for="pesan">Pesan:</label>
          <textarea id="pesan" name="pesan" required></textarea>
        </div>

        <button type="submit" class="btn" style="width: 100%;">Kirim Pesan</button>
      </form>
    </div>
  </section>

  <footer>
    <div class="footer-content">
      <div class="footer-section">
        <h3>EDUTECH</h3>
        <p>Platform pembelajaran online terdepan yang membantu siswa mencapai prestasi akademik terbaik dengan metode
          pembelajaran yang inovatif dan efektif.</p>
        <div class="social-links">
          <a href="#" title="Facebook">📘</a>
          <a href="#" title="Instagram">📷</a>
          <a href="#" title="Twitter">🐦</a>
          <a href="#" title="YouTube">📺</a>
        </div>
      </div>

      <div class="footer-section">
        <h3>Kursus</h3>
        <ul>
          <li><a href="#">Matematika</a></li>
          <li><a href="#">Bahasa Inggris</a></li>
          <li><a href="#">Frontend Development</a></li>
          <li><a href="#">Semua Kursus</a></li>
        </ul>
      </div>

      <div class="footer-section">
        <h3>Perusahaan</h3>
        <ul>
          <li><a href="#">Tentang Kami</a></li>
          <li><a href="#">Karir</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Press</a></li>
        </ul>
      </div>

      <div class="footer-section">
        <h3>Bantuan</h3>
        <ul>
          <li><a href="#">Pusat Bantuan</a></li>
          <li><a href="#">Kontak</a></li>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Kebijakan Privasi</a></li>
        </ul>
      </div>
    </div>

    <div class="footer-bottom">
      <p>© Copyright 2024, EduTech. All Rights Reserved | Dibuat dengan ❤️ untuk pendidikan Indonesia</p>
    </div>
  </footer>
</body>
<script>
  document.getElementById("contactForm").addEventListener("submit", function (e) {
    e.preventDefault(); // cegah reload halaman

    const formData = new FormData(this);

    fetch("kirim-pesan.php", {
      method: "POST",
      body: formData
    })
      .then(res => res.json())
      .then(data => {
        if (data.status === "success") {
          Swal.fire("Berhasil!", data.message, "success");
        } else {
          Swal.fire("Gagal!", data.message, "error");
        }
      })
      .catch(err => {
        Swal.fire("Error", "Terjadi kesalahan teknis.", "error");
      });
  });
</script>

</html>