<!DOCTYPE html>
<html>

<head>
    <title>DigiCore Team</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/digicore.png" type="image/x-icon">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>

<body>


    <div class="w3-top">
        <div class="w3-bar w3-white w3-wide w3-padding w3-card">
            <a href="#home" class="w3-bar-item w3-button"><img src="img/digicore.png"
                    style="height: 30px; width: auto; margin-right: 5px;" alt="">digicore</a>
            <!-- Float links to the right. Hide them on small screens -->
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
            <a href="https://ngoding.my-board.org">
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
                    
                    <h6><?php echo $form['jabatan'] ?></h6>
                    <a href="<?php echo $form['ig'] ?>"><img src="img/Instagram-Icon.png" height="100%"
                    style="max-height: 30px;" alt=""></a>
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
                <p>Dipersembahkan oleh <a href="login.php" title="digicore team" style="text-decoration: none; color: white;"
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



            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>