<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Language</title>

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
         <a href="Convert.php">Convert</a>
        <a href="Chart.php">Chart</a>
        <a href="TimeZone.php">TimeZone</a>
        <a href="Calculator.php">Calculator</a>
        <a href="Calendar.php">Calender</a>
        <a href="More.php">More</a>
        <a href="About.php">About</a>
    </nav>
</header>
<!-- navigation section ends -->


<!-- language section starts  -->
<section class="language" id="language">

    <br><br><br><br><br><br><br>

    <div class="box-container">

        <div class="box">
            <img src="pic/english.png" alt="english">
            <h3>ENGLISH</h3>
            <a href="Language.php" class="btn">translate</a>
        </div>

        <div class="box">
            <img src="pic/chinese.jpg" alt="chinise">
            <h3>CHINESE (SIMPLIFIED)</h3>
            <a href="LanguageCN.php" class="btn">翻译</a>
        </div>

        <div class="box">
            <img src="pic/melayu.png" alt="malay">
            <h3>MALAY</h3>
            <a href="LanguageBM.php" class="btn">terjemahkan</a>
        </div>
    </div>
</section>
<!-- language section ends -->


<!-- footer section start -->
<section class="footer">
    <h1 class="credit"> Created By <span> Ivan Wong Onn Yee & Woo Chan Ee </span> | IT PROJECT </h1>
    <h5 class="credit"> @2021 Currency Converter with Extra Features </h5>
</section>
<!-- footer section ends -->

<!-- link to js file  -->
<script src="js/script.js"></script>

</body>
</html>