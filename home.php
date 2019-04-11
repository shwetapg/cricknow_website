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
<style type="text/css">
.bgimg {
    background-image: url('splash_bg.png');
    background-size: cover;
}
</style>

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

 <div class="carousel slide media-carousel" id="media">
        <div class="carousel-inner">
          <div class="item  active">
            <div class="row" id="main">
              <?php for($i=0;$i<=2;$i++) { 
    if(count($arr4) > 0){ 
      if(count($arr4['response']['items'][$i]) > 0){ ?>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-3">
                <div class="live-card">
        <div class="card-body">
          <!-- this is title -->
          <div><h1 class="head1"><?php echo $arr4['response']['items'][$i]['title']; ?></h1></div>

          <!--this is for right side heading -->
          <div style="margin-top: -36px;"><h4 class="head4"><?php echo $arr4['response']['items'][$i]['format_str']; ?></h4></div>

          <!--this is name and location -->
          <div style="margin-top: 6px;"><h2 class="head2"><?php echo $arr4['response']['items'][$i]['venue']['name']; ?>,
            <?php echo $arr4['response']['items'][$i]['venue']['location']; ?></h2></div>

          <!-- this is right side live -->
          <div class="live" style="margin-top: -27px;">
            <a href="#"><?php echo $arr4['response']['items'][$i]['status_str']; ?></a>
          </div><!-- live -->

          <?php if($arr4['response']['items'][$i]['teama']['scores_full'] !=''){ ?>
                  <div style="margin-top: 10px;" class="score1"  ><span><?php echo substr($arr4['response']['items'][$i]['teama']['scores_full'],strpos($arr4['response']['items'][$i]['teama']['scores_full'],"&")+1);?></span></div>
                  <?php }else{ ?>
         
         <div style="margin-top: 10px;margin-left: 55px;" class="score1"><span>--</span></div>
         
        <?php }?>

                  
                 <div style="margin-top: -28px;" ><span class="versus">V/S</span></div>

                 <?php if($arr4['response']['items'][$i]['teamb']['scores_full'] !=''){ ?>
                 <div style="margin-top: -42px;" class="score2"><span><?php echo substr($arr4['response']['items'][$i]['teamb']['scores_full'],strpos($arr4['response']['items'][$i]['teamb']['scores_full'],"&")+1);?></span></div>
                 <?php }else{ ?>
         
         <div style="margin-top: -42px;margin-left: 70%;" class="score2"><span>--</span></div>
         
        <?php }?>

                 <div style="margin-inline-start: 30px;margin-inline-end: 70%;">
                   <?php if($arr4['response']['items'][$i]['teama']['logo_url'] !=''){ ?>
                 <img src="<?php echo $arr4['response']['items'][$i]['teama']['logo_url'];?>" class="team-logo1"></img>
                 <?php }else{ ?>
                   <img src="images/profile.png" class="team-logo1"></img>
                    <?php }?>

                 <div class="teama"><span><?php echo $arr4['response']['items'][$i]['teama']['short_name'];?></span></div>
               </div>

                 <div style="margin-inline-start: 62%;margin-inline-end: 80%;">
                   <?php if($arr4['response']['items'][$i]['teamb']['logo_url'] !=''){ ?>
                 <img src="<?php echo $arr4['response']['items'][$i]['teamb']['logo_url'];?>" class="team-logo2"></img>
                 <?php }else{ ?>
                   <img src="images/profile.png" class="team-logo2"></img>
                    <?php }?>

                 <div class="teamb"><span><?php echo $arr4['response']['items'][$i]['teamb']['short_name'];?></span></div>
               </div>

                 <div style="margin-top: 10px;"><p class="short-para"><?php echo $arr4['response']['items'][$i]
                    ['status_note']; ?></p></div>

                 <div class="details" style="margin-top: -35px;">
                 <a href="#">DETAILS</a>
               </div>


             
               </div>
             </div>
           </div>

       <?php } ?>
       <?php }} ?>
       </div>
     </div>
             

             <?php if(count($arr4) > 3){ ?>
          <div class="item">
            <div class="row">
             
              <?php for($i=3;$i<count($arr4);$i++) {  
    if(count($arr4) > 0){ 
      if(count($arr4['response']['items'][$i]) > 0){ ?>
      
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-3">
                <div class="live-card">
        <div class="card-body">
          <!-- this is title -->
          <div><h1 class="head1"><?php echo $arr4['response']['items'][$i]['title']; ?></h1></div>

          <!--this is for right side heading -->
          <div style="margin-top: -36px;"><h4 class="head4"><?php echo $arr4['response']['items'][$i]['format_str']; ?></h4></div>

          <!--this is name and location -->
          <div style="margin-top: 6px;"><h2 class="head2"><?php echo $arr4['response']['items'][$i]['venue']['name']; ?>,
            <?php echo $arr4['response']['items'][$i]['venue']['location']; ?></h2></div>

          <!-- this is right side live -->
          <div class="live" style="margin-top: -27px;">
            <a href="#"><?php echo $arr4['response']['items'][$i]['status_str']; ?></a>
          </div><!-- live -->

          <?php if($arr4['response']['items'][$i]['teama']['scores_full'] !=''){ ?>
                  <div style="margin-top: 10px;" class="score1"  ><span><?php echo substr($arr4['response']['items'][$i]['teama']['scores_full'],strpos($arr4['response']['items'][$i]['teama']['scores_full'],"&")+1);?></span></div>
                  <?php }else{ ?>
         
         <div style="margin-top: 10px;margin-left: 55px;" class="score1"><span>--</span></div>
         
        <?php }?>

                  
                 <div style="margin-top: -28px;" ><span class="versus">V/S</span></div>

                 <?php if($arr4['response']['items'][$i]['teamb']['scores_full'] !=''){ ?>
                 <div style="margin-top: -42px;" class="score2"><span><?php echo substr($arr4['response']['items'][$i]['teamb']['scores_full'],strpos($arr4['response']['items'][$i]['teamb']['scores_full'],"&")+1);?></span></div>
                 <?php }else{ ?>
         
         <div style="margin-top: -42px;margin-left: 70%;" class="score2"><span>--</span></div>
         
        <?php }?>

                 <div style="margin-inline-start: 30px;margin-inline-end: 70%;">
                   <?php if($arr4['response']['items'][$i]['teama']['logo_url'] !=''){ ?>
                 <img src="<?php echo $arr4['response']['items'][$i]['teama']['logo_url'];?>" class="team-logo1"></img>
                 <?php }else{ ?>
                   <img src="images/profile.png" class="team-logo1"></img>
                    <?php }?>

                 <div class="teama"><span><?php echo $arr4['response']['items'][$i]['teama']['short_name'];?></span></div>
               </div>

                 <div style="margin-inline-start: 62%;margin-inline-end: 80%;">
                   <?php if($arr4['response']['items'][$i]['teamb']['logo_url'] !=''){ ?>
                 <img src="<?php echo $arr4['response']['items'][$i]['teamb']['logo_url'];?>" class="team-logo2"></img>
                 <?php }else{ ?>
                   <img src="images/profile.png" class="team-logo2"></img>
                    <?php }?>

                 <div class="teamb"><span><?php echo $arr4['response']['items'][$i]['teamb']['short_name'];?></span></div>
               </div>

                 <div style="margin-top: 10px;"><p class="short-para"><?php echo $arr4['response']['items'][$i]
                    ['status_note']; ?></p></div>

                 <div class="details" style="margin-top: -35px;">
                 <a href="#">DETAILS</a>
               </div>


             
               </div>
             </div>
           </div>

       <?php } ?> 
       <?php }} ?>     
            </div>
          </div>

 <?php } ?>
          
        </div>
        <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
        <a data-slide="next" href="#media" class="right carousel-control">›</a>
      </div>                                          
   


