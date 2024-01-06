<?php
$login = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mysqli = require __DIR__ . "/database.php";

    $email = $_POST["email"];
    $password = $_POST["password"];
    $usernamequery = "SELECT username FROM users WHERE email = '" . $email . "'";
    $result = mysqli_query($mysqli,$usernamequery); 
    if ($result) {
      $row = mysqli_fetch_assoc($result); 
           if ($row) {
              $username = $row['username'];
          } else {
              echo "No username found for the given email.";
          }
      } else {
          echo "Error: " . mysqli_error($mysqli);
      }
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["hashedPassword"])) {
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header("Location: CustomaizationPage.php"); // Redirect to a welcome page or dashboard
            exit;
        } else {
            // Incorrect password
            echo "<script>alert('Incorrect password');</script>";
        }
    } else {
        // User not found
        echo "<script>alert('USER NOT FOUND');window.location.href = 'Signup.html';</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="./assets/css/style3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
  <header>
    <nav>
      <ul>
          <a href="index.php"><span><i class="fa-sharp fa-solid fa-arrow-left"></i> Home</span></a>
      </ul>
    </nav>
  </header>

    <form action="" class="LogIn-Form" name="myForm" onsubmit="return validateForm()"  method="post">
        <div class="container">
          <h2>LogIn</h2>
          <div>
            <i class="fa-solid fa-envelope"></i>
            <input type="email" placeholder="Email-ID" id="Fname" name="email" autocomplete="off" required>
             <!-- <br><b><span id="Name" class="formerror" > </span></b> -->
          </div>
          <div>
           <i class="fa-solid fa-lock fa-lg"></i>
           <input type="password" placeholder="Password" id="Fpass" autocomplete="off" name="password" required> <br><b><span id="Password" class="formerror" > </span></b>
          </div>

          <p class="Forgotpss"><a href="ForgotPassword.html">Forgot password?</a></p>
          <div>
            <input type="submit" value="LogIn" class="Btn" ><br><br>
            <p>Don't have an account?<a href="Signup.html"> SignUp</a></p>
          </div>      
        </div>
      </form>

      <script>
      function validateForm()
      {
      //  var name = document.getElementById("Fname").value;
       var pass = document.getElementById("Fpass").value;
       clearErrors();

      //  if ((name.length < 3) || (name.length > 20)){
      //   document.getElementById('Name').innerHTML ="*User Name Content atleast 3 to 19 character *";
      //   return false
      //  }

      //  if (!isNaN(name)){
      //   document.getElementById('Name').innerHTML ="*Only Characters allowed*";
      //   return false
      //  }
       if ((pass.length < 5) || (pass.length > 20)){
        document.getElementById('Password').innerHTML ="*Password Content atleast 5 to 19 Characters*";
        return false
       }
      }
      function clearErrors(){
       errors = document.getElementsByClassName('formerror');
       for(let item of errors)
       {
        item.innerHTML = "";
       }
       }
   

      </script>
    
</body>
</html>