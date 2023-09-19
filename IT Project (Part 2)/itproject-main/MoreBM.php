<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lebih Banyak Ciri</title>

    <!-- font awesome link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- convert api link  -->
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- link to css file  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- navigation section starts  -->
<header>
    <a href="Language.php" class="language"><i class="fas fa-language"></i></a>
    <!-- navigation bar hidden  -->
    <div id="menu-bar" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="ConvertBM.php">Pertukaran</a>
        <a href="ChartBM.php">Carta</a>
        <a href="TimeZoneBM.php">ZonMasa</a>
        <a href="CalculatorBM.php">Kalkulator</a>
        <a href="CalendarBM.php">Kalendar</a>
        <a href="MoreBM.php">Lebih</a>
        <a href="AboutBM.php">Tentang Kita</a>
    </nav>
</header>
<!-- navigation section ends -->

<!-- hotel section starts  -->
<section class="home" id="home">
    <div class="content">
        <h3>Tempahan Hotel Agoda</h3>
        <p>Agoda.Com Merupakan Agen Perjalanan Dalam Talian Dan Mesin Metasearch Untuk Hotel, Sewaan Percutian, Penerbangan, dan Pemindahan Lapangan Terbang. Kami Mempunyai Lebih Dari 40 Cara Pembayaran untuk Mengunci Harga Bilik Terendah. Tidak Perlu Kad Kredit! Baca Ulasan dari Tetamu yang Disahkan untuk Mendapatkan Kisah Sebenar Sebelum Anda Menempah Bilik Anda. 100% Ulasan Sebenar. 23 Juta + Pelanggan. Sokongan Pelanggan 24/7.</p>
        <a href="https://www.agoda.com/ms-my/" target="_blank" class="btn">Book Sekarang!</a>
    </div>

    <div class="image">
        <img src="pic/hotel.jpg">
    </div>
</section>
<!-- hotel section ends -->

<!-- flight section starts  -->
<section class="home" id="home">
    <div class="image">
        <img src="pic/fly.png">
    </div>

    <div class="content">
        <h3>Malaysia Airlines</h3>
        <p>Malaysia Airlines Berhad, Dahulu Dikenali Sebagai Sistem Penerbangan Malaysia, Berjenama Sebagai Malaysia Airlines, Merupakan Syarikat Penerbangan Bendera Malaysia Dan Ahli Syarikat Oneworld Airline Alliance. Fly-In Comfort & Rasakan Keramahan Malaysia Ke Lebih 60 Destinasi. Daftar Masuk Dalam Talian. Tempat duduk yang selesa. Permintaan Makanan Khas.</p>
        <a href="https://www.malaysiaairlines.com/my/ms.html" target="_blank" class="btn">Terbang Sekarang!</a>
    </div>
</section>
<!-- flight section ends -->

<!-- gps section starts  -->
<h1 class="heading">Peta Google ke <span>Pengurup Wang Dunia</span></h1>

<form method="POST">
    <p>
        <input type="text" name="address" placeholder="Tekan awak alamat di sini!">
    </p>

    <br>
    <input type="submit" name="submit_address">
</form>

<?php
    if (isset($_POST["submit_address"]))
    {
        $address = $_POST["address"];
        $address = str_replace(" ", "+", $address);
        ?>
 
        <iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $address; ?>&output=embed"></iframe>
 
        <?php
    }
?>
<!-- gps section ends -->

<!-- footer section start -->
<section class="footer">
    <h1 class="credit"> Dibuat Oleh <span> Ivan Wong Onn Yee & Woo Chan Ee </span> | IT PROJECT </h1>
    <h5 class="credit"> @2021 Currency Converter with Extra Features </h5>
</section>
<!-- footer section ends -->

<!-- scroll top button  -->
<a href="#home" class="fas fa-angle-up" id="scroll-top"></a>

<!-- link to js file  -->
<script src="js/script.js"></script>

</body>
</html>