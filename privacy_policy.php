<!DOCTYPE html>
<html>
<head>
  <title>Criknow</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style_nav.css">
  <link rel="stylesheet" type="text/css" href="css/home.css">
</head>

<body>
  <!-- navigation bars -->
  <nav class="navbar" id="myTopnav">
    <div class="logo-image">
      <a href="./home.php"><img src="images/logo_criknow.png" class="logo">
        </img></a>
    </div><!-- logo-image -->

      <a href="./home.php">Home</a>
      <a href="./matches.php">Matches</a>
                
    <div class="dropdown">
      <button class="dropbtn" onclick="myFunction()">News 
        <i class="fa fa-caret-down"></i></button>
    <div class="dropdown-content">
        <a href="./news.php">All Stories</a>
        <a href="#">Categories</a>
        <a href="#">Topics</a>
    </div><!-- dropdown-content -->
    </div><!-- dropdown -->

    <div class="dropdown">
      <button class="dropbtn" onclick="myFunction1()">Videos 
        <i class="fa fa-caret-down"></i></button>
    <div class="dropdown-content">
        <a href="./videos.php">All Videos</a>
        <a href="#">Categories</a>
        <a href="#">Playlists</a>
    </div><!-- dropdown-content -->
    </div><!-- dropdown -->

    <div class="dropdown">
      <button class="dropbtn" onclick="myFunction2()">Teams
        <i class="fa fa-caret-down"></i></button>
    <div class="dropdown-content">
      <div class="row" style="width: 440px;">
        <div class="column">
          <h4 class="teams">TEST TEAMS</h4>
            <a href="./teams.php">India</a>
            <a href="#">Pakistan</a>
            <a href="#">Australia</a>
            <a href="#">Sri Lanka</a>
            <a href="#">Bangladesh</a>
            <a href="#">England</a>
            <a href="#">Windies</a>
            <a href="#">South Africa</a>
            <a href="#">Zimbabwe</a>
            <a href="#">New Zealand</a>
            <a href="#">Ireland</a>
            <a href="#">Afghanistan</a>
        </div><!-- column -->

        <div class="column">
          <h4 class="teams">ASSOCIATE</h4>
            <a href="#" style="width: 210px;">United Arab Emirates</a>
            <a href="#">Hong Kong</a>
            <a href="#">Kenya</a>
            <a href="#" style="width: 244px;">United States of America</a>
            <a href="#">Scotland</a>
            <a href="#">Netherland</a>
            <a href="#">Bermuda</a>
            <a href="#">Canada</a>
            <a href="#">Uganda</a>
            <a href="#">Malaysia</a>
            <a href="#">Nepal</a>
            <a href="#">Germany</a>
        </div><!-- column -->
      </div><!-- row -->
            <a href="./teams.php"><i class="team-more">More...</i></a>
    </div><!-- dropdown content -->
    </div><!-- dropdown -->

      <a href="./players.php">Players</a>

    <div class="dropdown">
      <button class="dropbtn">More
        <i class="fa fa-caret-down"></i></button>
    <div class="dropdown-content">
        <a href="#">Photos</a>
        <a href="#">Mobile Apps</a>
        <a href="#">Careers</a>
        <a href="#">Contact Us</a>
    </div><!-- dropdown content -->
    </div> <!-- dropdown -->

      <!-- this is for search box -->
      <input type="text" name="search" placeholder="Search">
            <i class="fa fa-search search-icon"></i>

      <a href="javascript:void(0);" style="font-size:20px;" class="icon" onclick="myFunction()">&#9776;</a>

  </nav><!-- navbar -->



<!-- This is news list api -->
<?php
session_start();
    $url1 = 'https://criknowapp.herokuapp.com/get_news_list/';
    $options1 = array(
      'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'GET',
      ),
    );
    $context1 = stream_context_create($options1);
    $output1 = file_get_contents($url1, false,$context1);
   /* echo $output4;*/
    $arr1 = json_decode($output1,true);  
    // echo $arr3['news'][0]['image_url']['url'];
?>

