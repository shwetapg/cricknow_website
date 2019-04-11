<!DOCTYPE html>
<html>
<head>
  <title>Cricnow</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style_nav.css">
  <link rel="stylesheet" type="text/css" href="css/style_cat_top_all_videos.css">
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

            

  <!-- This is categories api -->
<?php
  session_start();
    $url1 = 'https://criknowapp.herokuapp.com/get_video_categories/';
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
   //var_dump($arr1);
?>


<!-- This is Topics drop down api -->
<?php
session_start();
    $url2 = 'https://criknowapp.herokuapp.com/get_video_topics/';
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



  <?php
session_start();
//var_dump($_GET['topic']);
    $url3 = 'https://criknowapp.herokuapp.com/get_topic_videos/';
    $options3 = array(
      'http' => array(
        'header'  => array(
                        'topic:'.$_GET['top'],
                      ),
        'method'  => 'GET',
      ),
    );
    $context3 = stream_context_create($options3);
    $output3 = file_get_contents($url3, false,$context3);
   /* echo $output4;*/
    $arr3 = json_decode($output3,true);
  // var_dump($arr3['video']);
?>


<?php
if(isset($_GET['cat'])){
session_start();
//var_dump($_GET['topic']);
    $url4 = 'https://criknowapp.herokuapp.com/get_category_videos/';
    $options4 = array(
      'http' => array(
        'header'  => array(
                        'category:'.$_GET['cat'],
                      ),
        'method'  => 'GET',
      ),
    );
    $context4 = stream_context_create($options4);
    $output4 = file_get_contents($url4, false,$context4);
   /* echo $output4;*/
    $arr4 = json_decode($output4,true);
  //var_dump($arr4);
  //exit;
}
?>

 <?php
session_start();
    $url5 = 'https://criknowapp.herokuapp.com/get_news_list/';
    $options5 = array(
      'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        
        'method'  => 'GET',
      ),
    );
    $context5 = stream_context_create($options5);
    $output5 = file_get_contents($url5, false,$context5);
   /* echo $output4;*/
    $arr5 = json_decode($output5,true);
    
