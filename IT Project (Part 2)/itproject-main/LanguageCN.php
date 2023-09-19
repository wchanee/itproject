<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>语言</title>

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
    <a href="LanguageCN.php" class="language"><i class="fas fa-language"></i></a>
    <!-- navigation bar hidden  -->
    <div id="menu-bar" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="ConvertCN.php">兑换</a>
        <a href="ChartCN.php">图表</a>
        <a href="TimeZoneCN.php">时区</a>
        <a href="CalculatorCN.php">计算器</a>
        <a href="CalendarCN.php">日历</a>
        <a href="MoreCN.php">更多</a>
        <a href="AboutCN.php">关于</a>
    </nav>
</header>
<!-- navigation section ends -->


<!-- language section starts  -->
<section class="language" id="language">

    <br><br><br><br><br><br><br>

    <div class="box-container">

      <div class="box">
            <img src="pic/english.png" alt="english">
            <h3>英语</h3>
            <a href="Language.php" class="btn">translate</a>
        </div>

        <div class="box">
            <img src="pic/chinese.jpg" alt="chinise">
            <h3>简体中文</h3>
            <a href="LanguageCN.php" class="btn">翻译</a>
        </div>

        <div class="box">
            <img src="pic/melayu.png" alt="malay">
            <h3>马来语</h3>
            <a href="LanguageBM.php" class="btn">terjemahkan</a>
    </div>
</section>
<!-- language section ends -->


<!-- footer section start -->
<section class="footer">
    <h1 class="credit"> 制作由 <span> Ivan Wong Onn Yee & Woo Chan Ee </span> | IT PROJECT </h1>
    <h5 class="credit"> @2021 Currency Converter with Extra Features </h5>
</section>
<!-- footer section ends -->

<!-- link to js file  -->
<script src="js/script.js"></script>

</body>
</html>