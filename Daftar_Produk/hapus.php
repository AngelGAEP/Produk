<?php
$conn = mysqli_connect("localhost", "root", "", "daftar_produk");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil nama produk yang akan dihapus dari form
$nama_produk = isset($_POST['nama_produk']) ? $_POST['nama_produk'] : '';

// Query SQL untuk menghapus data dari tabel
$sql = "DELETE FROM daftarproduk WHERE Nama_Produk = '$nama_produk'";

// Eksekusi query
if (mysqli_query($conn, $sql)) {
    echo "Data berhasil dihapus";
	echo '<form>
        <input type="button" value="Kembali" onClick="http://localhost/daftar_produk/index.php\'">
      </form>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
