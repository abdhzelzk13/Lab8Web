
<?php
include 'koneksi.php';

$result = mysqli_query($conn, "SELECT * FROM data_barang");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Barang</title>
</head>
<body>

<h2>Data Barang</h2>

<a href="tambah.php">Tambah Barang</a>

<br><br>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Nama Barang</th>
        <th>Gambar</th>
        <th>Kategori</th>
        <th>Harga Beli</th>
        <th>Harga Jual</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
    <tr>
        <td><?= $row['id_barang']; ?></td>
        <td><?= htmlspecialchars($row['nama']); ?></td>

        <td>
            <img src="img/<?= htmlspecialchars($row['gambar']); ?>"
                 width="100"
                 height="100"
                 style="object-fit: contain;">
        </td>

        <td><?= htmlspecialchars($row['kategori']); ?></td>
        <td><?= $row['harga_beli']; ?></td>
        <td><?= $row['harga_jual']; ?></td>
        <td><?= $row['stok']; ?></td>

        <td>
            <a href="ubah.php?id=<?= $row['id_barang']; ?>">Ubah</a>
            <br>
            <a href="hapus.php?id=<?= $row['id_barang']; ?>"
               onclick="return confirm('Yakin ingin menghapus barang ini?')">
                Hapus
            </a>
        </td>
    </tr>
    <?php endwhile; ?>

</table>

</body>
</html>
