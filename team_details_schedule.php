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
  <link rel="stylesheet" type="text/css" href="css/nav.css">
  <link rel="stylesheet" type="text/css" href="css/team_details_schedule.css">
  </head>

<body>
  
          <!-- navigation bars -->
          <nav class="navbar">
            <a href="./home.php"><img src="images/logo_criknow.png" class="logo"></img></a>
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
              <div class="row" style="width: 400px;">
                <div class="column">
                  <h4 class="teams">TEST TEAMS</h4>
                    <a href="#">India</a>
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
                    <a href="#" style="width: 160px;">United Arab Emirates</a>
                    <a href="#">Hong Kong</a>
                    <a href="#">Kenya</a>
                    <a href="#" style="width: 181px;">United States of America</a>
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

            <input type="text" name="search" placeholder="Search" style="margin-left: 15%;">
            <i class="fa fa-search search-icon"></i>

          </nav><!-- navbar -->

            
        

  <div class="row">
        <!-- this card is for latest news -->
          <div class="col-sm-12">
            <div class="sub-card">
              <div class="card-body">
              	<h1 class="heading">India National Cricket Team </h1>

              	<div style="border-bottom: 1px solid #e3e6e3;padding: 0px 0px 7px 0px;">
            	<nav class="lower">
            		<div id="myDIV">
                    <a href="./team_details.php" class="main active">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="./team_details_schedule.php" class="main">Schedule</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="./team_details_results.php" class="main">Results</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="./team_details_news.php" class="main">News</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#" class="main">Videos</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="./team_details_photos.php" class="main">Photos</a>
                  </div>
                   </nav>
                </div>

                


              	</div><!--card-body --> 
          </div><!-- card4 -->
            
          </div><!-- col-sm-4 -->
        </div><!-- row -->

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



<!-- <script>
	var header = document.getElementById("myDIV");
var mains = header.getElementsByClassName("main");
for (var i = 0; i < mains.length; i++) {
  mains[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}
</script> -->

</body>
</html>