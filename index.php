<?php

include ('functions.php');
$postingan = query("SELECT idPostingan FROM postingan");



?>



<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <link rel="icon" href="img/icon.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Pesan Rahasia</title>

</head>

<body style="background-color: rgb(187, 187, 187);">

    <header>

        <nav class="navbar bg-dark fixed-top">

            <form class="container-fluid justify-content-space-between">

                <a href="https://www.instagram.com/yazz_803" target="_blank"  class="navbar-brand">

                    <img src="img/picprofile.png" alt="kosong" style="border-radius: 50%;" width="40px" height="40px">

                    <button class="btn text-white me-2" type="button">Yazz803</button>

                </a>

              <button class="btn btn-sm btn-outline-secondary text-white" type="button">Posting</button>

            </form>

        </nav>

    </header>



    <div class="main">

        <p>Website ini adalah situs penyedia layanan pesan rahasia yang memungkinkan pengguna mengirim pesan rahasia melalui link (tautan). Link tersebut bisa dibagikan ke berbagai media sosial (medsos), seperti Instagram, Facebook, Whatsapp, bahkan TikTok.</p>

        <h2>Masukan Nama</h2>

        <form method="post" action="tambah.php">
            <?php  foreach($postingan as $post) :?>
            <input type="hidden" name="p" value="<?= $post['idPostingan'];?>">
            <?php  endforeach;?>

            <?php date_default_timezone_set("Asia/Jakarta") ;?>

            <input type="hidden" name="tgl" id="tgl" value="<?= date("l, d-M-Y H:i:s T") ;?>">

            <input class="form-control" type="text" title="Masukan Nama" autocomplete="off" name="nama" id="nama" placeholder="Masukan Nama" required>

            <button class="btn btn-primary mt-3" type="submit" name="kirim">Mulai</button>

        </form>

        <p class="lead mt-3" style="color:red;font-size:13px;font-weight:bold;text-align:left;">* Silahkan baca dulu penjelasan dibawah ini</p>

    </div>



    <footer>

        <p class="lead">Copyright - <?= $kopirek;?></p>

        <p>Cara menggunakan website ini : </p>

        <ul>

            <li>Masukan Nama (terserah), kemudian tap mulai</li>

            <li>Salin link url untuk dibagikan kepada teman-teman kamu dan mintalah mereka untuk mengisi pesan rahasia</li>

            <li>Selesai :)</li>

            <li style="color:lightgreen">Mohon simpan link postingan kalian, karena itu adalah akses untuk menuju postingan kalian</li>

        </ul>

        <p style="color: lightblue;"><?= $update ;?></p>

        <p><?= $peringatan ;?></p>

        <p><?= $hubungi;?></p>

        <br>

    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>