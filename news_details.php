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
<link rel="stylesheet" type="text/css" href="css/news_details.css">
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

            
        
  

<!-- this is for news details api -->
<?php
    session_start();
        $url3 = 'https://criknowapp.herokuapp.com/get_news_detail/';
        $options3 = array(
          'http' => array(
          'header'  => array(
                      'PK:'.$_GET['pic'],
                      ),
            'method'  => 'GET',
          ),
        );
        $context3 = stream_context_create($options3);
    //var_dump($context3);
        $output3 = file_get_contents($url3, false,$context3);
       // var_dump($output3);
        $arr3 = json_decode($output3,true);
    //var_dump($arr3);
    //echo $arr3['news'][0]['news_image_url']['url'];
    //echo $arr3['news'][$x]['news_details'][0]['headline'];
    //var_dump($arr3['news']['news_image_url']);
    //var_dump($_GET['pic']);exit;
    ?>

    <?php
session_start();
    $url2 = 'https://criknowapp.herokuapp.com/get_news_list/';
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



    


      <div class="row">
        <div class="col-sm-12">
          <div class="sub-card">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-9">
              <div style="border-right: 1px solid #e3e6e3;margin-right: 13%;">
              <div class="topic">
                <span><?php echo $arr3['news']['news_details']['topic']; ?></span>
              </div><!-- topic -->

              <?php //var_dump($_GET['pic']);//for($x=0;$x<count($arr3['news']);$x++){ ?>
              <?php if ($arr3['news'][$x]['news_details'][0]['headline'] == $_GET['pk'])?>

                <h1 class="heading"><?php echo $_GET['pk'];?></h1>

                <span class="author"><?php echo $arr3['news']['news_details']['author']; ?></span>

                <span class="dot">.</span>

                <time style="color: #666;font-size: 13px;"><?php echo $arr3['news']['news_details']
                ['created']; ?></time><br>

                <a href="#" class="btn share" role="button"> <i class="fa fa-facebook icon"></i>&nbsp;&nbsp;Share</a>

                <a href="#" class="btn tweet" role="button"> <i class="fa fa-twitter icon"></i>&nbsp;&nbsp;Tweet</a><br> 

              <!-- this if for image -->
              <?php if($arr3['news']['news_image_url'] == ""){ ?>
                <img class="image" src="images/profile.png"></img>
              <?php }else{ ?> 
                <img class="image" src="<?php echo $arr3['news']['news_image_url']; ?>"></img>
              <?php } ?><!-- closing of image if else statement -->

                <p class="para"><?php echo nl2br($arr3['news']['news_details']['body']); ?>
                  </p>
                






      
              <?php //} ?><!-- closing of if statement -->
            </div>
            </div>


            <div class="col-sm-3">  
              <h4 class="latest">LATEST NEWS</h4>

              <?php for($xre=7;$xre>=0;$xre--){  
                if(count($arr2['news'][$xre]) > 0){ ?>
                 <div class="row" style="border-bottom: 1px solid #e3e6e3;padding: 0px 0px 10px 0px;margin-top: 30px;">
                  <div class="col-sm-3">

                <?php if($arr2['news'][$xre]['news_details'][0]['url'] == ""){ ?>
                  <a href="./news_details.php?pk=<?php echo $arr2['news'][$xre]['news_details'][0]
                  ['headline'];?>&pic=<?php echo $arr2['news'][$xre]['news_details'][0]
                  ['pk'];?> " title="<?php echo $arr2['news'][$xre]['news_details'][0]['headline']; ?>"><img class="image1" src="images/profile.png"></img></a>
                   <?php }else{ ?> 
                  <a href="./news_details.php?pk=<?php echo $arr2['news'][$xre]['news_details'][0]
                  ['headline'];?>&pic=<?php echo $arr2['news'][$xre]['news_details'][0]
                  ['pk'];?> " title="<?php echo $arr2['news'][$xre]['news_details'][0]['headline']; ?>">
                  <img class="image1" src="<?php echo $arr2['news'][$xre]['news_details'][0]
                  ['url']; ?>"></img></a>
                <?php } ?>
              </div>

                <div class="col-sm-9">

                  <h2 class="heading2">
                    <a href="./news_details.php?pk=<?php echo $arr2['news'][$xre]['news_details'][0]
                    ['headline'];?>&pic=<?php echo $arr2['news'][$xre]['news_details'][0]
                  ['pk'];?> " title="<?php echo $arr2['news'][$xre]['news_details'][0]['headline']; ?>"><?php echo $arr2['news'][$xre]['news_details'][0]['headline']; ?></a>
                    </h2>

                    <time class="time"><?php echo $arr2['news'][$xre]['news_details'][0]
                    ['created']; ?></time>

                    </div>
              </div>
              <?php }} ?>
              <a href="./news.php" title="Click to view more News"><button class="button">More News</button></a><br><br>
            </div>
          </div>




            </div><!-- card body -->
          </div><!-- sub card -->
        </div><!-- col-sm-12 -->
      </div><!-- row -->
    
            
                      <<footer class="footer">
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
</body>
</html>