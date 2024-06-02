<?php
// Sertakan file koneksi.php
include('koneksi.php');

// Inisialisasi variabel
$username = $_POST['username'];
$password = $_POST['password'];

// Lindungi dari serangan SQL Injection
$username = mysqli_real_escape_string($db, $username);
$password = mysqli_real_escape_string($db, $password);

// Buat query SQL untuk memeriksa login pengguna
$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";

// Eksekusi query
$result = $db->query($query);

// Periksa apakah ada baris yang cocok (pengguna yang berhasil login)
if ($result->num_rows == 1) {
    // Login berhasil
    session_start();
    $_SESSION['username'] = $username; // Simpan username dalam sesi

    // Redirect pengguna ke halaman dashboard atau halaman lain yang sesuai
    header('Location: admin.php?login=berhasil');
} else {
    // Login gagal
    header("location:login.php?pesan=gagal");
}


// Tutup koneksi
$db->close();
?>
