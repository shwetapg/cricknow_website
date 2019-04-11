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
      <h3 style="text-align:center;">TERMS OF USE</h3>
        <br>

        <p>By accessing CRIKNOW.com, you have read, understood and agree to be legally bound by the terms of the following disclaimer and user agreement:</p>
        <p>This Site is owned and operated by Champions11 Entertainment Private Limited ("the Company/CRIKNOW") and contains material which is derived in whole or in part from material supplied by the Company, various new agencies and other sources, and is protected by international copyright and trademark laws. The restrictions on use of the material and content on this CRIKNOW Site by the user are specified below. Except where specifically authorized, the user may not modify, copy, reproduce, republish, upload, post, transmit or distribute in any way any material from this site including code and software</p>
        <p>CRIKNOW has taken due care and caution in compilation of data for its web site. However, CRIKNOW does not guarantee the accuracy, adequacy or completeness of any information and is not responsible for any errors or omissions or for the results obtained from the use of such information. CRIKNOW especially states that it has no financial liability whatsoever to any user on account of the use of information provided onits website. </p>
        <p>The Company shall have the right at any time to change or modify the terms and conditions applicable for user of the CRIKNOW Site, or any part thereof, or to impose new conditions, including but not limited to, adding fees and charges for use. Such changes, modifications, additionsor deletions shall be effective immediately upon notice thereof, which may be given by means including but not limited to, posting on the CRIKNOW Site, or by electronic or conventional mail, or by any other means by which user obtains notice thereof. Any use of the CRIKNOW Site by user after such notice shall be deemed to constitute acceptance by user of such changes, modifications or additions.</p><br>

    <h4><b>Terms of Use:</b></h4>
        <p>By visiting our site you are agreeing to be bound by the following terms and conditions. We may change these terms and conditions at any time. Your continued use of CRIKNOW.com means that you accept any new or modified terms and conditions that we come up with. Please re-visit the `Terms of Use' link at our site from time to time to stay abreast of anychanges that we may introduce.</p>
        <p>The term `CRIKNOW.com ' is used through this entire Terms of Use document to refer to the website, its owners and the employees and associates of the owner.</p><br>
    
    <h4><b>1) REGISTRATION</b></h4>
        <p>By registering, you certify that all information you provide, now or in the future, is accurate. CRIKNOW.com reserves the right, in its sole discretion, to deny you access to this website or any portion thereof without notice for the following reasons (a) immediately by CRIKNOW.com for any unauthorized access or use by you (b) immediately by CRIKNOW.com if you assign or transfer (or attempt the same) any rights granted to you under this Agreement; (c) immediately, ifyou violate any of the other terms and conditions of this User Agreement</p><br>

    <h4><b>2) LICENSE:</b></h4>
        <p>CRIKNOW.com hereby grants you a limited, non-exclusive, non-assignable and non-transferable license to access CRIKNOW.com provided and expressly conditioned upon your agreement that all such access and use shall be governed by all of the terms and conditions set forth in this USER AGREEMENT.</p><br>

    <h4><b>3) COPYRIGHT & NO RETRANSMISSION OF INFORMATION:</b></h4>
        <p>CRIKNOW.com as well as the design and information contained in this site is the valuable, exclusive property of CRIKNOW.com, and nothing inthis Agreement shall be construed as transferring or assigning any such ownership rights to you or any other person or entity.You may not resell, redistribute, broadcast or transfer information, software and applications or use the information, software and applications provided by CRIKNOW.com in a searchable, machine-readable database unless separately and specifically authorized in writing by CRIKNOW.com prior to such use. You may not rent, lease, sublicense, distribute, transfer, copy, reproduce, publicly display, publish,adapt, store or time-share CRIKNOW, any part thereof, or any of the software, application or information received or accessed there from to or through any other person or entity unless separately and specifically authorized in writing by CRIKNOW.com prior to such use. In addition, you may not remove, alter or obscure any copyright, legal or proprietary notices in or on any portions of CRIKNOW.com without prior written authorization. Except as set forth herein, any other use of the information, software or application contained in this site requires the prior written consent of Company and may require a separate fee.</p><br>

    <h4><b>4) DELAYS IN SERVICES:</b></h4>
        <p>Neither CRIKNOW.com (including its and their directors, employees, affiliates, agents, representatives or subcontractors) shall be liable for any loss or liability resulting, directly or indirectly, from delays or interruptions due to electronic or mechanical equipment failures, telephone interconnect problems, defects, weather, strikes, walkouts, fire, acts of God, riots, armed conflicts, acts of war, or other like causes. CRIKNOW.com shall have no responsibility to provide you access to CRIKNOW.com while interruption of CRIKNOW.com is due to any such cause shall continue.</p><br>

    <h4><b>5) LIABILITY DISCLAIMER:</b></h4>
        <p>YOU EXPRESSLY AGREE THAT USE OF THE WEBSITE IS AT YOUR SOLE RISK.THE CONTENTS, INFORMATION, SOFTWARE, PRODUCTS, FEATURES AND SERVICES PUBLISHED ON THIS WEB SITE MAY INCLUDE INACCURACIES OR TYPOGRAPHICAL ERRORS. CHANGES ARE PERIODICALLY ADDED TO THE CONTENTS HEREIN. CRIKNOW.COM AND/OR ITS RESPECTIVE SUPPLIERS MAY MAKE IMPROVEMENTS AND/OR CHANGES IN THIS WEB SITE AT ANY TIME. THIS WEB SITE MAY BE TEMPORARILY UNAVAILABLEFROM TIME TO TIME DUE TO REQUIRED MAINTENANCE, TELECOMMUNICATIONS INTERRUPTIONS, OR OTHER DISRUPTIONS. CRIKNOW.COM (AND ITS OWNERS, SUPPLIERS, CONSULTANTS, ADVERTISERS, AFFILIATES, PARTNERS, EMPLOYEES OR ANY OTHER ASSOCIATED ENTITIES, ALL COLLECTIVELY REFERRED TO AS ASSOCIATED ENTITIES HEREAFTER) SHALL NOT BE LIABLE TO USER OR MEMBER OR ANY THIRD PARTY SHOULD CRIKNOW.COM EXERCISE ITS RIGHT TO MODIFY OR DISCONTINUE ANY OR ALL OF THE CONTENTS, INFORMATION, SOFTWARE, PRODUCTS, FEATURES AND SERVICES PUBLISHED ON THIS WEBSITE.IN NO EVENT SHALL CRIKNOW.COM AND/OR ITS ASSOCIATED ENTITIES BE LIABLE FOR ANY DIRECT, INDIRECT, PUNITIVE, INCIDENTAL, SPECIAL OR CONSEQUENTIAL DAMAGES ARISING OUT OF OR IN ANY WAY CONNECTED WITH THE USE OF THIS WEB SITE OR WITH THE DELAY OR INABILITY TO USE THIS WEBSITE, OR FOR ANY CONTENTS, INFORMATION, SOFTWARE, PRODUCTS, FEATURES AND SERVICES OBTAINED THROUGH THIS WEB SITE, OR OTHERWISE ARISING OUT OF THE USE OF THIS WEB SITE, WHETHER BASED ON CONTRACT, TORT, STRICT LIABILITY OR OTHERWISE, EVEN IF CRIKNOW.COM OR ANY OF ITS ASSOCIATED ENTITIES HAS BEEN ADVISED OF THE POSSIBILITY OF DAMAGES.</p><br>

    <h4><b>6) USE OF MESSAGE BOARDS, CHAT ROOMS AND OTHER COMMUNICATION FORUMS:</b></h4>
        <p>If this Web site may contain message/bulletin boards, chat rooms, or other message or communication facilities (collectively, "Forums"), you agree to use the Forums only to send and receive messages and material that are proper and related to the particular Forum. By way of example, and not as a limitation, you agree that when using a Forum, you shall not do any of the following</p>
        <ul>
          <li> Defame, abuse, harass, stalk, threaten or otherwise violate the legal rights (such as rights of privacy and publicity) of others.</li>
          <li> Publish, post, distribute or disseminate any defamatory, infringing, obscene, indecent or unlawful material or information.</li>
          <li> Upload files that contain software or other material protected by intellectual property laws (or by rights of privacy of publicity) unless you own or control the rights thereto or have received all necessary consents.</li>
          <li> Upload files that contain viruses, corrupted files, or any other similar software or programs that may damage the operation of another’s computer.</li>
          <li> Conduct or forward surveys, contests, or chain letters.</li>
          <li>Download any file posted by another user of a Forum that you know, orreasonably should know, cannot be legally distributed in such manner.All Forums are public and not private communications. Chats, postings, conferences, and other communications by other users are not endorsedby CRIKNOW.com, and such communications shall not be considered reviewed, screened, or approved by CRIKNOW.com. CRIKNOW.com reserves the right for any reason to remove without notice any contents of the Forums received from users, including without limitation message board postings.</li>
        </ul><br>

    <h4><b>7) EQUIPMENT AND OPERATION</b></h4>
        <p>You shall provide and maintain all telephone/internet and other equipment necessary to access CRIKNOW.com, and the costs of any such equipment and/or telephone/internet connections or use, including any applicable taxes, shall be borne solely by you. You are responsible for operating your own equipment used to access CRIKNOW.com.</p><br>

    <h4><b>8) LINKS TO THIRD PARTY SITES</b></h4>
        <p>The links in this site will allow you to leave CRIKNOW.com. The linked sites are not under the control of CRIKNOW.com. CRIKNOW.com has not reviewed, nor approved these sites and is not responsible for the contents or omissions of any linked site or any links contained in a linkedsite. The inclusion of any linked site does not imply endorsement by CRIKNOW.com of the site. Third party links to CRIKNOW.com shall be governed by a separate agreement.</p><br>

    <h4><b>9) INDEMNIFICATION:</b></h4>
        <p>YOU SHALL INDEMNIFY, DEFEND AND HOLD HARMLESS CRIKNOW.COM (INCLUDING ITS AND THEIR OFFICERS, DIRECTORS, EMPLOYEES, AFFILIATES, GROUP COMPANIES, AGENTS, REPRESENTATIVES OR SUBCONTRACTORS) FROM ANY AND ALL CLAIMS AND LOSSES IMPOSED ON, INCURRED BY OR ASSERTED AS A RESULT OF OR RELATED TO: (a) your access and use of CRIKNOW.COM (b) any non-compliance by user with the terms and conditions hereof; or (c) any third party actions related to users receipt and use of the information, whether authorized or unauthorized. Any clause declared invalid shall be deemed severable and not affect the validity or enforceability of the remainder. These terms may only be amended in a writing signed by CRIKNOW.com.</p><br>

    <h4><b>10) CONFLICTING TERMS:</b></h4>
        <p>If there is any conflict between this User Agreement and other documents, this User Agreement shall govern, whether such order or other documents is prior to or subsequent to this User Agreement, or is signed or acknowledged by any director, officer, employee, representative or agent of the Company. </p><br>

    <h4><b>11) CONFIDENTIALITY/NON-COMPETITION CLAUSE:</b></h4>
        <p>You agree to keep the information received from the CRIKNOW.com andservices CONFIDENTIAL and will NOT Disclose the knowledge gained to other any person or firm for any reason. You hereby consent to the Jurisdiction of the Courts of Hubli, Karnataka, India with respect to violation of any part of this Agreement.</p><br>

    <h4><b>12) TERMINATION:</b></h4>
        <p>This User Agreement and the license rights granted hereunder shall remain in full force and effect unless terminated or canceled for any of the following reasons: (a) immediately by CRIKNOW.com for any unauthorized access or use by you (b) immediately by CRIKNOW.com if you assign or transfer (or attempt the same) any rights granted to you under this Agreement; (c) immediately, if you violate any of the other terms and conditions of this User Agreement. Termination or cancellationof this Agreement shall not affect any right or relief to which CRIKNOW.com may be entitled, at law or in equity. Upon termination of this User Agreement, all rights granted to you will terminate and revert toCRIKNOW.com. Except as set forth herein, regardless of the reason for cancellation or termination of this User Agreement, the fee charged if any for access to CRIKNOW.com is non-refundable for any reason.</p><br>

    <h4><b>13) JURISDICTION:</b></h4>
        <p>The terms of this agreement are exclusively based on and subject to Indian law. You hereby consent to the exclusive jurisdiction and venue ofcourts in Hubli, Karnataka, India in all disputes arising out of or relating to the use of this website. Use of this website is unauthorized in any jurisdiction that does not give effect to all provisions of these terms and conditions, including without limitation this paragraph.</p><br>    
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