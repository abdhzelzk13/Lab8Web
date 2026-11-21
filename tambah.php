
<?php
include "koneksi.php";

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga_beli = $_POST['harga_beli'];
    $harga_jual = $_POST['harga_jual'];
    $stok = $_POST['stok'];

    // Mengambil gambar
    $gambar = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];

    // Folder penyimpanan gambar
    $folder = "img/";

    // Proses upload gambar
    if (move_uploaded_file($tmp, $folder . $gambar)) {

        $sql = "INSERT INTO data_barang
                (nama, kategori, gambar, harga_beli, harga_jual, stok)
                VALUES
                ('$nama', '$kategori', '$gambar', '$harga_beli',
                '$harga_jual', '$stok')";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            header("Location: index.php");
            exit;
        } else {
            echo "Gagal menyimpan data: " . mysqli_error($conn);
        }

    } else {
        echo "Gagal mengupload gambar.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Barang</title>
</head>
<body>

<h2>Tambah Barang</h2>

<form method="POST" enctype="multipart/form-data">

    <p>Nama Barang:</p>
    <input type="text" name="nama" required>

    <p>Kategori:</p>
    <input type="text" name="kategori" required>

    <p>Gambar:</p>
    <input type="file" name="gambar" accept="image/*" required>

    <p>Harga Beli:</p>
    <input type="number" name="harga_beli" required>

    <p>Harga Jual:</p>
    <input type="number" name="harga_jual" required>

    <p>Stok:</p>
    <input type="number" name="stok" required>

    <br><br>

    <button type="submit" name="submit">Simpan</button>
    <a href="index.php">Kembali</a>

</form>

</body>
</html>
