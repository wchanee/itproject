<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More Features</title>

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
        <a href="Calendar.php">Calendar</a>
        <a href="More.php">More</a>
        <a href="About.php">About</a>
    </nav>
</header>
<!-- navigation section ends -->

<!-- hotel section starts  -->
<section class="home" id="home">
    <div class="content">
        <h3>Agoda Hotel Booking</h3>
        <p>Agoda.Com Is An Online Travel Agency And Metasearch Engine For Hotels, Vacation Rentals, Flights, And Airport Transfers. We Have Over 40 Payment Ways for Locking the Lowest Room Rates. No Credit Card Needed! Read Reviews from Verified Guests to Get the Real Story Before You Book Your Room. 100% Real Reviews. 23 Million+ Customers. 24/7 Customer Support.</p>
        <a href="http://www.agoda.com/" target="_blank" class="btn">Book Now!</a>
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
        <p>Malaysia Airlines Berhad, Formerly Known As Malaysian Airline System, Branded As Malaysia Airlines, Is The Flag Carrier Airline Of Malaysia And A Member Of The Oneworld Airline Alliance. Fly-In Comfort & Experience Malaysian Hospitality To Over 60 Destinations. Online Check-In. Comfortable Seats. Special Meal Request. </p>
        <a href="https://www.malaysiaairlines.com/" target="_blank" class="btn">Flight Now!</a>
    </div>
</section>
<!-- flight section ends -->

<!-- gps section starts  -->
<h1 class="heading">Google Map to <span>World' Money Changer</span></h1>

<form method="POST">
    <p>
        <input type="text" name="address" placeholder="Enter your address here!">
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
    <h1 class="credit"> created by <span> Ivan Wong Oon Yee & Woo Chan Ee </span> | IT PROJECT </h1>
    <h5 class="credit"> @2021 Currency Converter with Extra Features </h5>
</section>
<!-- footer section ends -->

<!-- scroll top button  -->
<a href="#home" class="fas fa-angle-up" id="scroll-top"></a>

<!-- link to js file  -->
<script src="js/script.js"></script>

</body>
</html>