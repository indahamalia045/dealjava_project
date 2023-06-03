<?php
	require('../koneksi.php');
	$input_nama_produk	= $_POST["nama_produk"];
	$input_harga_produk	= $_POST["harga_produk"];
	$input_kategori_produk	= $_POST["kategori"];

	$nama_file_baru = $_FILES['foto_produk']['name'];
	$ukuran_file = $_FILES['foto_produk']['size'];
	$tipe_file = $_FILES['foto_produk']['type'];
	$lokasi_ambil_file = $_FILES['foto_produk']['tmp_name'];
	$lokasi_simpan_file = "../images/".$nama_file_baru;

	move_uploaded_file($lokasi_ambil_file, $lokasi_simpan_file);

	$tambah_data = "INSERT INTO produk 
					(nama_produk, harga, id_kategori, gambar)
					VALUES ('$input_nama_produk', '$input_harga_produk', '$input_kategori_produk', '$nama_file_baru')";
	$query = mysqli_query($db_con, $tambah_data);
	echo "<meta http-equiv='refresh' content='0;url=data_produk.php'>";
?>
