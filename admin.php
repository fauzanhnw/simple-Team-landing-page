<?php
session_start();

// Periksa apakah pengguna telah login, jika tidak, alihkan ke halaman login
if (!isset($_SESSION['username'])) {
    header("Location: login.php?pesan=logindulugan");
    exit();
}

// Dapatkan informasi pengguna dari sesi atau basis data
$user_id = $_SESSION['username'];
// Tampilkan konten halaman beranda
?>

<!DOCTYPE html>
<html>

<head>
    <title>digicore team</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/digicore.png" type="image/x-icon">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>

<body>
<?php
            if (isset($_GET['login'])) {
            if ($_GET['login'] == "berhasil") {
                echo  "<script>
                    alert('Selamat Kamu Berhasil Login Sebagai Administrator');
                </script>";
            }
            }
            ?>
    <div class="w3-top">
        <div class="w3-bar w3-white w3-wide w3-padding w3-card">
            <a href="#home" class="w3-bar-item w3-button"><img src="img/digicore.png"
                    style="height: 30px; width: auto; margin-right: 5px;" alt="">digicore</a>
            <!-- Float links to the right. Hide them on small screens -->
            <div class="w3-right">
                <a href="logout.php" class="w3-bar-item w3-button">Log Out</a>
            </div>
            <div class="w3-right w3-hide-small">
                <a href="#projects" class="w3-bar-item w3-button">Proyek</a>
                <a href="#member" class="w3-bar-item w3-button">Anggota</a>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
        <img class="w3-image" src="img/poltek.jpeg" alt="poltek" width="100%" height="auto"
            style="background-size: cover; min-height: 300px;">
        <div class="w3-display-middle w3-margin-top w3-center">
            <h1 class="w3-xxlarge w3-text-white">
                <span class=" w3-text-light-grey"><img src="img/digicore.png"
                        style="height:auto; width:13%; margin-bottom: 20px;"></span>
                <p><span class="w3-padding w3-black w3-opacity-min"><b>digicore</b></span></p>
            </h1>
        </div>
    </header>

    <div class="w3-container w3-padding-32">
        <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16" style="margin-left:10px">Bagian Dari</h3>
        <p class="w3-border-bottom w3-border-light-grey w3-center">
            <img class="w3-image" src="img/logo_wmk.png" alt="" style="max-height: 110px; height:100%; width: auto;">
            <img class="w3-image" src="img/LOGO_Prod_TRPL_Variant_02_Horizontal Color Square (1).jpg"
                style="max-height: 110px; height: 100%; width: auto;" alt="">
        </p>
    </div>

    <!-- Page content -->
    <div class="w3-content w3-padding" style="max-width:1564px">

        <!-- Project Section -->
        <div class="w3-container w3-padding-32" id="projects">
            <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Proyek</h3>
        </div>

        <div class="w3-card-4 w3-col l4 m6 w3-margin-bottom w3-hover-shadow ">
            <a href="">
                <img src="img/zdgsasg.png" class="p-4" style="height:auto; width:100%;" alt="ngoding">
            </a>
            <div class="w3-container w3-center w3-black">
                <p>
                    <h6 style="text-decoration: none;">Aplikasi Penyedia Kursus Online Untuk Pengembangan Keterampilan Digital</h6>
                </p>
            </div>

        </div>

        <!-- Member Section -->

        <div class="w3-container w3-padding-32" id="member">
            <p></p>
            <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Anggota</h3>
            <?php
            if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "berhasil") {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
                echo '<svg xmlns="http://www.w3.org/2000/svg" class="bi bi-info-fill flex-shrink-0 me-2" viewBox="0 0 16 16" style="height: 1em; width: 1em; vertical-align: -0.125em;" role="img" aria-label="Warning:">';
                    echo '<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>';
                echo '</svg>';
						echo 'Berhasil Menambahkan Anggota';
                echo '</div>';
            }
            if ($_GET['pesan'] == "gagal") {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
                echo '<svg xmlns="http://www.w3.org/2000/svg" class="bi bi-info-fill flex-shrink-0 me-2" viewBox="0 0 16 16" style="height: 1em; width: 1em; vertical-align: -0.125em;" role="img" aria-label="Warning:">';
                    echo '<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>';
                echo '</svg>';
						echo 'Gagal Menambahkan Anggota';
                echo '</div>';
            }
            }
            ?>
            <?php
            if (isset($_GET['delete'])) {
            if ($_GET['delete'] == "berhasil") {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
                echo '<svg xmlns="http://www.w3.org/2000/svg" class="bi bi-info-fill flex-shrink-0 me-2" viewBox="0 0 16 16" style="height: 1em; width: 1em; vertical-align: -0.125em;" role="img" aria-label="Warning:">';
                    echo '<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>';
                echo '</svg>';
						echo 'Berhasil Menghapus Anggota';
                echo '</div>';
            }
            if ($_GET['delete'] == "gagal") {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
                echo '<svg xmlns="http://www.w3.org/2000/svg" class="bi bi-info-fill flex-shrink-0 me-2" viewBox="0 0 16 16" style="height: 1em; width: 1em; vertical-align: -0.125em;" role="img" aria-label="Warning:">';
                    echo '<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>';
                echo '</svg>';
						echo 'Gagal Menghapus Anggota';
                echo '</div>';
            }
            }
            ?>
            <?php
            if (isset($_GET['edit'])) {
            if ($_GET['edit'] == "berhasil") {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
                echo '<svg xmlns="http://www.w3.org/2000/svg" class="bi bi-info-fill flex-shrink-0 me-2" viewBox="0 0 16 16" style="height: 1em; width: 1em; vertical-align: -0.125em;" role="img" aria-label="Warning:">';
                    echo '<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>';
                echo '</svg>';
						echo 'Berhasil Mengubah Data Anggota';
                echo '</div>';
            }
            if ($_GET['edit'] == "gagal") {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
                echo '<svg xmlns="http://www.w3.org/2000/svg" class="bi bi-info-fill flex-shrink-0 me-2" viewBox="0 0 16 16" style="height: 1em; width: 1em; vertical-align: -0.125em;" role="img" aria-label="Warning:">';
                    echo '<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>';
                echo '</svg>';
						echo 'Gagal Mengubah Data Anggota';
                echo '</div>';
            }
            }
            ?>

            <div class="w3-right">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addmember">
                    <i class="bi bi-plus-square" style="margin-right: 10px;"></i>Tambah Anggota
                </button>
            </div>
            <p>
            </p>
        </div>

        <div class="w3-row-padding">
        <?php
        include("koneksi.php");
        $no = 1;
        $sql = "SELECT * FROM anggota";
        $query = mysqli_query($db, $sql);

        while($form = mysqli_fetch_array($query)){
			?>
            <div class="w3-card-4 w3-col l4 m6 w3-margin-bottom w3-hover-shadow w3-section w3-center ">
                <input type="hidden" name="id" value="<?= $no ?>" readonly>
                <img src="<?php echo $form['foto'] ?>" class="text-center"
                    style="min-height: 380px;; width:100%; max-height:380px; max-width:380px; object-fit:contain;"
                    alt="avatar">
                <div class="w3-container w3-center w3-black" style="padding:10px;">
                    <h4><?php echo $form['nama'] ?></h4>
                    <h6><?php echo $form['nim'] ?></h6>
                    <h6><?php echo $form['jabatan'] ?></h6>
                    <a href="<?php echo $form['ig'] ?>"><img src="img/Instagram-Icon.png" height="100%"
                    style="max-height: 30px;" alt=""></a>
                    <p></p>
                    <p>
                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editmember<?= $no ?>"
                        style="margin-right: 10px;">
                        <i class="bi bi-pencil-square">Edit</i>
                    </button>
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?= $no ?>"
                        style="margin-right: 10px;">
                        <i class="bi bi-trash-fill">Delete</i>
                    </button>
                    </p>
                    <p></p>
                </div>
            </div>
            <?php $no++;
            }
            ?>
        </div>



        <!-- Image of location/map -->
        <div class="w3-container">
            <img src="" class="w3-image" style="width:100%">
        </div>

        <!-- End page content -->
    </div>


    <!-- Footer -->
    <footer class="w3-center w3-black w3-padding-16">
        <p>Dipersembahkan Oleh <a href="logout.php" title="digicore team" style="text-decoration: none; color: white;"
                class="w3-hover-text-orange">digicore team</a>
        </p>
        <p>
            Dukung Kami di
        </p>
        <p>
            <a href="https://www.instagram.com/ng_oding/"><img src="img/Instagram-Icon.png" height="100%"
                    style="max-height: 50px;" alt=""></a>
        </p>
    </footer>
    <?php include 'koneksi.php';
    $no = 1;
        $sql = "SELECT * FROM anggota";
        $query = mysqli_query($db, $sql);
        while ($edit = mysqli_fetch_assoc($query)) {
        ?>

    <!-- Modal edit Member-->
    <div class="modal fade" id="editmember<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Data Anggota</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="edit_member.php?id=<?php echo $edit['id'] ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="mb-3">
                                <input type="hidden" name="id" value="<?php echo $edit['id'] ?>" readonly/>
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" id="exampleFormControlInput1"
                                    value="<?php echo $edit['nama'] ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="nim" class="form-label">NIM</label>
                                <input type="text" name="nim" class="form-control" id="exampleFormControlInput1"
                                    value="<?php echo $edit['nim'] ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="jabatan" class="form-label">Posisi Dalam Team</label>
                                <select class="form-select" name="jabatan" aria-label="Default select example" required>
                                    <option selected value="<?php echo $edit['jabatan'] ?>">
                                        <?php echo $edit['jabatan'] ?></option>
                                    <option value="Ketua">Ketua</option>
                                    <option value="Anggota">Anggota</option>
                                    <option value="Admin Digicore">Admin Digicore</option>
                                    <option value="Admin nGO-ding">Admin nGO-ding</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="ig" class="form-label">Instagram</label>
                                <input type="text" name="ig" class="form-control" id="exampleFormControlInput1"
                                    value="<?php echo $edit['ig'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="fotolama" class="form-label">Foto Saat Ini</label>
                                <p><img src="<?php echo $edit['foto'] ?>" class="text-center"
                                    style="min-height: 380px;; width:100%; max-height:300px; max-width:380px; object-fit:contain;"
                                    alt="avatar"></p>
                            </div>
                            <div class="mb-3">
                                <label for="fotobaru" class="form-label">Foto Baru</label>
                                <input class="form-control" type="file" name="foto" id="formFile">
                                <p style="color:red;">*Abaikan jika tidak ingin memperbarui foto.</p>
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!--Modal delete-->
    <div class="modal fade" id="delete<?= $no ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Menghilangkan Anggota</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah kamu yakin ingin menghilangkan Si <?php echo $edit['nama'];?>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>

                    <a href="hapus_member.php?id=<?php echo $edit['id'] ?>" class="btn btn btn-danger">Hilangkan</a>

                </div>
            </div>
        </div>
    </div>
    <?php $no++ ;
} 
?>
    <!-- Modal Add Member-->
    <div class="modal fade" id="addmember" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Anggota</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="tambah_member.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">NIM</label>
                                <input type="text" name="nim" class="form-control" id="exampleFormControlInput1"
                                    placeholder="NIM" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Posisi Dalam Tim</label>
                                <select class="form-select" name="jabatan" aria-label="Default select example" required>
                                    <option value="Ketua">Ketua</option>
                                    <option value="Anggota">Anggota</option>
                                    <option value="Admin Digicore">Admin Digicore</option>
                                    <option value="Admin nGO-ding">Admin nGO-ding</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Instagram</label>
                                <input type="text" name="ig" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Link Instagram (Gk diisi gapapah)">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Foto</label>
                                <input class="form-control" type="file" name="foto" id="formFile" required>
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" name="upload" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>