<!-- This is featured videos api -->
<?php
session_start();
    $url2 = 'https://criknowapp.herokuapp.com/get_featured_videos/';
    $options2 = array(
      'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'GET',
      ),
    );
    $context2 = stream_context_create($options2);
    $output2 = file_get_contents($url2, false,$context2);
   /* echo $output4;*/
   $arr2 = json_decode($output2,true); 
?>

<!-- This is featured news api -->
<?php
session_start();
    $url3 = 'https://criknowapp.herokuapp.com/get_featured_news/';
    $options3 = array(
      'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'GET',
      ),
    );
    $context3 = stream_context_create($options3);
    $output3 = file_get_contents($url3, false,$context3);
   /* echo $output4;*/
    $arr3 = json_decode($output3,true); 
?>

<!-- this is live matches api -->
<?php
session_start();
    $url4 = 'https://rest.entitysport.com/v2/matches/?token=871a3fd1baf7fdd00455bc7eca1258db&status=3&paged=1&per_page=40';
    $options4 = array(
      'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'GET',
      ),
    );
    $context4 = stream_context_create($options4);
    $output4 = file_get_contents($url4, false,$context4);
   /* echo $output4;*/
    $arr4 = json_decode($output4,true); 
    // var_dump($arr4); 
    //  echo $arr4['response']['items'][0]['teama']['scores_full'];
