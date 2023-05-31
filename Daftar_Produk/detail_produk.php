<?php
// Mengambil ID produk dari parameter URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Lakukan query untuk mendapatkan detail produk berdasarkan ID
	$conn = mysqli_connect("localhost", "root", "", "daftar_produk");   
	$sql = "SELECT * FROM daftarproduk WHERE No = $id";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // Menampilkan detail produk
        while ($row = $result->fetch_assoc()) {
            echo '<h2>Detail Produk</h2>'; 
			// Tampilkan gambar sesuai No produk
			$gambarURL = "http://localhost/Daftar_Produk/" . $row['No'] . ".jpg";
			echo '<img src="' . $gambarURL . '" alt="Gambar Produk" style="float: left; margin-right: 10px;">';
            echo '<p>Nama_Produk: '.$row['Nama_Produk'].'</p>';
			echo '<p>No: '.$row['No'].'</p>';
            echo '<p>Harga: '.$row['Harga'].'</p>';
			echo '<p>Merk : '.$row['Merk'].'</p>';
			echo '<p>Distributor : '.$row['Distributor'].'</p>';
			echo '<form><input type="button" value="Kembali" onClick="history.back();return true;"></form>';
			// Tampilkan gambar sesuai No produk
    
        }
    } else {
        echo 'Produk tidak ditemukan.';
    }
} else {
    echo 'ID produk tidak ditemukan.';
}
?>
