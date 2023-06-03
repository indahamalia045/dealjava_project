<?php
    require('../koneksi.php');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        echo "<script>
            var result = confirm('Apakah Anda yakin ingin menghapus data ini?');
            if (result) {
                window.location.href = 'data_produk_hapus_db.php?id=$id';
            } else {
                window.location.href = 'data_produk.php';
            }
        </script>";
    } else {
        echo "<meta http-equiv='refresh' content='0;url=data_produk.php'>";
    }

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $hapus_data = "DELETE FROM produk WHERE id_produk='$id'";
        $query = mysqli_query($db_con, $hapus_data);

        if ($query) {
            echo "<script>alert('Data berhasil dihapus');</script>";
        } else {
            echo "<script>alert('Gagal menghapus data');</script>";
        }
    }

    echo "<meta http-equiv='refresh' content='0;url=data_produk.php'>";
?>
