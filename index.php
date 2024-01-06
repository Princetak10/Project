<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Project</title>
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    </head>
    <body>
        <header class="">
            <div class="logo">
                <img src="assets/img/LOGO.gif" alt="Logo"> 
            </div>
            <nav>
                <ul>
                    <li><a href="#" class="pr-5"><b>HOME</b></a></li>
                    <li><a href="#what-you-get" class="pr-5"><b>SERVICES</b></a></li>
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
        <main class="mt-4">
            <figure class="img1 m-0">
                <img src="assets/img/1.png" alt="">
            </figure>
            <div class="heading">
                <p class="p1"><b>START PLANNING</b></p>
                <p class="p2"><b>EVENT <br> CUSTOMIZER</b></p>
            </div>       
            <div class="boxin">
                <div class="box1" style="width: 500px;">
                    Our team is made up of experienced professionals who are dedicated to making your event a success. We have worked with a wide range of clients, from small businesses to large corporations. We are committed to providing personalized services that meet your specific needs.Thank you for visiting our website, and we look forward to working with you to create an unforgettable event!  
                   
                    </div>
                <div class="box2" style="width: 700px;">
                    <input type="checkbox" id="rm">
                    Welcome to our website! We are a team of event management professionals who are passionate about creating unforgettable experiences for our clients. Our mission is to provide high-quality event management services that exceed the expectations of our clients. We specialize in customized event planning, where we work closely with our clients to bring their vision to life.
                    <span class="content">
                        Our vision is to become the leading event management company in our region, known for our creativity and attention to detail. We value teamwork, innovation, and customer satisfaction.
                    <br>
                    <label for="rm" style="font-weight: bolder;">Show less...</label><br>
                    </span>
                    
                    <label for="rm" style="font-weight: bolder;">Read More ></label></b>
                </div>
            </div>
        </main>
         <!-- 2nd page -->
         <section id="what-you-get" class="reveal" style="margin-top: 150px;">
            <h1>What You Get Here:</h1>
               <div class="line-1">
                    <p class="t4left mr- ml-"><span style="font-size: x-large; border-bottom: 2px greenyellow solid;"><b> Freelance Vanders</b></span><br> <span> Our Freelance Vendors page connects clients with talented professionals who specialize in catering, decor, entertainment, and more. Our carefully selected network of experienced freelance vendors helps us provide high-quality services and unforgettable events. If you're a freelance vendor interested in working with us, please contact us to learn more </span>
                    </p>
                    <p class="bg.img t4left mr-"><span style="font-size: x-large; border-bottom: 2px greenyellow solid;"> <b> Event Customization</b></span><br> <span> Make your event truly special with our event customization services. From venue selection to decor and food, we offer a wide range of options to help you create an event that is uniquely tailored to your needs and preferences. Our team of experts will work with you every step of the way to ensure that your event is a success. Contact us today to learn more and start planning your dream event!</span>
                    </p>
                    <p class="bg.img t4left mr-"><span style="font-size: x-large; border-bottom: 2px greenyellow solid;"> <b> Utility Management</b></span><br> <span> Our Utility Management service helps you save time and money by managing your utility bills for you. We work with a network of trusted providers to ensure that you get the best rates for your electricity, water, and gas bills. Our team of experts will monitor your bills, manage payments, and provide you with regular updates on your usage and costs. With our Utility Management service, you can focus on what matters most while we take care of the rest. Contact us to learn more about how we can help you manage your utility bills! </span>
                    </p>
                </div>
                <div class="line-2">    
                    <p class="bg.img t4left mr- ml-"><span style="font-size: x-large; border-bottom: 2px greenyellow solid; "> <b> Expert Advice</b></span><br> <span>Planning an event can be stressful, but it doesn't have to be. Our team of event professionals is here to help you every step of the way. We offer expert advice on everything from design to execution, so you can be confident that your event will be a success. Whether you're planning a wedding, a corporate event, or a private party, we're here to help you make it a memorable experience. With our expert advice, you'll be able to create an event that's exactly what you want it to be."</span>
                    </p>
                    <p class="bg.img t4left mr-"><span style="font-size: x-large; border-bottom: 2px greenyellow solid;"> <b> Competitive Pricing</b></span><br> <span style="margin-top: 30px;">At our event customization website, we believe that everyone should have access to affordable event planning services. That's why we offer competitive pricing on all of our packages. We'll work with you to create a package that fits your budget and your needs, so you can have the event of your dreams without breaking the bank. Our pricing is transparent and straightforward, so you'll know exactly what you're getting and how much it will cost. With our competitive pricing, you can have the event you've always wanted without sacrificing quality or service. </span>
                    </p>
                    <p class="bg.img t4left mr-"><span style="font-size: x-large; border-bottom: 2px greenyellow solid;"> <b> Memorable Experiences</b></span><br> <span>Creating a memorable experience is what we do best. From stunning decor to innovative entertainment, we'll work with you to create an event that your guests will never forget. Our team of experienced event planners will take care of every detail, so you can relax and enjoy the moment. We'll work with you to create a unique and personalized event that reflects your style and personality. With our help, you can create a memorable experience that you and your guests will cherish for years to come</span>
                    </p>
                    <div class="t4clear"></div>
                </div>
        </section>
        <section class="page3 reveal" style="margin-top: 50px;">
            <figure class="fig3">
                <img class="t4left" src="assets/img/3.png" alt="">
                <div class="t4clear"></div>
            </figure>
            <div class="list3 mt-5" >
                <ul class="container ">
                    <li><button class="image-button">Register</button></li>
                    <div class="line" ><img src="assets/img/line.png" height="40px" width="4px" alt=""></div>
                    <li><button class="image-button">Define Event</button></li>
                    <div class="line"><img src="assets/img/line.png" height="40px" width="4px" alt=""></div>
                    <li><button class="image-button">Date and Time</button></li>
                    <div class="line"><img src="assets/img/line.png" height="40px" width="4px" alt=""></div>
                    <li><button class="image-button">Add Utilities</button></li>
                    <div class="line"><img src="assets/img/line.png" height="40px" width="4px" alt=""></div>
                    <li><button class="image-button">Select Vendors</button></li>
                    <div class="line"><img src="assets/img/line.png" height="40px" width="4px" alt=""></div>
                    <li><button class="image-button">Pay</button></li>
                </ul>
            </div>
        </section>
        <footer class="container reveal">
           <button class="image-button1">Start Planning</button>
           <p>Ready to start planning your dream event? Contact us today to schedule a consultation with our team of experts. We'll work with you every step of the way to ensure that your event is a success. Let's get started!"</p>
           <div class="container ">
            <button class="image-button footer-button">Contact Us</button>
           </div>
           <div class="footer-last">
               <ul class="mr-5">
                    <h4><b> CONTENT</b></h4>
                    <li>Calendar Of Festivals</li>
                    <li>New Assets</li>
                    <li>The Most Popular Content</li>
                    <li>Search Trends</li>
                    <li>Blog</li>
                </ul>
               <ul class="m-5">
                    <h4><b> INFORMATION</b></h4>
                    <li>Pricing</li>
                    <li>About Us</li>
                    <li>Press Room</li>
                    <li>Business</li>
                    <li>Jobs</li>
                    <li>Sell Your Content</li>
                </ul>
               <ul class="ml-5 ">
                    <h4><b> LEGAL</b></h4>
                    <li>Terms and Conditions</li>
                    <li>Privacy Policy</li>
                    <li>Copyright Information</li>
                    <li>Cookies Policy</li>
                    <li>Support</li>
                    <li>Contact</li>
                </ul>
            </div>    
        </footer>
        <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/script.js"></script>
        <script type="text/javascript">
            window.addEventListener('scroll',reveal)
            function reveal(){
               var reveals = document.querySelectorAll('.reveal');
                for(var i=0; i< reveals.length;i++){
                    var windowheight = window.innerHeight;
                    var revealtop = reveals[i].getBoundingClientRect().top;
                   var revealpoint=200;
                   if(revealtop < windowheight - revealpoint)
                   {
                        reveals[i].classList.add("active");
                    }                                                                           
                  else
                    {
                         reveals[i].classList.remove("active");
                      }
                  } 
                }
</script>   
    </body>
</html>