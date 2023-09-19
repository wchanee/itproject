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
<br><br><br><br><br><br><br>
<h1 class="heading">Calendar <span>Tool</span></h1>
<br><br>
<link href="css/calendar.css" type="text/css" rel="stylesheet" />
<body>
<?php
include 'calendar1.php';
 
$calendar = new Calendar();
 
echo $calendar->show();
?>
<br><br>
</body>
</html> 
<!-- calculator section ends -->

<!-- footer section start -->
<section class="footer">
    <h1 class="credit"> created by <span> Ivan Wong Oon Yee & Woo Chan Ee </span> | IT PROJECT </h1>
    <h5 class="credit"> @2021 Currency Converter with Extra Features </h5>
</section>
<!-- footer section ends -->

<!-- scroll top button  -->
<a href="#" class="fas fa-angle-up" id="scroll-top"></a>

</body>
</html>