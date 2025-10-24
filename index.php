<!DOCTYPE html>
<html>
<head>
  <title>Data Penjualan Barang</title>
</head>
<body>
  <h2>Data Penjualan Barang</h2>
  <a href="tambah.php">+ Tambah Data</a><br><br>

  <table border="1" cellpadding="5" cellspacing="0">
    <tr>
      <th>ID</th>
      <th>Nama Barang</th>
      <th>Jumlah</th>
      <th>Harga</th>
      <th>Total</th>
      <th>Aksi</th>
    </tr>

   <?php
// koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "db_penjualan");

if (!$koneksi) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

// ambil data dari tabel penjualan
$data = mysqli_query($koneksi, "SELECT * FROM penjualan");

if (!$data) {
  die("Query gagal: " . mysqli_error($koneksi));
}

while ($row = mysqli_fetch_array($data)) {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['nama_barang'] . "</td>";
  echo "<td>" . $row['jumlah'] . "</td>";
  echo "<td>" . $row['harga'] . "</td>";
  echo "<td>" . $row['total'] . "</td>";
  echo "<td>
          <a href='edit.php?id=" . $row['id'] . "'>Edit</a> |
          <a href='hapus.php?id=" . $row['id'] . "'>Hapus</a>
        </td>";
  echo "</tr>";
}
?>
  </table>
</body>
</html>

   