?>
<div class="row">
<div class="col-lg-2 col-sm-2 col-md-2 col-xs-12"></div>
<div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
    <div class="card" style="background-color: white;">
    <div class="conatiner" style="margin-left: 3%;margin-right: 2%;padding-top: 1%;padding-bottom: 10%;">
      <h2>Privacy Policy</h2><br><br>
      <h4><b>Introduction</b></h4>
        <p>Champions11 Entertainment Private Limited ("CRIKNOW") having its registered office at No. 23, Basava Nilaya, Lingaraj Nagar (South), Main Road, Hubli, Karnataka, IND – 580031. </p>
        <p>This Privacy Policy is a part of theTerms and Conditions and all terms defined in the Terms and Conditions have the same meaning used here in this Privacy Policy.</p>
        <p>This Privacy Policy statement shall apply to all users who visit and access CRIKNOW website and mobile application 
        (collectively referred to as "Website"). The users unconditionally agree that browsing the Website and/or using its services signifies their unconditional assent to this Privacy Policy.</p>
        <p>CRIKNOW/we respect the privacy of its users and is committed to protect it in all respects. Any dispute with CRIKNOW over privacy matters are subject to this Privacy Policy read in conjunction with the Terms and Conditions.</p>

        <br>
      <h4><b>Personal Information</b></h4>
        <p>This Privacy Policy is published in compliance of:</p>
        <ul>
          <li>Section 43A of the Information Technology Act, 2000; and</li>
          <li>Regulation 4 of the Information Technology (Reasonable Security Practices and Procedures and Sensitive Personal Information) Rules, 2011 (the "SPI Rules")</li>
        </ul>
        <p>"Personal Information" is defined under the SPI Rules to mean any information that relates to a natural person, which, either 
        directly or indirectly, in combination with other information available or likely to be available with a body corporate, is capable of 
        identifying such person.</p>
        <p>The SPI Rules further define "sensitive personal data or information" of a person to mean Personal Information about that person relating to:</p>
        <ul>
        <li>passwords;</li>
        <li>financial information such as bank accounts, credit and debit card details or other payment instrument details;</li>
        <li>physical, physiological and mental health condition;</li>
        <li>name, age, address, e-mail, phone number, date of birth, sexual orientation;</li>
        <li>medical records and history;</li>
        <li>biometric information;</li>
        <li>information received by body corporate under lawful contract or otherwise;</li>
        <li>visitor details as provided at the time of registration or thereafter; and</li>
        <li>call data records.</li>
        </ul>
        <p>All the aforementioned information is collectively referred to as "Personal Information."</p>
        <p>The information about the users as collected by CRIKNOW is: (a) information supplied by the users and (b) information automatically tracked while navigation (Information).</p>
        <p>By using CRIKNOW Website or its services, you consent to collection, storage, and use of the Personal Information you provide(including any changes thereto as provided by you) for any of the services that we offer.</p>
        <p>To avail certain sites/ services on our Websites, the users may be required to provide certain information for the registration process that may include but not limited to :- a) your name, b) email address, c) sex, d) age, e) PIN code, f) credit card or debit card details, g) medical records and history, h) sexual orientation, i) biometric information, j) password etc., and / or your occupation, interests, and the like.</p>
        <p>CRIKNOW presumes adequate and lawful parental consent in case the Personal Information is shared by a user under the age of 18 years.</p>
        <p>The information as supplied by the users enables us to improve our Website and provide you the most user-friendly experience.All required information is service dependent and CRIKNOW may use the above said user information to, maintain, protect, and improve its services (including advertising services) and for developing new services.</p>
        <p>Such information will not be considered as sensitive if it is freely available and accessible in the public domain or is furnished under the Right to Information Act, 2005, any rules made there under or any other law for the time being in force.</p>
        <p>The primary reason for gathering information is to improve our products, deals, services, website content and navigation.</p>

        <br>
    <h4><b>Cookies</b></h4> 
        <p>To improve the responsiveness for our users, we may use "cookies", or similar electronic tools to collect information to assign each user a unique, random number as a user Identification (user ID) to understand the user's individual interests using the identified computer. Unless you voluntarily identify yourself (through registration, for example), we will have no way of knowing who you are, even if we assign a cookie to your computer. The only Personal Information a cookie can contain is information you supply. A cookie cannot read data off your hard drive. Our advertisers may also assign their own cookies to your browser (if you click on their ads), a process that we do not control. We receive and store certain types of information whenever you interact with us via Website, application or service though your computer/laptop/net book or mobile/tablet/pad/handheld device etc.</p>
        <p>Once the User permits, we may obtain additional information such as list of apps installed on your device, device information,location, network carrier ("Information") available on your device, to personalize your experience and improve the app suggestions. Please be informed that the data collection is handled securely, including transmitting it using modern cryptography (secure HTTPS connection). Please note that the Information shall not be shared with any third party and shall be purely utilized for enhancing the user experience and personalizing the services within CRIKNOW networks.</p> 

        <br>
    <h4><b>Log file information</b></h4>
        <p>We automatically collect limited information about your computer's connection to the Internet, mobile number, including your IP address, when you visit our Website, application or service. Your IP address is a number that lets computers attached to the Internet know where to send you data -- such as the pages you view. We automatically receive and log information from your browser, including your IP address, your computer's name, your operating system, browser type and version, CPU speed and connection speed. We may also collect log information from your device, including your location, IP address, your device's name, device's serial number or unique identification number (e.g. UDiD on your iOS device), your device operating system,browser type and version, CPU speed, and connection speed etc.</p>

        <br> 
    <h4><b>Information from other sources</b></h4>
        <p>We may receive information about you from other sources, add it to our account information and treat it in accordance with this Privacy Policy. If you provide information to the platform provider or other partner, whom we provide services, your account information and order information may be passed on to us. We may obtain updated contact information from third parties in order to correct our records and fulfill the services or to communicate with you.</p>

        <br>
    <h4><b>Demographic and purchase information</b></h4>
        <p>We may reference other sources of demographic and other information in order to provide you with more targeted communications and promotions. We use Google Analytics, among others, to track the user behavior on our Website. Google Analytics specifically has been enabled to support display advertising towards helping us gain understanding of our users' Demographics and Interests. The reports are anonymous and cannot be associated with any individual personally identifiable information that you may have shared with us. If you don’t want Analytics to be used in your browser, you caninstall the Google Analytics browser add-on.</p> 

        <br>
    <h4><b>Links to third party sites/ad-servers</b></h4>
        <p>The Website or application may include links to other websites or applications. Such websites or applications are governed by their respective privacy policies, which are beyond our control. Once you leave our servers (you can tell where you are by checking the URL in the location bar on your browser), use of any information you provide is governed by the privacy policy of the operator of the application, you are visiting. That policy may differ from ours. If you can't find the privacy policy of any of these sites via a link from the application's homepage, you should contact the application or website owners directly for more information. When we present information to our advertisers -- to help them understand our audience and confirm the value of advertising on our Websites or applications -- it is usually in the form of aggregated statistics on traffic to various pages / content within our Websites or applications.</p>
        <p>We use third-party advertising companies to serve ads when you visit our Websites or applications. These companies may use information (not including your name, address, email address or telephone number or other personally identifiable information) about your visits to this and other Websites or application, in order to provide advertisements about goods and services of interest to you. We do not provide any Personally Information to third party websites/ advertisers/ ad-servers without your consent, except in the circumstance mentioned in below clause</p>

        <br>
    <h4><b>Information Sharing</b></h4>
        <p>CRIKNOW may share the sensitive Personal Information to any third party/Service Provider/Alliance Partner without obtaining the prior consent of the user in the following limited circumstances:</p>
        <ul>
          <li>When it is requested or required by law or by any court or governmental agency or authority to disclose, for the purpose of verification of identity, or for the prevention, detection, investigation including cyber incidents, or for prosecution and punishment of offences. These disclosures are made in good faith and belief that such disclosure is reasonably necessary for enforcing these Terms and Conditions; for complying with the applicable laws and regulations.</li>
          <li>CRIKNOW proposes to share such information within its group companies and officers and employees of such group companies for the purpose of processing Personal Information on its behalf. We also ensure that these recipients of such information agree to process such information based on our instructions and in compliance with this Privacy Policy and any other appropriate confidentiality and security measures.</li>
          <li>CRIKNOW may use third-party advertising companies to serve ads when the user visits the Website.These companies may use Personal Information about the user’s visit to the Website and other websites in orderto provide advertisements about goods and services of interest to the user.</li>
          <li>CRIKNOW shall transfer information about the user in case CRIKNOW is acquired by or merged withanother company.</li>
        </ul>

        <br>
    <h4><b>Accessing and Updating Personal Information</b></h4>
        <p>When you use CRIKNOW Websites, we make good faith efforts to provide you, as and when requested by you, with access to your Personal Information and shall further ensure that any Personal Information or sensitive personal data or information foundto be inaccurate or deficient shall be corrected or amended as feasible, subject to any requirement for such Personal Information or sensitive personal data or information to be retained by law or for legitimate business purposes. We ask individual users to identify themselves and the information requested to be accessed, corrected or removed before processing such requests, and we may decline to process requests that are unreasonably repetitive or systematic, require disproportionate technical effort, jeopardize the privacy of others, or would be extremely impractical (for instance, requests concerning information residing on backup tapes), or for which access is not otherwise required. In any case where we provide information access and correction, we perform this service free of charge, except if doing so would require a disproportionate effort. Because of the way we maintain certain services, after you delete your information, residual copies may take a period of time before they are deleted from our active servers and may remain in our backup systems.</p>

        <br>
    <h4><b>Information Security</b></h4>
        <p>We take appropriate security measures to protect against unauthorized access to or unauthorized alteration, disclosure or destruction of data. These include internal reviews of our data collection, storage and processing practices and security measures, including appropriate encryption and physical security measures to guard against unauthorized access to systems where we store personal data.
        <p>All information gathered on CRIKNOW is securely stored within the CRIKNOW controlled database. The database is stored on servers secured behind a firewall; access to the servers is password-protected and is strictly limited. However, as effective as our security measures are, no security system is impenetrable. We cannot guarantee the security of our database, nor can we guarantee that information you supply will not be intercepted while being transmitted to us over the internet. And, of course, any information you include in a posting to the discussion areas is available to anyone with internet access.</p>
        <p>However the internet is an ever evolving medium. We may change our Privacy Policy from time to time to incorporate necessaryfuture changes. Of course, our use of any information we gather will always be consistent with the policy under which the information was collected, regardless of what the new policy may be.</p>

        <br>
    <h4><b>Grievance Redressal</b></h4>
        <p>Redressal Mechanism: Any complaints, abuse or concerns with regards to content and or comment or breach of these terms shall be immediately informed to the designated Grievance Officer as mentioned below via in writing or through email signed with the electronic signature to</p>

      <p><b>Champions11 Entertainment Private Limited</b></p>
      <p><b>www.criknow.com</b></p>
      <p>No. 23, Basava Nilaya</p>
      <p>Lingaraj Nagar (South),</p>
      <p>Main Road, Hubli </p>
      <p>Karnataka, India – 580031 </p>
      <p>Email:<sapn><b>grievance@criknow.com</b></sapn></p>
      <p>We request you to please provide the following information in your complaint:</p>
      <ul>
        <li>A physical or electronic signature of a person authorized to act on behalf of the copyright owner for the purposes of the complaint.</li>
        <li>Identification of the copyrighted work claimed to have been infringed.</li>
        <li>Identification of the material on our website that is claimed to be infringing or to be the subject of infringing activity.</li>
        <li>The address, telephone number or e-mail address of the complaining party.</li>
        <li>A statement that the complaining party has a good-faith belief that use of the material in the manner complained of is not authorized by the copyright owner, its agent or the law.</li>
        <li>A statement, under penalty of perjury, that the information in the notice of copyright infringement is accurate, and that the complaining party is authorized to act on behalf of the owner of the right that is allegedly infringed.</li>
      </ul>
    </div>

    </div>
