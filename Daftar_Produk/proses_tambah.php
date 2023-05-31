<?php
// Inisialisasi koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "daftar_produk");

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil data dari form
$nama_produk = isset($_POST['nama_produk']) ? $_POST['nama_produk'] : '';
$harga = isset($_POST['harga']) ? $_POST['harga'] : '';
$merk = isset($_POST['merk']) ? $_POST['merk'] : '';
$distributor = isset($_POST['distributor']) ? $_POST['distributor'] : '';

// Query SQL untuk menambahkan data ke tabel
$sql = "INSERT INTO daftarproduk (Nama_Produk, Harga, Merk, Distributor) VALUES ('$nama_produk', $harga, '$merk', '$distributor')";

// Eksekusi query
if (mysqli_query($conn, $sql)) {
    echo "Data berhasil ditambahkan ke tabel.";
	echo '<form>
        <input type="button" value="Kembali" onClick="http://localhost/daftar_produk/index.php\'">
      </form>';
} else {
    echo "Gagal menambahkan data: " . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
?>
