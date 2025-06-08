<?php
include 'koneksi.php';
if (isset($_POST['simpan'])) {
  $nama = $_POST['nama'];
  $waktu = $_POST['waktu'];
  $bukti = $_POST['bukti'];
  mysqli_query($koneksi, "INSERT INTO portofolio (nama_kegiatan, waktu, bukti) VALUES ('$nama','$waktu','$bukti')");
  header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Tambah Data</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<section>
  <h2>Tambah Portofolio</h2>
  <form method="POST" class="form-kontak">
    <label>Nama Kegiatan</label>
    <input type="text" name="nama" required>
    <label>Waktu</label>
    <input type="text" name="waktu" required>
    <label>Link Bukti (URL Gambar/File)</label>
    <input type="text" name="bukti" required>
    <button type="submit" name="simpan">Simpan</button>
  </form>
  <a href="index.php" class="contact-btn">Kembali</a>
</section>
</body>
</html>