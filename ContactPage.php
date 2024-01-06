<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <link rel="stylesheet" href="assets/css/style(Contact).css">
    <script>
        function validateForm() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var phone = document.getElementById("phone").value;
            var message = document.getElementById("message").value;
            if (!isNaN(parseFloat(name)) && isFinite(name)) {
                alert("Name cannot contain numeric values.");
                return false;
            }

            if (phone.length !== 10 || isNaN(phone)) {
                alert("Please enter a 10-digit phone number.");
                return false;
            }
            return true;
        }
    </script>
    
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
                <!-- <li><a href="LoginPage.php" class="mr-4 pl-3 pr-3 active"><b>LOGIN</b></a></li> -->
                <?php
                session_start();
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
                    echo '<li><a href="Logout.php" class="mr-4 pl-3 pr-3 active"><b>LOGOUT</b></a></li>';
                } else {
                    echo '<li><a href="LoginPage.php" class="mr-4 pl-3 pr-3 active"><b>LOGIN</b></a></li>';
                }
            ?>
            </ul>
        </nav>
    </header>
    <div class="container">
        <h2>how Can We help ?</h2>
        <p>Send Us a message!</p>
        <form action="Contact.php" class="form-contact" method="post" onsubmit="return validateForm();">
        <div>
        <label for="name"  style="padding-right: 110px;">Name:</label><br>
        <input type="text" id="name" name="name" placeholder="FullName" autocomplete="off" required><br>
        </div>

       <div> 
        <label for="email" style="padding-right: 110px;">Email:</label><br>
        <input type="email" id="email" name="email" placeholder="Email-Id" autocomplete="off"  required><br>
       </div>
       
       <div> 
        <label for="phone">Phone Number:</label><br>
        <input type="tel" id="phone" name="phone" placeholder="Moblie-Number" autocomplete="off" ><br>
    </div>
    <div>
        <label for="message">Message:</label><br>
        <textarea id="message" id="message" name="message" rows="7"; placeholder="Please Enter your message" autocomplete="off"  required></textarea><br></div> 
        
        <input type="submit" id="btn" value="Submit">
    </form>
</div>
</body>
</html>
