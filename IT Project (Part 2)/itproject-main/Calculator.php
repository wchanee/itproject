<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator Tools</title>

    <!-- font awesome link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- convert api link  -->
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- link to css file  -->
    <link rel="stylesheet" href="css/style-tools.css">

    <!-- link to js file  -->
    <script src="js/script-tools.js" defer></script>

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
        <a href="Calendar.php">Calendar</a>
        <a href="More.php">More</a>
        <a href="About.php">About</a>
    </nav>
</header>
<!-- navigation section ends -->

<!-- calculator section starts  -->
<section class="home" id="home">
<div id="container">
        <div id="calculator">
            <div id="result">
                <div id="history">
                    <p id="history-value"></p>
                </div>

                <div id="output">
                    <p id="output-value"></p>
                </div>
            </div>

            <div id="keyboard">
                <button class="operator" id="clear">C</button>
                <button class="operator" id="backspace">CE</button>
                <button class="operator" id="%">%</button>
                <button class="operator" id="/">&#247;</button>
                <button class="number" id="7">7</button>
                <button class="number" id="8">8</button>
                <button class="number" id="9">9</button>
                <button class="operator" id="*">&times;</button>
                <button class="number" id="4">4</button>
                <button class="number" id="5">5</button>
                <button class="number" id="6">6</button>
                <button class="operator" id="-">-</button>
                <button class="number" id="1">1</button>
                <button class="number" id="2">2</button>
                <button class="number" id="3">3</button>
                <button class="operator" id="+">+</button>
                <button class="empty" id="empty"></button>
                <button class="number" id="0">0</button>
                <button class="empty" id="empty"></button>
                <button class="operator" id="=">=</button>
            </div>
        </div>
    </div>
<section>
<!-- calculator section ends -->

<!-- footer section start -->
<section class="footer">
    <h1 class="credit"> created by <span> Ivan Wong Oon Yee & Woo Chan Ee </span> | IT PROJECT </h1>
    <h5 class="credit"> @2021 Currency Converter with Extra Features </h5>
</section>
<!-- footer section ends -->

<!-- scroll top button  -->
<a href="#home" class="fas fa-angle-up" id="scroll-top"></a>

</body>
</html>