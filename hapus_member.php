<?php

include("koneksi.php");

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM anggota WHERE id='$id'";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: admin.php?delete=berhasil#member');
    } else {
        header('Location: admin.php?delete=gagal#member');
    }

} else {
    header('Location: admin.php?delete=gagal#member');
}

?>