<?php
session_start();
include('Final.php');
// include('Submit.php');
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    echo "<script>alert('Please LogIn First');window.location.href = 'LoginPage.php';</script>";
    exit;
}
if (isset($_SESSION['totalCost'])) {
    $totalCost = $_SESSION['totalCost'];
} else {
    echo "Total Cost not found in the session.";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="assets/css/Payment.css">
</head>
<body>
    <div> <h2>Secure Checkout</h2> </div>
    <div class="container">
        <div class="row1">
            <img src="assets/img/QR.jpeg" alt="QR"> <br>
            <span style="margin-left: 200px; font-size: larger;">Scan&Pay!</span>
        </div>
        <div class="row1">
           <div> 
            <label> CustomerName : </label><span><?php echo $_SESSION['username']; ?></span> <br>
           <label> Amount : </label><span><?php echo $_SESSION['totalCost']; ?></span>
         </div> 
         <a href="Logout.php">LogOut</a>
        </div>
    </div>
</body>
</html>