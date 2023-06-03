<?php
    require('../koneksi.php');
    
    $id_produk = $_POST["id_produk"];
    $input_nama_produk = $_POST["nama_produk"];
    $input_harga_produk = $_POST["harga_produk"];
    $input_kategori_produk = $_POST["kategori"];
    
    // Cek apakah ada file gambar yang diunggah
    if ($_FILES['foto_produk']['name'] != '') {
        $nama_file_baru = $_FILES['foto_produk']['name'];
        $ukuran_file = $_FILES['foto_produk']['size'];
        $tipe_file = $_FILES['foto_produk']['type'];
        $lokasi_ambil_file = $_FILES['foto_produk']['tmp_name'];
        $lokasi_simpan_file = "../images/".$nama_file_baru;
        
        move_uploaded_file($lokasi_ambil_file, $lokasi_simpan_file);
        
        $update_data = "UPDATE produk SET 
                            nama_produk = '$input_nama_produk',
                            harga = '$input_harga_produk',
                            id_kategori = '$input_kategori_produk',
                            gambar = '$nama_file_baru'
                        WHERE id_produk = '$id_produk'";
    } else {
        $update_data = "UPDATE produk SET 
                            nama_produk = '$input_nama_produk',
                            harga = '$input_harga_produk',
                            id_kategori = '$input_kategori_produk'
                        WHERE id_produk = '$id_produk'";
    }
    
    $query = mysqli_query($db_con, $update_data);
    
    if ($query) {
        echo "<meta http-equiv='refresh' content='0;url=data_produk.php'>";
    } else {
        echo "Gagal mengupdate data produk. Error: " . mysqli_error($db_con);
    }
?>
