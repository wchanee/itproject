<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>更多功能</title>

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

<!-- hotel section starts  -->
<section class="home" id="home">
    <div class="content">
        <h3>Agoda 酒店预订</h3>
        <p>Agoda.com 是一个在线旅行社和元搜索引擎，适用于酒店、度假租赁、航班和机场接送。 我们有超过 40 种支付方式来锁定最低房价。 无需信用卡！ 在预订房间之前阅读已验证客人的评论以了解真实情况。 100% 真实评论。 2300 万+ 客户。 24/7 客户支持.</p>
        <a href="https://www.agoda.com/zh-cn/" target="_blank" class="btn">现在预订!</a>
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
        <h3>马航</h3>
        <p>Malaysia Airlines Berhad，前身为Malaysia Airline System，品牌为Malaysia Airlines，是马来西亚的旗舰航空公司，也是寰宇一家航空公司联盟的成员。 飞往 60 多个目的地的舒适飞行体验并体验马来西亚的热情好客。 在线办理登机手续。 舒适的座椅。 特殊膳食要求。</p>
        <a href="https://www.malaysiaairlines.com/cn/zh_CN.html" target="_blank" class="btn">现在预订!</a>
    </div>
</section>
<!-- flight section ends -->

<!-- gps section starts  -->
<h1 class="heading">谷歌地图 到 <span>世界货币兑换商</span></h1>

<form method="POST">
    <p>
        <input type="text" name="address" placeholder="填写您地址在这里！">
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