<?php
session_start();
$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest';

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // If the user is not logged in, redirect to the login page
    header("Location: LLSPage/login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>ADD ORDER | BOOSTIFY</title>
</head>
<body class="HPBody">
    <!----------------------------------------CONTENTS SA PROFILE NGA POPUP--------------------------------------------->
    <div class="popup-container">
        <div class="popup-box">
            <i class='bx bx-arrow-back'></i>
            <div class="tab_box">
                <button class="tab_btn active"><i class='bx bx-user'></i>My Profile</button>
                <button class="tab_btn"><i class='bx bx-revision'></i>Updates</button>
                <button class="tab_btn"><i class='bx bx-detail'></i>Privacy Policy</button>
            </div>
            <div class="content_box">

                <div class="profile-content active">
                    <h2>MY PROFILE</h2>
                    <div class="profile-container">
                        <div class="profpic">
                            <img src="Images/profile2.svg" alt="">
                            <p>Profile Picture</p>
                        </div>
                        <div class="credentials">
                            <div class="name-address">
                                <h3>CLIVE OWEN N. DELIMA</h3>
                            </div>
                            <div class="user-info">
                                <div class="info-label">User ID:</div>
                                <div class="info-value">21101683</div>
                            
                                <div class="info-label">Email Address:</div>
                                <div class="info-value">delimacliveowen@gmail.com</div>
                            </div>
                        </div>                      
                    </div>
                    <div class="edit_or_logout">
                        <form action="LLSPage/logout.php" method="post" style="display: inline;">
                            <button type="submit" class="logout_btn">Log Out</button>
                        </form>
                    </div>                   
                </div>
<!--------------------------------------------------------------UPDATE------------------------------------------------------------------>
                <div class="profile-content updates">
                    <h2>UPDATES</h2>
                    <p><b>Upcoming Version 1.3.3 Update</b></p>
                    <p><br>Boostifywould like to announce new exciting features to be released on December 12,2023. So stay tuned and mark your 
                        calendars for the update release right here at Boostify.<br></p>
                    <p><br><b>What’s New?</b><br><br>Introducing <b>Dark Mode</b> - Dark Mode is more than just a color scheme, 
                        it’s a modern and sophisticated way to interact with our website. Providing a visually comfortable 
                        and energy-saving alternative to the traditional light mode. Whether you’re a night owl browsing in the 
                        late hours or someone who simply prefers a dark aesthetic, this feature is designed with you in mind.
                    </p>
                    <p><br><b>Key Features of Dark Mode:</b><br>1. Easier on the Eyes: Dark Mode reduces eye strain and minimizes blue light exposure, 
                        creating a more comfortable reading environment.<br>2. Energy Efficient: If you're using a device with an OLED or AMOLED screen, 
                        Dark Mode can help conserve battery life by emitting fewer pixels.<br>3. Stylish Interface: Immerse yourself in a sleek, 
                        modern design that's easy on the eyes and makes content stand out.<br>4. Customizable Settings: Tailor Dark Mode to your 
                        preference with adjustable settings to suit your comfort level.<br><br><b>Background Music</b> - Music has the power to elevate and 
                        enrich your time spent on our platform, and we're excited to bring you a curated selection of tunes to accompany your 
                        journey through ISMIS for Students. Whether you're working, exploring content, or just relaxing, you can now personalize 
                        your experience with the perfect soundtrack.<br><br><b>Key Features of Background Music:</b><br>1. Seamless Integration: Enjoy a smooth 
                        transition between tracks as you navigate through ISMIS for Students. The music will effortlessly complement your browsing 
                        experience.<br>2. Curated Playlists: Discover handpicked playlists designed to enhance different moods and activities. From 
                        upbeat tunes to mellow melodies, we've got the right vibe for every moment.<br>3. Personalized Preferences: Tailor your 
                        music experience by choosing genres, adjusting volume levels, or opting for a shuffle mode that keeps things fresh and 
                        exciting.<br>4. Non-Intrusive Controls: Easily control the music without leaving your current page. Play, pause, skip, or adjust 
                        the volume with user-friendly controls that won't disrupt your workflow.<br><br><b>Minor Bug Fixes</b> - We've resolved various minor 
                        bugs that may have impacted your browsing experience. Our team has diligently combed through reported issues to ensure a 
                        smoother and more seamless interaction with ISMIS for Students.</p>
                </div>
<!--------------------------------------------------------------PRIVACY POLICY------------------------------------------------------------------>
                <div class="profile-content policy">
                    <h2>PRIVACY POLICY</h2>
                    <h1>Boostify Privacy Policy</h1>
        <p><br><b>Effective Date:</b> 07/10/2024</p>
        <p>Welcome to Boostify, your trusted game boosting service. At Boostify, we are committed to protecting your privacy and ensuring the security of your personal information. This Privacy Policy outlines how we collect, use, and safeguard your information when you use our website and services.</p>
        
        <h1><br>Information We Collect</h1>
        
        <h3><br>Personal Information</h3>
        <p><br>When you use Boostify, we may collect the following personal information:</p>
        <ul>
            <li><b>Name</b></li>
            <li><b>Email Address</b></li>
            <li><b>Date of Birth</b></li>
            <li><b>Payment Information</b></li>
            <li><b>Contact Number</b></li>
            <li><b>Game Account Information</b></li>
        </ul>
        
        <h3><br>Non-Personal Information</h3>
        <p><br>We may also collect non-personal information such as:</p>
        <ul>
            <li><b>Browser Type</b></li>
            <li><b>IP Address</b></li>
            <li><b>Device Information</b></li>
            <li><b>Usage Data</b></li>
        </ul>
        
        <h1><br>How We Use Your Information</h1>
        <p><br>Boostify uses your information for the following purposes:</p>
        <ul>
            <li><b>To Provide Services:</b> We use your information to deliver game boosting services and support.</li>
            <li><b>To Process Payments:</b> Your payment information is used solely for billing and transaction purposes.</li>
            <li><b>To Communicate:</b> We may use your email address to send you updates, promotions, and respond to your inquiries.</li>
            <li><b>To Improve Our Services:</b> Non-personal information helps us analyze trends and improve our website and services.</li>
        </ul>
        
        <h1><br>Sharing Your Information</h1>
        <p><br>Boostify does not sell, trade, or rent your personal information to third parties. We may share your information with:</p>
        <ul>
            <li><b>Service Providers:</b> Trusted third-party services that assist us in operating our website and delivering services, under confidentiality agreements.</li>
            <li><b>Legal Requirements:</b> If required by law or to protect the rights, property, or safety of Boostify, our users, or others.</li>
        </ul>
        
        <h1><br>Security of Your Information</h1>
        <p><br>We implement a variety of security measures to maintain the safety of your personal information. However, no method of transmission over the internet or electronic storage is 100% secure. While we strive to protect your information, we cannot guarantee its absolute security.</p>
        
        <h1><br>Your Choices</h1>
        <p><br>You have the right to:</p>
        <ul>
            <li><b>Access and Update:</b> Review and update your personal information by logging into your account.</li>
            <li><b>Opt-Out:</b> Unsubscribe from marketing emails by following the instructions in the email.</li>
            <li><b>Delete Account:</b> Request the deletion of your account and personal information by contacting us.</li>
        </ul>
        
        <h1><br>Changes to This Privacy Policy</h1>
        <p><br>Boostify may update this Privacy Policy from time to time. We will notify you of any significant changes by posting the new policy on our website. Please review this policy periodically for any updates.</p>
        
        <h1><br>Contact Us</h1>
        <p>If you have any questions or concerns about this Privacy Policy, please contact us at:</p>
        <p><br><b>Email:</b> boostify@gmail.com<br>
        <b>Number:</b> +63 0961-133-5861</p>
        
        <p><br>Thank you for choosing Boostify. Your privacy and trust are important to us.</p>
      <p>---<br>
        <br>Boostify Team</p>
                    </div>
                </div>
            </div>
        </div>
    <!-------------------------------------------------------SA MAIN BODY NA NI---------------------------------------------------------->
<header class="OWHeader">
    <nav class="navbar">
        <div class="logo">
            <img src="Images/Logo.svg" width="400" height="300">
            <h4>Boostify</h4>
        </div>
        <div class="navbar_right">
            <div class="nav-home"><a class="btn" href="ClientHomePage.php"><i class='bx bxs-home'></i><p>HOME</p></a></div>
            <div class="nav-order"><a class="btn active" href="ClientOrders.php"><i class='bx bxs-notepad'></i><p>ORDERS</p></a></div>
            <div class="nav-booster"><a class="btn" href="#"><i class='bx bxs-game'></i><p>GAME LIST</p></a></div>
            <div class="notificationBell">
                <i class='bx bxs-bell' id="bell-icon"></i>
                <div class="notification_dd" id="notification_dd">
                    <ul class="notification_ul">
                        <li class="successful starbucks">
                            <div class="notify_icon">
                                <span class="icon"><img src="Images/profile2.svg" alt=""></span>
                            </div>
                            <div class="notify_data">
                                <div class="notify_title"><p>Lorem ipsum dolor sit.</p></div>
                                <div class="notify_subtitle"><p>Lorem ipsum dolor sit amet consectetur.</p></div>
                            </div>
                            <div class="notify_status"><p>Success</p></div>
                        </li>
                        <li class="Failed mcdo">
                            <div class="notify_icon">
                                <span class="icon"><img src="Images/profile.svg" alt=""></span>
                            </div>
                            <div class="notify_data">
                                <div class="notify_title"><p>Lorem ipsum dolor sit.</p></div>
                                <div class="notify_subtitle"><p>Lorem ipsum dolor sit amet consectetur.</p></div>
                            </div>
                            <div class="notify_status"><p>Failed</p></div>
                        </li>
                        <!-- <li class="show-all">
                            <p class="link">Show All activities</p>
                        </li> -->
                    </ul>
                </div>
            </div>
            
            <div class="profile">
                <img src="Images/profile2.svg" alt="profile_pic">
            </div>
        </div>
    </nav>
</header>
<main class="Client-BoosterMain">
    <div class="BigBlueBox">
        <h1>SEARCH BOOSTER</h1>
        <div class="BMSearch"><input class="BMSearch-text" type="text"><i class='bx bx-search'></i></div>
        <h2>Games</h2>
        <div class="filter-games">
            <p>A</p>
            <div class="A-Buttons">
                <button data-game="VALORANT">VALORANT</button>
                <button data-game="GENSHIN IMPACT">GENSHIN IMPACT</button>
                <button data-game="LEAGUE OF LEGENDS">LEAGUE OF LEGENDS</button>
                <button data-game="COUNTER STRIKE 2">COUNTER STRIKE 2</button>
                <button data-game="APEX LEGENDS">APEX LEGENDS</button>
                <button data-game="DOTA 2">DOTA 2</button>
                <button data-game="MOBILE LEGENDS">MOBILE LEGENDS</button>
            </div>
        </div>
    </div>
    <div class="BigBlueBox2">
        <h1>AVAILABLE BOOSTERS</h1>
        <div class="avail-boosters" id="avail-boosters">
            <!-- Booster data will be inserted here dynamically -->
        </div>
    </div>
</main>
<script src="script.js"></script>


    <!--------------------------------------FOOTER------------------------------------------->
    <footer>
        <div class="row-footer">
            <div class="col-footer">
                <img src="Images/Logo.svg" class="Footerlogo" height="70px">
                <p>Boostify, Inc. was founded in 2024 with the dual goals of offering top-notch piloting service and supporting the player base via our services offered. Boostify was born out of a deep combination of convenience and experiences as a gamer. </p>
            </div>
            <div class="col-footer">
            <h3>Office <div class="underline-office"><span></span></div></h3>
            <p>UNIT 2A, FLC Center</p>
            <p>888 Hernan Cortes Street</p>
            <p>Kasambagan, Mandaue City</p>
            <p>Cebu, Philippines, 6014</p>
            <p class="email-id">boostify@gmail.com</p>
            <h4>+63 0961-133-5861</h4>
            </div>
            <div class="col-footer">
            <h3>Links <div class="underline-links"><span></span></div></h3>
                <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                </ul>
            </div>
        <div class="col-footer">
            <h3>Newsletter <div class="underline-news"><span></span></div></h3>
            <form>
                <i class='bx bxs-envelope' ></i>
                <input type="email" id="email" name="email" autocomplete="email" placeholder="Enter your email address" required>
                <button type="submit"><i class='bx bx-right-arrow-alt' ></i></button>
            </form>
                <div class="icons">
                <a href= "https://www.facebook.com/glmodelsofficial" target="_blank" class="fa fa-facebook"></a>
                <i class='bx bxl-facebook-circle' ></i>
                <i class='bx bxl-twitter'></i>
                <a href="https://www.instagram.com/gl_models_official/" target="_blank" class="fa fa-instagram"></a>
                <i class='bx bxl-instagram-alt' ></i>
            </div>
         </div>
        </div>
        <hr>
        <p class="copyright">Boostify, Inc. @ 2024 - All Rights Reserved</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
