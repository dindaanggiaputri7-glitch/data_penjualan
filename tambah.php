<!DOCTYPE html>
<html>
<head>
  <title>Tambah Data Penjualan</title>
</head>
<body>
  <h2>Tambah Data Penjualan</h2>
  <a href="index.php">Kembali</a><br><br>

  <form method="post" action="">
    <table>
      <tr>
        <td>Nama Barang</td>
        <td><input type="text" name="nama_barang" required></td>
      </tr>
      <tr>
        <td>Jumlah</td>
        <td><input type="number" name="jumlah" required></td>
      </tr>
      <tr>
        <td>Harga</td>
        <td><input type="number" name="harga" required></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" name="submit" value="Simpan"></td>
      </tr>
    </table>
  </form>

  <?php
  if (isset($_POST['submit'])) {
    $koneksi = mysqli_connect("localhost", "root", "", "db_penjualan");

    $nama_barang = $_POST['nama_barang'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];
    $total = $jumlah * $harga;

    $query = "INSERT INTO penjualan (nama_barang, jumlah, harga, total) 
              VALUES ('$nama_barang', '$jumlah', '$harga', '$total')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
      echo "<script>alert('Data berhasil disimpan!'); window.location='index.php';</script>";
    } else {
      echo "<script>alert('Gagal menyimpan data!');</script>";
    }
  }
  ?>
</body>
</html>
