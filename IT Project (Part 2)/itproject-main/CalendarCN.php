<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>日历工具</title>

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

<!-- about section starts  -->
<br><br><br><br><br><br><br>
<h1 class="heading">日历 <span>工具</span></h1>
<br><br>
<link href="css/calendar.css" type="text/css" rel="stylesheet" />
<body>
<?php
include 'calendar1cn.php';
 
$calendar = new Calendar();
 
echo $calendar->show();
?>
<br><br>
</body>
</html> 
<!-- about section ends -->


<!-- footer section start -->
<section class="footer">
    <h1 class="credit"> 制作由 <span> Ivan Wong Onn Yee & Woo Chan Ee </span> | IT PROJECT </h1>
    <h5 class="credit"> @2021 Currency Converter with Extra Features </h5>
</section>
<!-- footer section ends -->

<!-- scroll top button  -->
<a href="#home" class="fas fa-angle-up" id="scroll-top"></a>

<!-- link to js file  -->
<script src="js/script.js"></script>

</body>
</html>