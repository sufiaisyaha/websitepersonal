<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Personal Website</title>
  <link rel="stylesheet" href="style.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <style>
    html {
      scroll-behavior: smooth;
    }
  </style>
</head>
<body>

  <!-- Navigation -->
  <nav>
    <div class="nav-container">
      <div class="logo">PORTfolio<span>FIA</span></div>
      <div class="links">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#dreams">Dreams</a>
        <a href="#portfolio">Portfolio</a>
        <a href="#opinion">Opini</a>
        <a href="#contact">Contact</a>
      </div>
    </div>
  </nav>

  <!-- Home Section -->
  <section id="home">
    <div class="main-container">
      <div class="content">
        <h1>Halo, <span> I'am Fia</span></h1>
        <div class="typewriter"> I'am a  <span></span></div>
        <p>Hi my name is Fia i am a student at Nahdlatul Ulama Sunan Giri University, i am an informatics engineering student, i aspire to be a developer and designer.</p>
        <div class="social-links">
        <a href="#"><i class="fa-brands fa-facebook"></i></a>
        <a href="#"><i class="fa-brands fa-instagram"></i></a>
        <a href="#"><i class="fa-brands fa-tiktok"></i></a>
        <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
        </div>
        <button>Hubungi Saya</button>
      </div>
      <div class="image">
        <img src="foto pake jaz.png" alt="Fia Photo"  width="400px"/>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="about">
    <div class="about_photo">
      <img src="fotokulagiii.png" alt="About Me" width="1000" />
    </div>
    <div class="about_section">
      <h1>About <span>Me</span></h1>
      <h2>Halo, <span>I'am Fia</span></h2>
      <p>
        Saya adalah seorang pelajar yang memiliki ketertarikan pada dunia teknologi, desain, dan pengembangan web. Saya suka belajar hal baru dan berbagi karya saya.
      </p>
      <button class="about_btn">Pelajari Lebih Lanjut</button>
    </div>
  </section>

  <!-- Dreams Section -->
  <section id="dreams">
    <h1 class="dreams_section">My <span>Dream</span></h1>
    <div class="card">
      <div class="dreams_card">
        <i class="fa fa-code"></i>
        <h2>Web Development</h2>
        <p>Saya membuat website yang responsif dan menarik.</p>
      </div>
      <div class="dreams_card">
        <i class="fa fa-paint-brush"></i>
        <h2>UI/UX Design</h2>
        <p>Desain antarmuka yang user-friendly dan estetis.</p>
      </div>
      <div class="dreams_card">
        <i class="fa fa-pencil"></i>
        <h2>Content Creator</h2>
        <p>Membuat konten menarik untuk berbagai platform digital.</p>
      </div>
    </div>
  </section>

  <!-- Portfolio Section -->
  <section id="portfolio">
    <h1 class="port_section">My<span> Actifity</span></h1>
    <div class="project">
      <div class="port_card">
        <img src="sertfikt it camp.jpg" alt="Project 1"/>
        <h1>Collage</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium vitae voluptates voluptatum possimus excepturi impedit. Enim, quis, cum maxime, earum architecto iste voluptatum repudiandae aspernatur autem dignissimos vitae a rem?
        </p>
      </div>
      <div class="port_card">
        <img src="sertifikat makalah.jpg" alt="Project 2"/>
        <h1>Teaching</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad corrupti nobis accusantium magnam odit obcaecati, cumque maiores unde quibusdam vitae ducimus? Dicta voluptate omnis doloremque neque ducimus sed nihil labore.</p>
      </div>
      <div class="port_card">
        <img src="sertifikat internasional.jpg" alt="Project 3"/>
        <h1>Reading the Qur'an</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum aperiam ducimus iure? Nihil asperiores dolores eos sequi ipsam autem, dicta dignissimos a facilis suscipit corrupti explicabo dolor sint nesciunt adipisci.</p>
      </div>
    </div>
  </section>

  <!-- Opinion Section -->
  <section id="opinion">
    <h1 class="opinion_section">Opinion <span>Technology</span></h1>
    <div class="opinion">
      <div class="opinion_card">
        <img src="gambr teknologi.webp" alt="teknologi">
        <h2>Teknologi Membantu Pendidikan</h2>
        <p>
          Teknologi telah merevolusi dunia pendidikan. Dengan adanya e-learning dan platform digital, proses belajar menjadi lebih fleksibel dan dapat diakses dari mana saja.
        </p>
      </div>
      <div class="opinion_card">
        <img src="gambar ai.jpg" alt="teknologi">
        <h2>Peran AI dalam Kehidupan Sehari-hari</h2>
        <p>
          Kecerdasan buatan mulai diterapkan dalam berbagai bidang seperti kesehatan, transportasi, dan komunikasi. Hal ini meningkatkan efisiensi dan kenyamanan hidup manusia.
        </p>
      </div>
      <div class="opinion_card">
        <img src="gmb teknologi dan lingkungan.webp" alt="teknologi">
        <h2>Teknologi dan Lingkungan</h2>
        <p>
          Perkembangan teknologi harus dibarengi kesadaran lingkungan. Inovasi seperti energi terbarukan dan transportasi listrik adalah langkah positif untuk masa depan bumi.
        </p>
      </div>
    </div>
  </section>
  <?php