?>

  
      <div class="row">
        <div class="col-sm-12">
          <div class="sub-card">
            <div class="card-body">
              
                <div class="row">
                <div class="col-sm-9">
                <div style="border-right: 1px solid #e3e6e3;margin-right: 13%;">  
                
                

           <?php if(isset($_GET['cat'])){
            echo '<b class="heading">'.$_GET['cat'].'</b>';  
        for($xt=0;$xt<1;$xt++){ 
    $url41 = 'https://criknowapp.herokuapp.com/get_category_videos/';
    $options41 = array(
      'http' => array(
        'header'  => array(
                        'category:'.$_GET['cat'],
                      ),
        'method'  => 'GET',
      ),
    );
    $context41 = stream_context_create($options41);
    $output41 = file_get_contents($url41, false,$context41);
   $arr41 = json_decode($output41,true);
  // $aa=array_reverse($arr41);
   //var_dump($aa);
   echo '<br/>';

        for($xr=count($arr41['video'])-1;$xr>=0;$xr--){ if($arr41['video']!='') ?>

       <div class="row" style="border-bottom: 1px solid #e3e6e3;padding: 0px 0px 16px 0px;margin-bottom: 30px;width: 102%;">
            <div class="col-sm-3" style="width: 37%;height: 175px;">
              
          
              <?php for($y=0;$y<count($arr41['video'][$xr]['video_details']);$y++){ ?>
              

          
              <a href="./videos_details.php?pk=<?php echo $arr41['video'][$xr]['video_details'][$y]
                  ['title'];?>&cat=<?php echo $arr41['video'][$xr]['video_details'][$y]
                  ['pk'];?>" title="<?php echo $arr41['video'][$xr]['video_details'][$y]['title']; ?>"><img class="image" src="<?php echo $arr41['video'][$xr]['video_details'][$y]['url']; ?>"></img></a>
              <a href="./videos_details.php" title="<?php echo $arr41['video'][$xr]['video_details'][$y]['title']; ?>"><img class="play-image" src="images/play.png"></img></a>
            </div>
            <div class="col-sm-9" style="width: 62%;">
              
              <a href="./videos_details.php?pk=<?php echo $arr41['video'][$xr]['video_details'][$y]
                    ['title'];?>&cat=<?php echo $arr41['video'][$xr]['video_details'][$y]
                  ['pk'];?>" title="<?php echo $arr41['video'][$xr]['video_details'][$y]['title']; ?>"><div class="title"><?php echo $arr41['video'][$xr]['video_details'][$y]['title']; ?></div> </a>
            

          <?php } ?></div>
          
          </div>
            <?php } ?>
              
       <?php }} ?>


  <?php if(isset($_GET['top'])){
    echo '<b class="heading">'.$_GET['top'].'</b>';
            for($xt=0;$xt<1;$xt++){ 
    $url31 = 'https://criknowapp.herokuapp.com/get_topic_videos/';
    $options31 = array(
      'http' => array(
        'header'  => array(
                        'topic:'.$_GET['top'],
                      ),
        'method'  => 'GET',
      ),
    );
    $context31 = stream_context_create($options31);
    $output31 = file_get_contents($url31, false,$context31);
   $arr31 = json_decode($output31,true);
   //var_dump($arr41);echo '<br/>';
   
        for($xr=count($arr31['video'])-1;$xr>=0;$xr--){ if($arr31['video']!='') ?>
       <div class="row" style="border-bottom: 1px solid #e3e6e3;padding: 0px 0px 16px 0px;margin-bottom: 30px;width: 102%;">
            <div class="col-sm-3" style="width: 37%;height: 175px;">
              
          
              <?php for($y=0;$y<count($arr31['video'][$xr]['video_details']);$y++){ ?>
              

          
              <a href="./videos_details.php?pk=<?php echo $arr31['video'][$xr]['video_details'][$y]
                  ['title'];?>&top=<?php echo $arr31['video'][$xr]['video_details'][$y]
                  ['pk'];?>" title="<?php echo $arr31['video'][$xr]['video_details'][$y]['title']; ?>"><img class="image" src="<?php echo $arr31['video'][$xr]['video_details'][$y]['url']; ?>"></img></a>
              <a href="./videos_details.php" title="<?php echo $arr31['video'][$xr]['video_details'][$y]['title']; ?>"><img class="play-image" src="images/play.png"></img></a>
            </div>
            <div class="col-sm-9" style="width: 62%;">
              
              <a href="./videos_details.php?pk=<?php echo $arr31['video'][$xr]['video_details'][$y]
                    ['title'];?>&top=<?php echo $arr31['video'][$xr]['video_details'][$y]
                  ['pk'];?>" title="<?php echo $arr31['video'][$xr]['video_details'][$y]['title']; ?>"><div class="title"><?php echo $arr31['video'][$xr]['video_details'][$y]['title']; ?></div> </a>
            

          <?php } ?></div>
          
          </div>
            <?php } ?>
              
  <?php }} ?>
        </div><!-- col-sm-12 -->
      </div>

                <div class="col-sm-3">  
              <h4 class="latest">LATEST NEWS</h4>

              <?php   for($xre=7;$xre>=0;$xre--){ 
                if(count($arr5['news'][$xre]) > 0){ ?>
                 <div class="row" style="border-bottom: 1px solid #e3e6e3;padding: 0px 0px 10px 0px;margin-top: 30px;">
                  <div class="col-sm-3">

                <?php if($arr5['news'][$xre]['news_details'][0]['url'] == ""){ ?>
                  <a href="./news_details.php?pk=<?php echo $arr5['news'][$xre]['news_details'][0]
                  ['headline'];?>&pic=<?php echo $arr5['news'][$xre]['news_details'][0]
                  ['pk'];?> " title="<?php echo $arr5['news'][$xre]['news_details'][0]['headline']; ?>"><img class="image1" src="images/profile.png"></img></a>
                   <?php }else{ ?> 
                  <a href="./news_details.php?pk=<?php echo $arr5['news'][$xre]['news_details'][0]
                  ['headline'];?>&pic=<?php echo $arr5['news'][$xre]['news_details'][0]
                  ['pk'];?> " title="<?php echo $arr5['news'][$xre]['news_details'][0]['headline']; ?>">
                  <img class="image1" src="<?php echo $arr5['news'][$xre]['news_details'][0]
                  ['url']; ?>"></img></a>
                <?php } ?>
              </div>

                <div class="col-sm-9">

                  <h2 class="heading2">
                    <a href="./news_details.php?pk=<?php echo $arr5['news'][$xre]['news_details'][0]
                    ['headline'];?>&pic=<?php echo $arr5['news'][$xre]['news_details'][0]
                  ['pk'];?> " title="<?php echo $arr5['news'][$xre]['news_details'][0]['headline']; ?>"><?php echo $arr5['news'][$xre]['news_details'][0]['headline']; ?></a>
                    </h2>

                    <time class="time"><?php echo $arr5['news'][$xre]['news_details'][0]
                    ['created']; ?></time>

                    </div>
              </div>
              <?php }} ?>
              <a href="./news.php" title="Click to view more News"><button class="button">More News</button></a><br><br>
            </div>
          </div>
          


              
            </div><!-- card body -->
          </div><!-- sub card -->
        </div><!-- col-sm-12 main -->      
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
                           <!--  <a href="#"  style="margin-left: -82%;"><span class="list">Careers</span></a><br>
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