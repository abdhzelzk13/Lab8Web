
<?php
include "koneksi.php";

$id = $_GET['id'];

$sql = "SELECT * FROM data_barang WHERE id_barang = '$id'";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga_beli = $_POST['harga_beli'];
    $harga_jual = $_POST['harga_jual'];
    $stok = $_POST['stok'];

    $sql = "UPDATE data_barang SET
        nama = '$nama',
        kategori = '$kategori',
        harga_beli = '$harga_beli',
        harga_jual = '$harga_jual',
        stok = '$stok'
        WHERE id_barang = '$id'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal mengubah data: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Ubah Barang</title>
</head>
<body>

<h2>Ubah Data Barang</h2>

<form method="POST">
    <p>Nama Barang:</p>
    <input type="text" name="nama"
        value="<?= htmlspecialchars($data['nama']); ?>" required>

    <p>Kategori:</p>
    <input type="text" name="kategori"
        value="<?= htmlspecialchars($data['kategori']); ?>" required>

    <p>Harga Beli:</p>
    <input type="number" name="harga_beli"
        value="<?= $data['harga_beli']; ?>" required>

    <p>Harga Jual:</p>
    <input type="number" name="harga_jual"
        value="<?= $data['harga_jual']; ?>" required>

    <p>Stok:</p>
    <input type="number" name="stok"
        value="<?= $data['stok']; ?>" required>

    <br><br>
    <button type="submit" name="submit">Simpan Perubahan</button>
    <a href="index.php">Kembali</a>
</form>

</body>
</html>