include 'koneksi.php';

// Ambil data dari database
$query = "SELECT * FROM tb_mahasiswa";
$result = mysqli_query($koneksi, $query);

$no = 1;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hapus Data</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        tr:nth-child(even) { background-color: #f9f9f9; }
        .btn { padding: 5px 10px; cursor: pointer; text-decoration: none; display: inline-block; }
        .btn-danger { background-color: #f44336; color: white; border: none; }
        .btn-danger:hover { background-color: #d32f2f; }
        .btn-primary { background-color: #4CAF50; color: white; border: none; }
        .btn-primary:hover { background-color: #45a049; }
        .form-group { margin-bottom: 15px; }
        .form-control { width: 100%; padding: 8px; box-sizing: border-box; }
        .alert { padding: 10px; margin: 10px 0; border-radius: 4px; }
        .alert-success { background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .alert-danger { background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
    </style>
</head>
<body>
    <h2>Data Mahasiswa</h2>
    
    <?php
    // Display status messages
    if (isset($_GET['status'])) {
        if ($_GET['status'] == 'sukses') {
            echo '<div class="alert alert-success">Data berhasil diproses!</div>';
        } elseif ($_GET['status'] == 'gagal') {
            $pesan = isset($_GET['pesan']) ? $_GET['pesan'] : 'Terjadi kesalahan!';
            echo '<div class="alert alert-danger">Error: ' . htmlspecialchars($pesan) . '</div>';
        }
    }
    ?>
    
    <!-- Form Tambah Data -->
    <h3>Tambah Data Mahasiswa </h3>
    <form action="tambah.php" method="POST">
        <div class="form-group">
            <label>ID:</label>
            <input type="text" name="nim" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Nama Kegiatan:</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Waktu Kegiatan:</label>
            <textarea name="alamat" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Kegiatan</th>
            <th>Waktu Kegiatan</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc(result: $result)): ?>
        <tr>
            <td><?php echo htmlspecialchars($row['id']); ?></td>
            <td><?php echo htmlspecialchars($row['Nama_Kegiatan']); ?></td>
            <td><?php echo htmlspecialchars($row['Waktu_Kegiatan']); ?></td>
            <td>
                <a href="hapus.php?id=<?php echo urlencode($row['id']); ?>" 
                   class="btn btn-danger" 
                   onclick="return confirm('Yakin ingin menghapus data ini?')">
                    Hapus
                </a>
                <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary"
                >EDIT</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

  <!-- Contact Section -->
  <section id="contact">
    <h1 class="contact_section">Contact <span>Us</span></h1>
    <div class="contact">
      <form>
        <input type="text" placeholder="Nama Anda" required />
        <input type="email" placeholder="Email Anda" required />
        <textarea placeholder="Pesan Anda" rows="5" required></textarea>
        <button type="submit">Kirim</button>
      </form>
    </div>
  </section>
  <footer class="footer">
  <div class="footer-content">
    <div class="footer-logo">
      <h2>PORTfolio Fia</h2>
      <p>© 2025 Sufi Aisyah Ahadiyati. All rights reserved.</p>
    </div>
    <div class="footer-links">
      <a href="#home">Home</a>
      <a href="#about">About</a>
      <a href="#dreams">Dreams</a>
      <a href="#portfolio">Portfolio</a>
      <a href="#opinion">Opinion</a>
      <a href="#contact">Contact</a>
    </div>
  </div>
  <div class="footer-social">
    <p><i class="fas fa-envelope"></i> <a href="mailto:"sufiaisyahahadiyati@gmail.com>sufiaisyahahadiyati@gmail.com</a></p>
    <p><i class="fab fa-instagram"></i> <a href="https://www.instagram.com/sufiasyhahdyt?igsh=ajE3dDYxaGE1aDV2" target="_blank">@sufiasyhahdyt</a></p>
  </div>
</footer>
</footer>
  </body>
</html>
  