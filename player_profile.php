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
  <link rel="stylesheet" type="text/css" href="css/style_player_profile.css">
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

            

  <div class="row">
        <!-- this card is for latest news -->
          <div class="col-sm-12">
            <div class="sub-card">
              <div class="card-body">
              	<div class="row">
              		<div class="col-sm-2">
              			<img id="player-image" class="img-responsive" src="images/player-image.jpg">
              		</div>
              		<div class="col-sm-10">
              			<h1 class="player-name">Virat Kohli</h1>
                    <h3 class="player-country">India</h3>
              		</div>
              	</div>

                <div class="row">
                  <div class="col-sm-3">
                <div class="personal-info">
                  <table  width="100%">
                                <caption class="caption">Personal Information</caption>
                                <tbody>
                        <tr>
                          <th class="personal-table">Full Name</th>
                            <td class="personal-table"> Rahmat Shah Zurmatai </td>
                        </tr>

                        <tr>
                          <th class="personal-table">Nationality</th>
                            <td class="personal-table"> Afghanistan </td>
                        </tr>

                        <tr>
                          <th class="personal-table">Other name</th>
                            <td class="personal-table">Rahmat Shah</td>
                        </tr>

                        <tr>
                          <th class="personal-table">Role</th>
                            <td class="personal-table">  Batsman  </td>
                        </tr>

                        <tr>
                          <th class="personal-table">Born</th>
                            <td class="personal-table">06th July, 1993</td>
                        </tr>

                        <tr>
                          <th class="personal-table">Age</th>
                            <td class="personal-table">25 years, 8 months, 23 days</td>
                        </tr>

                        <tr>
                          <th class="personal-table">Batting Style</th>
                            <td class="personal-table">Right-hand bat</td>
                        </tr>

                        <tr>
                          <th class="personal-table">Bowling Style</th>
                            <td class="personal-table">Legbreak googly</td>
                        </tr>
                      </tbody>
                      </table>

                      
                </div>
              </div>

                <div class="col-sm-9">
                  

                  <table width="100%" >
                                <caption class="caption1">Batting Career Summary</caption>
                                <tbody>
                                <tr class="summary-table">
                                    <th>Format</th>
                                    <th>MAT</th>
                                    <th>INNS</th>
                                    <th>NO</th>
                                    <th>RUNS</th>
                                    <th>HS</th>
                                    <th>AVG</th>
                                    <th>BF</th>
                                    <th>SR</th>
                                    <th>100s</th>
                                    <th>50s</th>
                                  
                                </tr>
                                <tr>
                                    <th class="summary-table1">Test</th>
                                    <td>77</td>
                                    <td>131</td>
                                    <td>8</td>
                                    <td>6613</td>
                                    <td>243</td>
                                    <td>53.76</td>
                                    <td>11549</td>
                                    <td>57.26</td>
                                    <td>25</td>
                                    <td>6</td>
                                   
                                </tr>
                                <tr>
                                    <th class="summary-table1">ODI</th>
                                </tr>
                                <tr>
                                    <th class="summary-table1">T20</th>
                                </tr>
                                <tr>
                                    <th class="summary-table1">List A</th>
                                </tr>
                                <tr>
                                    <th class="summary-table1">1st Class</th>
                                </tr>
                              </tbody>
                            </table>

                            <table width="100%" >
                                <caption class="caption1">Bowling Career Summary</caption>
                                <tbody>
                                <tr class="summary-table">
                                    <th>Format</th>
                                    <th>MAT</th>
                                    <th>INNS</th>
                                    <th>OVR</th>
                                    <th>Runs</th>
                                    <th>WK</th>
                                    <th>BBI</th>
                                    <th>AVG</th>
                                    <th>ECN</th>
                                   
                                    <th>SR</th>
                                    <th>4W</th>
                                    <th>5W</th>
                                </tr>
                                <tr>
                                    <th class="summary-table1">Test</th>
                                    <td>77</td>
                                    <td>9</td>
                                    <td>163</td>
                                    <td>76</td>
                                    <td>0</td>
                                    <td>0/0</td>
                                    <td>0/0</td>
                                    <td>2.8</td>
                                    <td>0.0</td>
                                   
                                </tr>
                                <tr>
                                    <th class="summary-table1">ODI</th>
                                </tr>
                                <tr>
                                    <th class="summary-table1">T20I</th>
                                </tr>
                                <tr>
                                    <th class="summary-table1">List A</th>
                                </tr>
                                <tr>
                                    <th class="summary-table1">1st Class</th>
                                </tr>
                              </tbody>
                            </table>

                            
                </div>
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