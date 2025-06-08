<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM portofolio WHERE id='$id'");
$d = mysqli_fetch_array($data);
if (isset($_POST['update'])) {
  $nama = $_POST['nama'];
  $waktu = $_POST['waktu'];
  $bukti = $_POST['bukti'];
  mysqli_query($koneksi, "UPDATE portofolio SET nama_kegiatan='$nama', waktu='$waktu', bukti='$bukti' WHERE id='$id'");
  header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Edit Data</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<section>
  <h2>Edit Portofolio</h2>
  <form method="POST" class="form-kontak">
    <label>Nama Kegiatan</label>
    <input type="text" name="nama" value="<?php echo $d['nama_kegiatan']; ?>" required>
    <label>Waktu</label>
    <input type="text" name="waktu" value="<?php echo $d['waktu']; ?>" required>
    <label>Link Bukti</label>
    <input type="text" name="bukti" value="<?php echo $d['bukti']; ?>" required>
    <button type="submit" name="update">Update</button>
  </form>
  <a href="index.php" class="contact-btn">Kembali</a>
</section>
</body>
</html>