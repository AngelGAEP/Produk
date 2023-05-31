<?php

$host = "localhost";
$user = "root";
$password = "";
$database ="daftar_produk";

$conn = mysqli_connect($host, $user, $password, $database);

//if (!$conn){
//	die("Koneksi gagal: " . mysqli_connect_error());
//}
//echo "Connected successfully";
////
$sql = "SELECT * FROM daftarproduk";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table style="border: 1px solid black; border-collapse: collapse; width: 500px;">
		<tr>
			<th style="border: 1px solid black; width: 50px;">No</th>
			<th style="border: 1px solid black; width: 200px;">Nama_Produk</th>
			<th style="border: 1px solid black; width: 100px;">Harga</th>
			<th style="border: 1px solid black; width: 150px;">Aksi</th>
		</tr>';
    
    while ($row = $result->fetch_assoc()) {
        echo '<tr>
			<td style="border: 1px solid black;">'.$row["No"].'</td>
			<td style="border: 1px solid black;">'.$row["Nama_Produk"].'</td>
			<td style="border: 1px solid black;">'.$row["Harga"].'</td>
			<td style="border: 1px solid black;"><a href="detail_produk.php?id='.$row["No"].'">Detail</a></td>
	
		</tr>';
    }
    //		<td style="border: 1px solid black;">'.$row["Aksi"].'</td>
    echo '</table>';
	echo '<form action="form_tambah.php" method="post">
        <button type="submit">Tambah</button>
      </form>';
	echo '<form action="form_hapus.php" method="post">
        <button type="submit">Hapus</button>
      </form>';  
} else {
    echo "Tidak ada data yang ditemukan.";
}
?>