<!-- this card is for latest news -->
<div class="row">
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="card1">
      <div class="card-body">
        <h2 class="latest">LATEST NEWS</h2>

          <!-- this for loop is for limit of displaying news & if is for blank space -->
          <?php for($xre=7;$xre>=0;$xre--){  
            if(count($arr1['news'][$xre]) > 0){ ?>

              <!-- this is for headline -->
              <div class="news">
                <a href="./news_details.php?pk=<?php echo $arr1['news'][$xre]
                  ['news_details'][0]['headline'];?>&pic=<?php echo $arr1
                  ['news'][$xre]['news_details'][0]['pk'];?>" 
                  title="<?php echo $arr1['news'][$xre]['news_details'][0]
                  ['headline']; ?>">

                  <?php echo $arr1['news'][$xre]['news_details'][0]
                  ['headline']; ?></a><br>

              <!-- this is for time -->
              <time class="time"><?php echo $arr1['news'][$xre]['news_details'][0]['created']; ?></time>
              </div><!-- news -->
          <?php }} ?><!-- closing of for loop and if -->

                <!-- this is for more news -->
                <a href="./news.php" title="More News"><i class="more-news">More News..</i>
                </a><br><br>
        </div><!-- card body -->
      </div><!-- card1 -->
    </div><!-- col-sm-3 -->

   <!-- this card is for featured news -->
    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
      <div class="card2">
        <div class="card-body">
          <!-- this for loop is for limit of displaying featured news -->
          <?php for($xre=4;$xre>=0;$xre--){  
          if(count($arr3['fea_news']) > 0){ ?>
            <div style="border-bottom: 1px solid #e3e6e3;padding: 0px 0px 10px 0px;">

            <!-- topic name -->  
            <span class="topic"><?php echo $arr3['fea_news'][$xre]['fea_news_details'][0]
              ['topic']; ?></span>

          <!-- this if for image -->
          <?php if($arr3['fea_news'][$xre]['fea_news_details'][0]['url'] == ""){ ?>
            <a href="./news_details.php?pk=<?php echo $arr3['fea_news'][$xre]
              ['fea_news_details'][0]['headline'];?>&pic=<?php echo $arr3['fea_news'][$xre]
              ['fea_news_details'][0]['pk'];?> " title="<?php echo $arr3['fea_news'][$xre]
              ['fea_news_details'][0]['headline']; ?>">
            <img src="images/profile.png" class="responsive image1" width="275" height="160"></img></a>

          <?php }else{ ?> 
            <a href="./news_details.php?pk=<?php echo $arr3['fea_news'][$xre]
              ['fea_news_details'][0]['headline'];?>&pic=<?php echo $arr3['fea_news'][$xre]
              ['fea_news_details'][0]['pk'];?> " title="<?php echo $arr3['fea_news'][$xre]
              ['fea_news_details'][0]['headline']; ?>">
            <img src="<?php echo $arr3['fea_news'][$xre]['fea_news_details'][0]['url']; ?>" class="responsive image1" width="275" height="160"></img></a>
          <?php } ?><!-- closing of image if else statement -->

          <!-- this is for headline -->
            <a href="./news_details.php?pk=<?php echo $arr3['fea_news'][$xre]
              ['fea_news_details'][0]['headline'];?>&pic=<?php echo $arr3['fea_news'][$xre]
              ['fea_news_details'][0]['pk'];?> " title="<?php echo $arr3['fea_news'][$xre]
              ['fea_news_details'][0]['headline']; ?>">
            <h1 class="heading"><?php echo $arr3['fea_news'][$xre]['fea_news_details'][0]
              ['headline']; ?></h1></a>

           <!-- this is for short body -->
            <p class="para"><?php echo $arr3['fea_news'][$xre]['fea_news_details'][0]
              ['short_body']; ?></p>
            </div><!-- border bottom -->
                  <?php }} ?>

                  <a href="./news.php" title="More News"><i class="more-news1">More News..</i></a>
                
              
            </div><!-- card-body -->
            </div><!-- card2 -->
          </div><!-- col-sm-5 -->

          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="card3 bgimg">
            <div class="card-body">
            <p style="line-height: 6;margin: 0 0 10px;color: white;text-align: center;font-size: 13px;">Live Cricket Scores,News,Stats & videos on your mobile</p>
              <div style="font-size: 20px;margin-top: -5%;color: white;font-weight: bold;margin-top: ;text-align: center;">Download Now</div>
            <img src="logo_criknow.png" style="vertical-align: middle;width: 50%;margin-top: 24%;margin-left: 21%;"></img>
              <img src="images/1.png" id="banner-image" style="width: 120px;height: 200px;margin-left: 70%;margin-top: -130px;"></img>
              <a href="#"><img src="images/google-play.png" style="vertical-align: middle;height: 34px;margin-left: 5%;margin-top: -17%;width: 27%;"></img></a>
              <a href="#"><img src="images/appstore.png" style="vertical-align: middle;height: 33px;margin-left: 5%;margin-top: -17%;width: 25%;"></img></a>
              
            </div><!-- card-body -->
            </div><!-- card2 -->

          <div class="card4">
            <div class="card-body">
              <h4 class="featured">FEATURED VIDEOS</h4>
                <!-- this for loop is for limit of displaying featured videos -->
                <?php for($xre=2;$xre>=0;$xre--){ 
                  if(count($arr2['video']) > 0){ ?>

                <a href="./videos_details.php?pk=<?php echo $arr2['video'][$xre]
                ['video_details'][0]['title'];?>&cat=<?php echo $arr2['video'][$xre]
                ['video_details'][0]['pk'];?>" title="<?php echo $arr2['video']
                [$xre]['video_details'][0]['title']; ?>">
                <img src="<?php echo $arr2['video']
                [$xre]['video_details'][0]['url']; ?>" class="responsive image" width= "275" height= "160"></img></a></a>

                <a href="./videos_details.php"><img src="images/play.png" class="play-image"></img></a>

                <a href="./videos_details.php?pk=<?php echo $arr2['video'][$xre]
                ['video_details'][0]['title'];?>&cat=<?php echo $arr2['video'][$xre]
                ['video_details'][0]['pk'];?>" title="<?php echo $arr2['video']
                [$xre]['video_details'][0]['title']; ?>"><h4 class="title"><?php echo $arr2['video']
                [$xre]['video_details'][0]['title']; ?></h4> </a>
                <?php }} ?><!-- closing of for loop and if -->

                <a href="./videos.php" title="Click to view more videos"><button class="button">More Videos</button></a><br><br>
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