<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // User is not logged in, redirect to the login page
    // header("Location: Login.php");
    echo "<script>alert('Please LogIn First');window.location.href = 'LoginPage.php';</script>";
    exit;
}

// User is logged in, display the customization page
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome To CustomaizationPage</title>
        <link rel="stylesheet" href="assets/css/style(Custom).css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    </head>
    <title>Welcome To Customaization Page ! </title>
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
                    <li><a href="Logout.php" class="mr-4 pl-3 pr-3 active" ><b>LOGOUT</b></button></a></li> 
                    <!-- <button class="Headbtn" onclick="confirmLogout()"> LogOut </button> -->
                </ul>
            </nav>
        </header>

        <form action="Customaization.php" method="post" onsubmit="return validateForm()">
        <select id="team" name="team" onchange="changeDiv()">
            <option value="select" selected disabled>--Select Event--</option>
            <option value="Birthday Parties">Birthday Parties</option>
            <option value="Family Reunion">Family Reunion</option>
            <option value="House Opening">House Opening</option>
            <option value="Anniversary Parties">Anniversary Parties</option>
            <option value="Baby Shower">Baby Shower</option>
          </select>
          <div class="image-selection" >
            <h3>Select Themes:</h3>
            <div id="Birthday Parties" class="image-option" style="display: none;" >
                <!-- Image 1 -->
                <input type="radio" id="d1_image1" name="Theme" value="assets/img/biday1 (1).jpg">
                <label for="d1_image1"><img src="assets/img/biday1 (1).jpg" alt="image 1"></label>
                <!-- image 2 -->
                <input type="radio" id="d1_image2" name="Theme" value="assets/img/bday/biday1 (2).jpg">
                <label for="d1_image2"><img src="assets/img/bday/biday1 (2).jpg" alt="image 2"></label>
                <!-- Image 3 -->
                <input type="radio" id="d1_image3" name="Theme" value="assets/img/bday/biday1 (3).jpg">
                <label for="d1_image3"><img src="assets/img/bday/biday1 (3).jpg" alt="Image 3"></label>
                <!-- Image 4 --><br>
               <input type="radio" id="d1_image4" name="Theme" value="assets/img/bday/biday (4).jpg">
               <label for="d1_image4"> <img src="assets/img/bday/biday (4).jpg" alt="Image 4"></label>
                <!-- Image 5 -->
                <input type="radio" id="d1_image5" name="Theme" value="assets/img/bday/biday1 (5).jpg">
                <label for="d1_image5"><img src="assets/img/bday/biday1 (5).jpg" alt="Image 5"></lable>
                <!-- Image 6 -->
                <input type="radio" id="d1_image6" name="Theme" value="assets/img/bday/biday1 (6).jpg">
                <label for="d1_image6"><img src="assets/img/bday/biday1 (6).jpg" alt="Image 6"></label>
            </div>
            
            <div id="Family Reunion" class="image-option" style="display: none;">
                <!-- Image 1 -->
               <input type="radio" id="d2_image1" name="Theme" value="assets/img/family reu/familyi (0).jpg">
               <label for="d2_image1"> <img src="assets/img/family reu/familyi (0).jpg" alt="Image 3"></label>
                <!-- Image 2 -->
                <input type="radio" id="d2_image2" name="Theme" value="assets/img/family reu/familyi (1).jpg" alt="Image 4">
                <label for="d2_image2"><img src="assets/img/family reu/familyi (1).jpg" alt="Image 4"></lable>
                <!-- image  3 -->
                <input type="radio" id="d2_image3" name="Theme" value="assets/img/family reu/familyi (2).jpg" alt="Image 4">
                <label for="d2_image3"><img src="assets/img/family reu/familyi (2).jpg" alt="Image 4"></lable><br>
                <!-- image 4 -->
                <input type="radio" id="d2_image4" name="Theme" value="assets/img/family reu/familyi (3).jpg" alt="Image 4">
                <label for="d2_image4"><img src="assets/img/family reu/familyi (3).jpg" alt="Image 4"></lable>
                <!-- image 5 -->
                <input type="radio" id="d2_image5" name="Theme" value="assets/img/family reu/familyi (4).jpg" alt="Image 4">
                <label for="d2_image5"><img src="assets/img/family reu/familyi (4).jpg" alt="Image 4"></lable>
                <!-- image 6 -->
                <input type="radio" id="d2_image6" name="Theme" value="assets/img/family reu/familyi (5).jpg" alt="Image 4">
                <label for="d2_image6"><img src="assets/img/family reu/familyi (5).jpg" alt="Image 4"></lable>
            </div>
            
            <div id="House Opening" class="image-option" style="display: none;">
                <!-- Image 1 -->
                <input type="radio" id="d3_image1" name="Theme" value="assets/img/house opening (1)/house opening (1).jpg">
                <label for="d3_image1"><img src="assets/img/house opening (1)/house opening (1).jpg" alt="Image 5"></lable>
                <!-- Image 2 -->
                <input type="radio" id="d3_image2" name="Theme"  value="assets/img/house opening (1)/house opening (6).jpg">
                <label for="d3_image2"><img src="assets/img/house opening (1)/house opening (6).jpg" alt="Image 6"></lable>
                <!-- image 3 -->
                <input type="radio" id="d3_image3" name="Theme"  value="assets/img/house opening (1)/house opening (2).jpg">
                <label for="d3_image3"><img src="assets/img/house opening (1)/house opening (2).jpg" alt="Image 6"></lable><br>
                <!-- image 4 -->
                <input type="radio" id="d3_image4" name="Theme"  value="assets/img/house opening (1)/house opening (3).jpg">
                <label for="d3_image4"><img src="assets/img/house opening (1)/house opening (3).jpg" alt="Image 6"></lable>
                <!-- image 5 -->
                <input type="radio" id="d3_image5" name="Theme"  value="assets/img/house opening (1)/house opening (4).jpg">
                <label for="d3_image5"><img src="assets/img/house opening (1)/house opening (4).jpg" alt="Image 6"></lable>
                <!-- image 6 -->
                <input type="radio" id="d3_image6" name="Theme"  value="assets/img/house opening (1)/house opening (5).jpg">
                <label for="d3_image6"><img src="assets/img/house opening (1)/house opening (5).jpg" alt="Image 6"></lable>
            </div>
            
            <div id="Anniversary Parties" class="image-option" style="display: none;">
                <!-- Empty div for no image -->
                <input type="radio"  id="d4_image1" name="Theme" value="assets/img/anavesri/anavesri1.jpg">
                <label for="d4_image1">  <img src="assets/img/anavesri/anavesri1.jpg" alt="Image 5"></label>
                <!-- Image 2-->
                <input type="radio" id="d4_image2" name="Theme" value="assets/img/anavesri/anaversri2.jpg">
                <label for="d4_image2"><img src="assets/img/anavesri/anaversri2.jpg" alt="Image 6"></label>
                <!-- image 3 -->
                <input type="radio" id="d4_image3" name="Theme" value="assets/img/anavesri/anaversri3.jpg">
                <label for="d4_image3"><img src="assets/img/anavesri/anaversri3.jpg" alt="Image 6"></label><br> 
                <!-- image 4 -->
                <input type="radio"  id="d4_image4" name="Theme" value="assets/img/anavesri/anaversri4.jpg">
                <label for="d4_image4"><img src="assets/img/anavesri/anaversri4.jpg" alt="Image 6"></label>
                <!-- image 5 -->
                <input type="radio" id="d4_image5" name="Theme" value="assets/img/anavesri/anavesri5.jpg">
                <label for="d4_image5"><img src="assets/img/anavesri/anavesri5.jpg" alt="Image 6"></lable>
                <!-- image 6 -->
               <input type="radio" id="d4_image6" name="Theme" value="assets/img/anavesri/anavesri6.jpg">
               <label for="d4_image6"> <img src="assets/img/anavesri/anavesri6.jpg" alt="Image 6"></lable>
            </div>
            <div id="Baby Shower" class="image-option" style="display: none;">
                <!-- image 1 -->
                <input type="radio" id="d5_image1" name="Theme"  value="assets/img/baby/baby1.jpg">
                <label for="d5_image1"><img src="assets/img/baby/baby1.jpg" alt="Image 5"></label>
                <!-- Image 2  -->
                 <input type="radio" id="d5_image2" name="Theme" value="assets/img/baby/baby2.jpg">
                 <label for="d5_image2"><img src="assets/img/baby/baby2.jpg" alt="Image 6"></lable>
                 <!-- image 3 -->
                <input type="radio" id="d5_image3" name="Theme" value="assets/img/baby/baby3.jpg">
                <label for="d5_image3"><img src="assets/img/baby/baby3.jpg" alt="Image 6"></lable><br>
                <!-- image 4 -->
                <input type="radio" id="d5_image4" name="Theme" value="assets/img/baby/baby4.jpg">
                <label for="d5_image4"><img src="assets/img/baby/baby4.jpg" alt="Image 6"></label>
                <!-- image 5 -->
                <input type="radio" id="d5_image5" name="Theme" value="assets/img/baby/baby5.jpg">
                <label for="d5_image5"><img src="assets/img/baby/baby5.jpg" alt="Image 6"></lable>
                <!-- image 6 -->
                <input type="radio" id="d5_image6" name="Theme" value="assets/img/baby/baby6.jpg">
                <label for="d5_image6"><img src="assets/img/baby/baby6.jpg" alt="Image 6"></lable>
            </div>
          </div>
          
        
        <main>
            <div class="customizer">
                <p style="margin: 0;">Customizer</p>
            </div>
            <div class="box">
                <div class="bttn">
                    <h2>Select Fecilities</h2>
                </div>    
                <div class="col-head">
                    <span style="padding-left: 160px; margin-bottom: 30px; margin-top: 10px;">Type</span>
                    <span style="padding-left: 210px; margin-bottom: 30px; margin-top: 10px;">Date</span>
                    <span style="padding-left: 200px; margin-bottom: 30px; margin-top: 10px;">Time</span>
                    <span style="padding-left: 200px; margin-bottom: 30px; margin-top: 10px;">Details</span>
                </div>
                <ul>
                    <li class="col-data " >
                        <span >
                            <input type="checkbox" id="Food/Catering" value="Food/Catering" name="Food" >
                        </span>
                        <span style="padding-left: 20px;">
                            <label style="width: 150px;" class="type" for="Food/Catering">Food/Catering</label>
                        </span>
                        <span style="padding-left: 155px;">
                            <input type="date" name="Date1" id="" class="d-t">
                        </span>
                        <span style="padding-left: 140px;">
                            <input type="time" name="time1" id="" class="d-t">
                        </span>
                        
                        <span style="padding-left: 90px;">
                            <select type="text"  class="select" name="selectedOption1">
                                <option value="Name & Contact"  selected disabled>Name & Contact</option>
                                <option value="Shubham Sandwich 77289 58260" >1.Shubham Sandwich 77289 58260</option>
                                <option value="TheSodaSplash	91167 67900" >2.TheSodaSplash	91167 67900</option>
                                <option value="Tom And Jerry Fast Food And Bakery	70143 12708" >3.Tom And Jerry Fast Food And Bakery	70143 12708 </option>
                                <option value="Naivedyam	29127 72076" >4.Naivedyam	29127 72076</option>
                                <option value="Wow! Momo	83858 28589" >5.Wow! Momo	83858 28589</option>
                                <option value="Grill Street	73402 65454" >6.Grill Street	73402 65454</option>
                                <option value="Krishna Arora Shahi Namkeen	98873 05346" >7.Krishna Arora Shahi Namkeen	98873 05346</option>
                                <option value="LunchBox - Meals and Thalis	89769 91425" >8.LunchBox - Meals and Thalis	89769 91425</option>
                                <option value="Bawarchi Fast Food	097856 76760" >9.Bawarchi Fast Food	097856 76760</option>
                                <option value="Raj Alpahar Dhaba 094612 40201" >10.Raj Alpahar Dhaba 094612 40201</option>
                                <option value="Roadster meal 097858 15133" >11.Roadster meal 097858 15133</option>
                                <option value="Vijay Restaurant 098282 79958" >12.Vijay Restaurant 098282 79958</option>
                                <option value="AGRA CHAAT BHANDAR 098296 00973" >13.AGRA CHAAT BHANDAR 098296 00973</option>
                                <option value="De Babu Bhai Cloud Kitchen 080946 08222" >14.De Babu Bhai Cloud Kitchen 080946 08222</option>
                                <option value="Moolji Ki Hotel	0291 262 1614" >15.Moolji Ki Hotel	0291 262 1614</option>
                                <option value="Shiv Bikaner Misthan Bhandar	0291 510 3784" >16.Shiv Bikaner Misthan Bhandar	0291 510 3784</option>
                                <option value="Balaji Chhole Kulchhe Chat Bhandar 82091 80670" >17.Balaji Chhole Kulchhe Chat Bhandar 82091 80670</option>
                                <option value="Shiv shankar Vada pav dabeli 98256 77596" >18.Shiv shankar Vada pav dabeli 98256 77596</option>
                                <option value="Khatri Shahi Namkeen	097844 22452" >19.Khatri Shahi Namkeen	097844 22452</option>
                                <option value="Vijay Pav Bhaji	094619 08467" >20.Vijay Pav Bhaji	094619 08467</option>
                            </select>
                        </span>
                        
                    </li>
                    <li class="col-data " >
                        <span >
                            <input type="checkbox" id="Equipment rental" value="Equipment rental" name="Equipment" >
                        </span>
                        <span style="padding-left: 15px;">
                        
                            <label style="width: 10px;" class="type" for="Equipment rental">Equipment rental</label>
                        </span>
                        <span style="padding-left: 140px;">
                            <input type="date" name="Date2" id="" class="d-t">
                        </span>
                        <span style="padding-left: 140px;">
                            <input type="time" name="time2" id="" class="d-t">
                        </span>
                        
                        <span style="padding-left: 90px;">
                            <select type="text"  class="select" name="selectedOption2">
                                <option value="Name & Contact" selected disabled>Name & Contact</option>
                                <option value=" Khwaish 8003817898">1. Khwaish 8003817898</option>
                                <option value=" Piyush 6376110691">2. Piyush 6376110691</option>
                                <option value=" Prince 9521534783">3. Prince 9521534783</option>
                                <option value=" Rahul tak 9829063528">4. Rahul tak 9829063528</option>
                                <option value=" Raunak Bhati 8209614681">5. Raunak Bhati 8209614681</option>
                                <option value=" Zaid 8302748811">6. Zaid 8302748811</option>
                                <option value=" Asim 9876540111">7. Asim 9876540111</option>
                                <option value=" Vishal 6565289910">8. Vishal 6565289910</option>
                                <option value=" Manju ji 9864572438">9. Manju ji 9864572438</option>
                                <option value=" Kamla ji 9864573822">10. Kamla ji 9864573822</option>
                                <option value=" Parvej 6578234923">11. Parvej 6578234923</option>
                                <option value=" Dushyant 6328347923">12. Dushyant 6328347923</option>
                                <option value=" Aman aseri">13. Aman aseri</option>
                                <option value=" Mohan kumar 9412987645">14. Mohan kumar 9412987645 </option>
                                <option value=" Chirag tiwari 6398236748">15. Chirag tiwari 6398236748</option>
                                <option value=" Rohit 9823098745 ">16. Rohit 9823098745 </option>
                                <option value=" Ramesh ji 9487324753">17. Ramesh ji 9487324753</option>
                                <option value=" Paramnath ji 6384592386">18. Paramnath ji 6384592386</option>
                                <option value=" Ranveer 6374582398">19. Ranveer 6374582398</option>
                                <option value=" Hemlata ji 6398753678">20. Hemlata ji 6398753678</option>
                            </select>
                        </span>
                        
                    </li>
                    <li class="col-data " >
                        <span >
                            <input type="checkbox" id="Music and entertainment" value="Music and entertainment" name="Music" >
                        </span>
                        <span style="padding-left: 15px;">
                            <label style="width: 150px;" class="type" for="Music and entertainment">Music and entertainment</label>
                        </span>
                        <span style="padding-left: 85px;">
                            <input type="date" name="Date3" id="" class="d-t">
                        </span>
                        <span style="padding-left: 140px;">
                            <input type="time" name="time3" id="" class="d-t">
                        </span>
                        
                        <span style="padding-left: 90px;">
                            <select type="text"  class="select" name="selectedOption3">
                                <option value=" Name & Contact" selected disabled>Name & Contact</option>
                                <option value=" Roland Music & Events 077279 77786">1.Roland Music & Events 077279 77786</option>
                                <option value=" Rishiraj wedding Event group 085608 08862">2.Rishiraj wedding Event group 085608 08862</option>
                                <option value=" Nav Tarang Event	094141 33822">3.Nav Tarang Event	094141 33822</option>
                                <option value=" Munna Darbar Band & D.J. Sound	077279 77786">4.Munna Darbar Band & D.J. Sound	077279 77786</option>
                                <option value=" SR DJ SOUND & Lights	077279 71315">5.SR DJ SOUND & Lights	077279 71315</option>
                                <option value=" Navratna Events & Sound	097826 81424">6.Navratna Events & Sound	097826 81424</option>
                                <option value=" Vinayak DJ	077378 84845">7.Vinayak DJ	077378 84845</option>
                                <option value=" J.B.Light And Craft !!	093518 30049">8.J.B.Light And Craft !!	093518 30049</option>
                                <option value=" Divines event	080584 22771">9.Divines event	080584 22771</option>
                                <option value=" PRABHU AMPLIFIER JODHPUR	098256 88661">10.PRABHU AMPLIFIER JODHPUR	098256 88661</option>
                                <option value=" Maharaja Band	098291 76510">11.Maharaja Band	098291 76510</option>
                                <option value=" YAGYA DJ SOUND	094141 33221">12.YAGYA DJ SOUND	094141 33221</option>
                                <option value=" Lucky Band	094144 11533">13.Lucky Band	094144 11533</option>
                                <option value=" Star Band	098291 10694">14.Star Band	098291 10694</option>
                                <option value=" Haniya Dj	7665930202">15.Haniya Dj	7665930202</option>
                                <option value=" Rhythm of Rajasthan	 095711 78501">16.Rhythm of Rajasthan	 095711 78501</option>
                                <option value=" Kanak DJ Sound Ratanada	077379 03356">17.Kanak DJ Sound Ratanada	077379 03356</option>
                                <option value=" DJ NADEEM	098280 70432">18.DJ NADEEM	098280 70432</option>
                                <option value=" Dj smit	9828058561">19	Dj smit	9828058561</option>
                                <option value=" SUNDER band	098291 53163">20.SUNDER band	098291 53163</option>
                            </select>
                        </span>
                        
                    </li>
                    <li class="col-data " >
                        <span >
                            <input type="checkbox" id="Photographer/videographer" value="Photographer/videographer" name="Photographer" >
                        </span>
                        <span style="padding-left: 10px;">
                            <label style="width: 150px;" class="type" for="Photographer/videographer">Photographer/videographer</label>
                        </span>
                        <span style="padding-left: 70px;">
                            <input type="date" name="Date4" id="" class="d-t">
                        </span>
                        <span style="padding-left: 140px;">
                            <input type="time" name="time4" id="" class="d-t">
                        </span>
                        
                        <span style="padding-left: 90px;">
                            <select type="text"  class="select" name="selectedOption4">
                                <option value="Name & Contact" selected disabled>Name & Contact</option>
                                <option value="IClick StudiOZ	097820 29207">1.IClick StudiOZ	097820 29207</option>
                                <option value="Krishna Clicks Photography Studio	096021 37376">2.Krishna Clicks Photography Studio	096021 37376</option>
                                <option value="The Milan Studio	077376 26279">3.The Milan Studio	077376 26279</option>
                                <option value="Hinglaj Editing Studio	077421 97056">4.Hinglaj Editing Studio	077421 97056</option>
                                <option value="Rj_naksh_photography	079769 46416">5.Rj_naksh_photography	079769 46416</option>
                                <option value="Arora Harshit Photography	094137 18125">6.Arora Harshit Photography	094137 18125</option>
                                <option value="WEDDSHOOTER	080037 13337">7.WEDDSHOOTER	080037 13337	</option>
                                <option value="H.R. Video	099298 88484">8.H.R. Video	099298 88484	</option>
                                <option value="A Himalaya photography Studio	098293 81171">9.A Himalaya photography Studio	098293 81171</option>
                                <option value="Tasvir_photography	094144 78477">10.Tasvir_photography	094144 78477</option>
                                <option value="Wedding Photographer in Jodhpur - DV Films	094608 81100">11.Wedding Photographer in Jodhpur - DV Films	094608 81100</option>
                                <option value="S.G Photography	098291 66532">12.S.G Photography	098291 66532	</option>
                                <option value="Impresio Wedding photography & pre wedding shoot	099285 88659">13.Impresio Wedding photography & pre wedding shoot	099285 88659</option>
                                <option value="Rex Studio	094142 05030">14.Rex Studio	094142 05030</option>
                                <option value="The wed cinema	082099 33729">15.The wed cinema	082099 33729</option>
                                <option value="EVENTSCLICKER PHOTOGRAPHY STUDIO	096641 08041">16.EVENTSCLICKER PHOTOGRAPHY STUDIO	096641 08041</option>
                                <option value="CAPTURED MOMENTS PHOTOGRAPHY	082330 80768">17.CAPTURED MOMENTS PHOTOGRAPHY	082330 80768</option>
                                <option value="Chandra Studio	099509 9646">18.Chandra Studio	099509 96468</option>
                                <option value="F19 Photography	097990 06683">19.F19 Photography	097990 06683</option>
                                <option value="Wedding Planner	070147 88781">20.Wedding Planner	070147 88781</option>
                            </select>
                        </span>
                        
                    </li>
                    <li class="col-data " >
                        <span >
                            <input type="checkbox" id="Design, décor, & floristry" value="Design, décor, & floristry" name="Design">
                        </span>
                        <span style="padding-left: 10px;">
                            <label style="width: 150px;" class="type" for="Design, décor, & floristry">Design, décor, & floristry</label>
                        </span>
                        <span style="padding-left: 90px;">
                            <input type="date" name="Date5" id="" class="d-t">
                        </span>
                        <span style="padding-left: 140px;">
                            <input type="time" name="time5" id="" class="d-t">
                        </span>
                        
                        <span style="padding-left: 90px;">
                            <select type="text"  class="select" name="selectedOption5">
                                <option value="Name & Contact" selected disabled>Name & Contact</option>
                                <option value="Jain Lagan Mandap 078775 35383">1.Jain Lagan Mandap 078775 35383</option>
                                <option value="Shagun flower decoration	072275 31983">2.Shagun flower decoration	072275 31983</option>
                                <option value="wedding decoration	82239 78963">3.wedding decoration	82239 78963	</option>
                                <option value="Shagun flower decoration & event	094144 17817">4.Shagun flower decoration & event	094144 17817</option>
                                <option value="ADONIS - By Anusha Mody	 098297 12313">5.ADONIS - By Anusha Mody	 098297 12313	</option>
                                <option value="DDS Entertainment Jodhpur	094622 82282">6.DDS Entertainment Jodhpur	094622 82282</option>
                                <option value="Babita’s Décor	 082337 33712">7.Babita’s Décor	 082337 33712</option>
                                <option value="Sankhla events	 095097 54347">8.Sankhla events	 095097 54347</option>
                                <option value="Umrao Weddings	063676 41665">9.Umrao Weddings	063676 41665</option>
                                <option value="Closestfour events	 063754 29345">10.Closestfour events	 063754 29345</option>
                                <option value="BALAJI WEDDINGS AND EVENTS	 082094 26983">11.BALAJI WEDDINGS AND EVENTS	 082094 26983</option>
                                <option value="Wedding knot	 089555 24448">12.Wedding knot	 089555 24448</option>
                                <option value="Jodhpur Events And Wedding Planner	 075973 67879">13.Jodhpur Events And Wedding Planner	 075973 67879</option>
                                <option value="RK Flowers N Cakes	 098281 00928">14.RK Flowers N Cakes	 098281 00928</option>
                                <option value="D'Decor Store -Jodhpur	 0291 294 4005">15.D'Decor Store -Jodhpur	 0291 294 4005</option>
                                <option value="House of Memories by Himani	083064 27484">16.House of Memories by Himani	083064 27484</option>
                                <option value="Radha krishna flower & balloons decoration	094688 10363">17.Radha krishna flower & balloons decoration	094688 10363</option>
                                <option value="The Art Deco	 088751 11145">18.The Art Deco	 088751 11145</option>
                                <option value="Balloon wala Jodhpur	082334 70773">19.Balloon wala Jodhpur	082334 70773</option>
                                <option value="Singhvi Tent House	0291 243 3377">20.Singhvi Tent House	0291 243 3377</option>

                            </select>
                        </span>
                        
                    </li>
                                        
                </ul>
            </div>
        </main>
        
        <button class="image-button footer-button">Done</button>
    </form>
        
        
        
        <footer class="container">
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
                     <h4 class="pt-2"><b> INFORMATION</b></h4>
                     <li>Pricing</li>
                     <li>About Us</li>
                     <li>Press Room</li>
                     <li>Business</li>
                     <li>Jobs</li>
                     <li>Sell Your Content</li>
                 </ul>
                <ul class="ml-5 ">
                     <h4 class="pt-2"><b> LEGAL</b></h4>
                     <li>Terms and Conditions</li>
                     <li>Privacy Policy</li>
                     <li>Copyright Information</li>
                     <li>Cookies Policy</li>
                     <li>Support</li>
                     <li>Contact</li>
                 </ul>
             </div>    
         </footer>
          <script src="https://kit.fontawesome.com/0165650a90.js" crossorigin="anonymous"></script>
         <script src="assets/js/script.js"></script>
         <script>
            function confirmLogout() {
                var logoutConfirmed = confirm("Are you sure you want to logout?");
                if (logoutConfirmed) {
                    window.location.href = "index.php"
                }
                else{
                    window.location.href = "CustomaizationPage.php"
                }
            }
            function validateForm() {
            var event = document.getElementById("team").value;
            if (event === "select") {
                alert("Please select an event.");
                return false;
            }
            return true;
        }
        </script>
     </body>
 </html>