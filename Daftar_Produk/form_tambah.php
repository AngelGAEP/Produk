<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah Data</title>
</head>
<body>
    <h1>Form Tambah Data</h1>
    <form method="POST" action="proses_tambah.php">
        <label>Nama_Produk:</label>
        <input type="text" name="nama_produk" required><br><br>
		<label>Harga:</label>
        <input type="number" name="harga" required><br><br>
		<label>Merk:</label>
        <input type="text" name="merk" required><br><br>
		<label>Distributor:</label>
        <input type="text" name="distributor" required><br><br>
        
        
        <input type="submit" value="Tambahkan Data">
    </form>
</body>
</html>
