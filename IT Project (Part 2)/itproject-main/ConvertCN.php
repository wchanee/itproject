<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Converter with Extra Features</title>

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

<!-- convert information section starts  -->
<section class="home" id="home">
    <div class="content">
        <h3>'Currency Converter With Extra Features'使用说明</h3>
        <p>'Currency Converter With Extra Features'可帮助我们轻松查看货币汇率、查看货币汇率图表、免费货币工具、预订酒店、查看航班时间、免费 Google 地图 GPS 等。</p>
    </div>

    <div class="image">
        <img src="pic\info.png">
    </div>
</section>
<!-- convert information section ends -->

<!-- convert section starts  -->
<div class="currency-row-outer">
    <div class="currency-converter">
        <h1 class="heading">Currency Converter <span>With Extra Features</span></h1>
        <div class="field grid-50-50">
            <div class="colmun col-left">
            <input type="number" class="form-input" id="number" placeholder="00000">
            </div>

            <div class="colmun col-right">
                <div class="select">
                <select name="currency" class="currency" onchange="updatevalue()"></select>
                </div>
            </div>
        </div>

        <div class="field grid-50-50">
            <div class="colmun col-left">
                <input type="text" class="form-input" id="output" placeholder="00000" disabled>
                </div>

                <div class="colmun col-right">
                    <div class="select">
                    <select name="currency" class="currency" onchange="updatevalue()"></select>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- convert section ends -->

<br><br><br><br><br>

<!-- flag section starts  -->
<h1 class="heading">出名马来西亚令吉(MYR) <span>货币配对</span></h1>

    <section class="flag">
        <div class="box">
            <img src="pic/SGD.jpg" alt="">
            <h3>MYR 到 SGD</h3>
        </div>

        <div class="box">
            <img src="pic/CNY.jpg" alt="">
            <h3>MYR 到 CNY</h3>
        </div>

        <div class="box">
            <img src="pic/JPY.jpg" alt="">
            <h3>MYR 到 JPY</h3>
        </div>

        <div class="box">
            <img src="pic/THB.jpg" alt="">
            <h3>MYR 到 THB</h3>
        </div>

        <div class="box">
            <img src="pic/INR.jpg" alt="">
            <h3>MYR 到 INR</h3>
        </div>

        <div class="box">
            <img src="pic/USD.jpg" alt="">
            <h3>MYR 到 USD</h3>
        </div>

        <div class="box">
            <img src="pic/EUR.jpg" alt="">
            <h3>MYR 到 EUR</h3>
        </div>

        <div class="box">
            <img src="pic/AUD.jpg" alt="">
            <h3>MYR 到 AUD</h3>
        </div>
    </section>
<!-- flag section ends -->

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