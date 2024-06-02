<?php
// Sertakan file koneksi.php
include('koneksi.php');

if (isset($_POST['upload'])) {
    // Ambil data dari formulir
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jabatan = $_POST['jabatan'];
    $ig = $_POST['ig'];

    // Proses pengunggahan foto
    $file_name = $_FILES['foto']['name'];
    $file_tmp = $_FILES['foto']['tmp_name'];
    $file_type = $_FILES['foto']['type'];
    $file_size = $_FILES['foto']['size'];

    // Cek apakah file adalah file gambar
    $allowed_extensions = array("image/jpeg", "image/png", "image/gif", "image/webp");
    if (in_array($file_type, $allowed_extensions)) {
        // Tentukan direktori penyimpanan file gambar
        $upload_directory = "uploads/";
        $target_file = $upload_directory . $file_name;

        // Pindahkan file gambar dari temp ke direktori penyimpanan
        if (move_uploaded_file($file_tmp, $target_file)) {
            // Simpan data ke database
            $query = "INSERT INTO anggota (nama, nim, jabatan, ig, foto) VALUES ('$nama', '$nim', '$jabatan', '$ig', '$target_file')";

            if ($db->query($query) === TRUE) {
                header("location:admin.php?pesan=berhasil#member");
            } else {
                echo "Gagal menyimpan data ke database: " ;
            }
        } else {
            echo "Gagal mengunggah foto.";
        }
    } else {
        echo "Hanya file gambar dengan format JPEG, PNG, atau GIF yang diizinkan.";
    }
}

// Tutup koneksi
$db->close();
?>
