<?php
//Include file koneksi ke database
include "konek.php";

//menerima nilai dari kiriman form input-barang 
$nama = $_POST["nama"];
$email = $_POST["email"];

//Query input menginput data kedalam tabel barang
$sql = "insert into guru (nama,email) values
		('$nama','$email')";

//Mengeksekusi/menjalankan query diatas	
$hasil = mysqli_query($kon, $sql);

if ($hasil) {
    echo "Berhasil insert data";
    exit;
} else {
    echo "Gagal insert data";
    exit;
}
