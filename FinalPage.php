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
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/FinalCss.css">
</head>
<body>
<header class="header">
            <div class="logo">
                <img src="assets/img/LOGO.gif" alt="Logo">
            </div>
            <nav>
                <ul>
                    <li><a href="index.php" class="pr-5"><b>HOME</b></a></li>
                    <li><a href="index.php#what-you-get" class="pr-5"><b>SERVICES</b></a></li>
                    <li><a href="CustomaizationPage.php" class="pr-5"><b>EVENT</b></a></li>
                    <li><a href="ContactPage.php" class="pr-5"><b>CONTACT</b></a></li>
                    <li><a href="Logout.php" class="mr-4 pl-3 pr-3 active" ><b>LOGOUT</b></a></li> 
                    <!-- <button class="Headbtn" onclick="confirmLogout()"> LogOut </button> -->
                </ul>
            </nav>
        </header>

    <form action="Submit.php" method="post">
    <div class="container">
        <h2>Your Order :</h2>
        <div class="userdetails">
            <h4 style="margin-bottom: 30px;">Customer Name: <label style="margin-left: 50px;" ><?php echo $_SESSION['username']; ?></label></h4> 
            <h4 style="margin-bottom: 30px;">Event Type: <label style="margin-left: 95px;" for="eventType"><?php echo $eventType; ?></label> <input type="hidden" name="eventType" value="<?php echo $eventType; ?>" > </h4>
            <h4>Theme:</h4> <img src="<?php echo $selectedtheme; ?>" alt="Error">
        </div>
  
        <table>
                <tr>
                    <th>Vendor</th>
                    <th class="Date">Date</th>
                    <th class="Time">Time</th>
                    <th class="Details">Details</th>
                </tr>
            <tr>
               <td> <label>Food/Catering</label> </td>
               <td> <label class="Date" for="Fooddate"> <?php echo $Fooddate; ?> </label> <input type="hidden" name="Fooddate" value="<?php echo $Fooddate; ?>" > </td>
               <td> <label class="Time" for="Foodtime"><?php echo $Foodtime; ?></label> <input type="hidden" name="Foodtime" value="<?php echo $Foodtime; ?>" >   </td>
               <td><label class="Details" for="Fooddetails"><?php echo $Fooddetails; ?></label> <input type="hidden" name="Fooddetails" value="<?php echo $Fooddetails; ?>" >  </td>
            </tr>
            <tr>
               <td> <label>Equipment-rental</label> </td>
               <td> <label class="Date" for="equipmentdate"> <?php echo $equipmentdate ; ?> </label> <input type="hidden" name="equipmentdate" value="<?php echo $equipmentdate; ?>" > </td>
               <td> <label class="Time" for="equipmenttime"><?php echo $equipmenttime; ?></label> <input type="hidden" name="equipmenttime" value="<?php echo $equipmenttime; ?>" >  </td>
               <td><label class="Details" for="equipmentdetails"><?php echo $equipmentdetails; ?></label> <input type="hidden" name="equipmentdetails" value="<?php echo $equipmentdetails; ?>" > </td>
            </tr>
            <tr>
                <td> <label>Music and entertainment</label> </td>
                <td> <label class="Date" for="musicdate"> <?php echo $musicdate; ?></label> <input type="hidden" name="musicdate" value="<?php echo $musicdate; ?>" > </td>
                <td> <label class="Time" for="musictime"><?php echo $musictime; ?></label> <input type="hidden" name="musictime" value="<?php echo $musictime; ?>" >  </td>
                <td><label class="Details" for="musicdetails"><?php echo $musicdetails; ?></label> <input type="hidden" name="musicdetails" value="<?php echo $musicdetails; ?>" > </td>
             </tr>
             <tr>
                <td> <label>Photographer/videographer</label> </td>
                <td> <label class="Date" for="photodate"> <?php echo $photodate; ?> </label> <input type="hidden" name="photodate" value="<?php echo $photodate; ?>" > </td>
                <td> <label class="Time" for="phototime"><?php echo $phototime; ?></label> <input type="hidden" name="phototime" value="<?php echo $phototime; ?>" >  </td>
                <td><label class="Details" for="photodetails"><?php echo $photodetails; ?></label> <input type="hidden" name="photodetails" value="<?php echo $photodetails; ?>" > </td>
             </tr>
             <tr>
                <td> <label>Design, décor, & floristry</label> </td>
                <td> <label class="Date" for="designdate"> <?php echo $designdate; ?> </label> <input type="hidden" name="designdate" value="<?php echo $designdate; ?>" > </td>
                <td> <label class="Time" for="designtime"><?php echo $designtime; ?></label> <input type="hidden" name="designtime" value="<?php echo $designtime; ?>" >  </td>
                <td><label class="Details" for="designdetails"><?php echo $designdetails; ?></label> <input type="hidden" name="designdetails" value="<?php echo $designdetails; ?>" > </td>
             </tr>
             <td>
                <label>Service Charge:</label>
                <label class="Charge" ><?php echo $_SESSION['totalCost'],"Rs"; ?><input type="hidden" name="ServiceCharge" value="<?php echo $_SESSION['totalCost']; ?>" ></label>
             </td>
        </table>
        <input type="submit" value="Book">
    </div>
    </form>    
</body>
</html>