</div>
<div class="col-lg-2 col-sm-2 col-md-2 col-xs-12"></div>
</div>
    
    
  

                      <footer class="footer">
                        <div class="row">
                          <div class="col-sm-3">
                            <a href="./home.php"><img src="images/logo_criknow.png" class="footer-logo"></img></a>
                          </div>
                          <div class="col-sm-3">
                           <span class="text">MOBILE APPS</span><br>
                            
                            <a href="https://itunes.apple.com/in/app/criknow/id1454029087?mt=8"  style="margin-left: -17%;"><i class="fa fa-android icon1"></i>
                              <span class="list">Android</span></a><br>
                            <a href="https://play.google.com/store/apps/details?id=firebase.example.com.cricknow"  style="margin-left: -28%;"><i class="fa fa-apple icon1"></i>
                              <span class="list">iOS</span></a>
                          </div>
                          <div class="col-sm-3">
                            <span class="text" style="margin-right: 25%;">FOLLOW US ON</span><br>
                            <a href="#"  style="margin-left: -45%;"><i class="fa fa-facebook icon2"></i>
                              <span class="list">facebook</span></a><br>
                            <a href="#"  style="margin-left: -51%;"><i class="fa fa-twitter icon2"></i>
                              <span class="list">twitter</span></a><br>
                            <a href="#"  style="margin-left: -46%;"><i class="fa fa-youtube-play icon2"></i>
                              <span class="list">youtube</span></a><br>
                            <a href="#"  style="margin-left: -45%;"><i class="fa fa-pinterest icon2"></i>
                              <span class="list">Pinterest</span></a>
                          </div>
                          <div class="col-sm-3">
                            <span class="text" style="margin-right: 72%;">COMPANY</span><br>
                            <!-- <a href="#"  style="margin-left: -82%;"><span class="list">Careers</span></a><br>
                            <a href="#" style="margin-left: -77%;line-height: 3;"><span class="list">Advertise</span></a><br> -->
                            <a href="./privacy_policy.php" style="margin-left: -69%;line-height: 2;"><span class="list">Privacy Policy</span></a><br>
                            <a href="./terms_of_use.php" style="margin-left: -70%;line-height: 2.5;"><span class="list">Terms of Use</span></a>
                            
                          </div>
                        </div>
                        <p style="font-size: 11px;color: lightgray;padding-top: 2%;">&copy; 2019 Criknow.com</p>
                      </footer>
<!-- this script for news dropdown -->
  <script>
function myFunction() {
  location.replace("./news.php")
}
</script>

<!-- this script for videos dropdown -->
  <script>
function myFunction1() {
  location.replace("./videos.php")
}
</script>

<script>
function myFunction2() {
  location.replace("./teams.php")
}
</script>



<script type="text/javascript">
  $(document).ready(function() {
  $('#media').carousel({
    pause: true,
    interval: false,
  });
});
</script>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "navbar") {
    x.className += " responsive";
  } else {
    x.className = "navbar";
  }
}
</script>

</body>
</html>