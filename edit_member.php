<?php
// Sertakan file koneksi.php
include('koneksi.php');

// Cek apakah ID anggota yang akan diedit sudah ada dalam URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query SQL untuk mengambil data anggota berdasarkan ID
    $query = "SELECT * FROM anggota WHERE id = $id";
    $result = mysqli_query($db, $query);

    if (!$result) {
        die("Query error: " . mysqli_error($db));
    }

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        // Proses form edit jika data ditemukan
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST['nama'];
            $nim = $_POST['nim'];
            $jabatan = $_POST['jabatan'];
            $ig = $_POST['ig'];
            
            // Proses upload foto (jika diperlukan)
            if ($_FILES['foto']['error'] == 0) {
                $foto = $_FILES['foto']['name'];
                $temp = $_FILES['foto']['tmp_name'];
                $folder = "uploads/"; // Ganti dengan folder tempat menyimpan foto
                $target_file = $folder . $foto;

                move_uploaded_file($temp, $folder . $foto);
            } else {
                // Jika tidak ada foto baru diunggah, gunakan foto lama
                $target_file = $row['foto'];
            }

            // Query SQL untuk mengupdate data anggota
            $update_query = "UPDATE anggota SET nama = '$nama', nim = '$nim', jabatan = '$jabatan', ig = '$ig', foto = '$target_file' WHERE id = $id";
            $update_result = mysqli_query($db, $update_query);

            if (!$update_result) {
                die("Update error: " . mysqli_error($db));
            }

            // Redirect ke halaman lain setelah update berhasil
            header('Location: admin.php?edit=berhasil#member'); // Ganti dengan halaman tujuan setelah update berhasil
        }
    } else {
        die("Data tidak ditemukan.");
    }
} else {
    die("ID tidak ditemukan.");
}
?>
<?php
// Sertakan file koneksi.php
include('koneksi.php');

// Cek apakah ID anggota yang akan diedit sudah ada dalam URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query SQL untuk mengambil data anggota berdasarkan ID
    $query = "SELECT * FROM anggota WHERE id = $id";
    $result = mysqli_query($db, $query);

    if (!$result) {
        die("Query error: " . mysqli_error($db));
    }

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        // Proses form edit jika data ditemukan
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST['nama'];
            $nim = $_POST['nim'];
            $jabatan = $_POST['jabatan'];
            $ig = $_POST['ig'];
            
            // Proses upload foto (jika diperlukan)
            if ($_FILES['foto']['error'] == 0) {
                $foto = $_FILES['foto']['name'];
                $temp = $_FILES['foto']['tmp_name'];
                $folder = "uploads/"; // Ganti dengan folder tempat menyimpan foto
                $target_file = $folder . $foto;

                move_uploaded_file($temp, $folder . $foto);
            } else {
                // Jika tidak ada foto baru diunggah, gunakan foto lama
                $target_file = $row['foto'];
            }

            // Query SQL untuk mengupdate data anggota
            $update_query = "UPDATE anggota SET nama = '$nama', nim = '$nim', jabatan = '$jabatan', ig = '$ig', foto = '$target_file' WHERE id = $id";
            $update_result = mysqli_query($db, $update_query);

            if (!$update_result) {
                die("Update error: " . mysqli_error($db));
            }

            // Redirect ke halaman lain setelah update berhasil
            header('Location: admin.php?edit=berhasil#member'); // Ganti dengan halaman tujuan setelah update berhasil
        }
    } else {
        die("Data tidak ditemukan.");
    }
} else {
    die("ID tidak ditemukan.");
}
?>
<?php
// Sertakan file koneksi.php
include('koneksi.php');

// Cek apakah ID anggota yang akan diedit sudah ada dalam URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query SQL untuk mengambil data anggota berdasarkan ID
    $query = "SELECT * FROM anggota WHERE id = $id";
    $result = mysqli_query($db, $query);

    if (!$result) {
        die("Query error: " . mysqli_error($db));
    }

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        // Proses form edit jika data ditemukan
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST['nama'];
            $nim = $_POST['nim'];
            $jabatan = $_POST['jabatan'];
            $ig = $_POST['ig'];
            
            // Proses upload foto (jika diperlukan)
            if ($_FILES['foto']['error'] == 0) {
                $foto = $_FILES['foto']['name'];
                $temp = $_FILES['foto']['tmp_name'];
                $folder = "uploads/"; // Ganti dengan folder tempat menyimpan foto
                $target_file = $folder . $foto;

                move_uploaded_file($temp, $folder . $foto);
            } else {
                // Jika tidak ada foto baru diunggah, gunakan foto lama
                $target_file = $row['foto'];
            }

            // Query SQL untuk mengupdate data anggota
            $update_query = "UPDATE anggota SET nama = '$nama', nim = '$nim', jabatan = '$jabatan', ig = '$ig', foto = '$target_file' WHERE id = $id";
            $update_result = mysqli_query($db, $update_query);

            if (!$update_result) {
                die("Update error: " . mysqli_error($db));
            }

            // Redirect ke halaman lain setelah update berhasil
            header('Location: admin.php?edit=berhasil#member'); // Ganti dengan halaman tujuan setelah update berhasil
        }
    } else {
        die("Data tidak ditemukan.");
    }
} else {
    die("ID tidak ditemukan.");
}
?>
<?php
// Sertakan file koneksi.php
include('koneksi.php');

// Cek apakah ID anggota yang akan diedit sudah ada dalam URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query SQL untuk mengambil data anggota berdasarkan ID
    $query = "SELECT * FROM anggota WHERE id = $id";
    $result = mysqli_query($db, $query);

    if (!$result) {
        die("Query error: " . mysqli_error($db));
    }

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        // Proses form edit jika data ditemukan
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST['nama'];
            $nim = $_POST['nim'];
            $jabatan = $_POST['jabatan'];
            $ig = $_POST['ig'];
            
            // Proses upload foto (jika diperlukan)
            if ($_FILES['foto']['error'] == 0) {
                $foto = $_FILES['foto']['name'];
                $temp = $_FILES['foto']['tmp_name'];
                $folder = "uploads/"; // Ganti dengan folder tempat menyimpan foto
                $target_file = $folder . $foto;

                move_uploaded_file($temp, $folder . $foto);
            } else {
                // Jika tidak ada foto baru diunggah, gunakan foto lama
                $target_file = $row['foto'];
            }

            // Query SQL untuk mengupdate data anggota
            $update_query = "UPDATE anggota SET nama = '$nama', nim = '$nim', jabatan = '$jabatan', ig = '$ig', foto = '$target_file' WHERE id = $id";
            $update_result = mysqli_query($db, $update_query);

            if (!$update_result) {
                die("Update error: " . mysqli_error($db));
            }

            // Redirect ke halaman lain setelah update berhasil
            header('Location: admin.php?edit=berhasil#member'); // Ganti dengan halaman tujuan setelah update berhasil
        }
    } else {
        die("Data tidak ditemukan.");
    }
} else {
    die("ID tidak ditemukan.");
}
?>
