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
<link rel="stylesheet" type="text/css" href="css/style_news.css">
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
    $url1 = 'https://criknowapp.herokuapp.com/get_news_categories/';
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
    
?>

<!-- This is Topics api -->
<?php
session_start();
    $url2 = 'https://criknowapp.herokuapp.com/get_news_topics/';
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

<!-- This is news list api -->
<?php
session_start();
    $url3 = 'https://criknowapp.herokuapp.com/get_category_news/';
    $options3 = array(
      'http' => array(
        'header'  => array(
                        'category:'.$_GET['cat'],
                        
                      ),
        'method'  => 'GET',
      ),
    );
    $context3 = stream_context_create($options3);
    $output3 = file_get_contents($url3, false,$context3);
   /* echo $output4;*/
   $arr3 = json_decode($output3,true);
//var_dump($arr3);
    // echo $arr3['news'][0]['news_details'][0]['category'];

?>

<!-- This is news list api -->
<?php
session_start();
    $url4 = 'https://criknowapp.herokuapp.com/get_topic_news/';
    $options4 = array(
      'http' => array(
        'header'  => array(
                        'topic:'.$_GET['top'],
                      ),
        'method'  => 'GET',
      ),
    );
    $context4 = stream_context_create($options4);
    $output4 = file_get_contents($url4, false,$context4);
   /* echo $output4;*/
    $arr4 = json_decode($output4,true);
//var_dump($arr3);
    // echo $arr4['news'][0]['news_details'][0]['topic'];

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
            <div style="border-bottom: 1px solid #e3e6e3;padding: 8px 0px 6px 35px;">
              <a href="./news.php?" class="all-stories" title="Cricket News">All Stories</a>

              <label style="margin-left: 50px;font-size: 16px;">Categories</label>
              <select style="width: 190px;height: 25px;" id="export_type" onchange="scan_seriano()">
                <?php if(isset($_GET['cat'])){ ?>
                  <option value="<?php echo $_GET['cat'];?>" selected="selected">
                  <?php echo $_GET['cat'];?></option>
                <?php } ?>

                <option>Select Category</option>

                <?php for($x=0;$x<count($arr1['news_categories']);$x++){ ?>
                  <option value="<?php echo $arr1['news_categories'][$x]['category']; ?>" class="export_option">
                    <?php echo $arr1['news_categories'][$x]['category']; ?></option>
                <?php } ?>
              </select>

              <label style="margin-left: 50px;font-size: 16px;">Topics</label>
              <select style="width: 190px;height: 25px;" id="export_type1" onchange="scan_seriano1()">
                <?php if(isset($_GET['top'])){ ?>
                  <option value="<?php echo $_GET['top'];?>" selected="selected">
                  <?php echo $_GET['top'];?></option>
                <?php } ?>

                <option>Select Topic</option>

                <?php for($x=0;$x<count($arr2['news_topics']);$x++){ ?>
                  <option value="<?php echo $arr2['news_topics'][$x]['topic']; ?>" class="export_option1">
                    <?php echo $arr2['news_topics'][$x]['topic']; ?></option>
                <?php } ?>
              </select>
            </div>



              <div class="row border">
                <div class="col-sm-12" style="border-right: 1px solid #e3e6e3;">

                  <?php if(isset($_GET['cat'])){ ?>
                  <h1 class="heading">Categories</h1>
                <?php ?> <?php } elseif(isset($_GET['top'])) { ?>
                  <h1 class="heading">Topics</h1>
                <?php } else {?>
                <h1 class="heading">Cricket News and Editorials</h1>
                <?php } ?>

        <?php if(isset($_GET['cat'])){ ?>
        
                
                  <?php for($x=count($arr3['news'])-1;$x>=0;$x--){ if($arr3['news']!='') ?>
        <?php if($arr3['news'][$x]['news_details'][0]['category'] == $_GET['cat']){ ?>
                <div class="row" style="border-bottom: 1px solid #e3e6e3;padding: 0px 0px 30px 0px;margin-top: 30px;">
                  <div class="col-sm-3" style="width: 32%;">

                <?php if($arr3['news'][$x]['news_details'][0]['url'] == ""){ ?>
                  <a href="./news_details.php?pk=<?php echo $arr3['news'][$x]['news_details'][0]
                  ['headline'];?>&pic=<?php echo $arr3['news'][$x]['news_details'][0]
                  ['pk'];?> "><img class="image" src="images/profile.png"></img></a>
                   <?php }else{ ?> 
                  <a href="./news_details.php?pk=<?php echo $arr3['news'][$x]['news_details'][0]
                  ['headline'];?>&pic=<?php echo $arr3['news'][$x]['news_details'][0]
                  ['pk'];?> ">
                  <img class="image" src="<?php echo $arr3['news'][$x]['news_details'][0]
                  ['url']; ?>"></img></a>
                <?php } ?><!-- closing for if statement -->
                  </div><!-- col-sm-3 -->

                  
                  <div class="col-sm-9" style="width: 62%;">
                    <span id="category"><?php echo $arr3['news'][$x]['news_details'][0]
                    ['category']; ?></span>
                    <span class="dot">.</span>
                    <span class="topic"><?php echo $arr3['news'][$x]['news_details'][0]
                    ['topic']; ?></span>
                    


                    <h2 class="heading1">
                    <a href="./news_details.php?pk=<?php echo $arr3['news'][$x]['news_details'][0]
                    ['headline'];?>&pic=<?php echo $arr3['news'][$x]['news_details'][0]
                  ['pk'];?> "><?php echo $arr3['news'][$x]['news_details'][0]['headline']; ?></a>
                    </h2>

                    <p class="para"><?php echo $arr3['news'][$x]['news_details'][0]
                    ['short_body']; ?></p>

                    <time class="time"><?php echo $arr3['news'][$x]['news_details'][0]
                    ['created']; ?></time>
          
                  </div><!-- col-sm-9 -->
                </div><!-- row -->
                <?php }}?> <?php } elseif(isset($_GET['top'])) { ?>

        <?php for($x=count($arr4['news']);$x>=0;$x--){ ?>
           <?php if($arr4['news'][$x]['news_details'][0]['topic'] == $_GET['top']){ ?>
        <div class="row" style="border-bottom: 1px solid #e3e6e3;padding: 0px 0px 30px 0px;margin-top: 30px;">
                  <div class="col-sm-3" style="width: 32%;">

                <?php if($arr4['news'][$x]['news_details'][0]['url'] == ""){ ?>
                  <a href="./news_details.php?pk=<?php echo $arr4['news'][$x]['news_details'][0]
                  ['headline'];?>&pic=<?php echo $arr4['news'][$x]['news_details'][0]
                  ['pk'];?> "><img class="image" src="images/profile.png"></img></a>
                   <?php }else{ ?> 
                  <a href="./news_details.php?pk=<?php echo $arr4['news'][$x]['news_details'][0]
                  ['headline'];?>&pic=<?php echo $arr4['news'][$x]['news_details'][0]
                  ['pk'];?> ">
                  <img class="image" src="<?php echo $arr4['news'][$x]['news_details'][0]
                  ['url']; ?>"></img></a>
                <?php } ?><!-- closing for if statement -->
                  </div><!-- col-sm-3 -->

                  
                  <div class="col-sm-9" style="width: 63%;">
                    <span id="category"><?php echo $arr4['news'][$x]['news_details'][0]
                    ['category']; ?></span>
                    <span class="dot">.</span>
                    <span class="topic"><?php echo $arr4['news'][$x]['news_details'][0]
                    ['topic']; ?></span>
                    


                    <h2 class="heading1">
                    <a href="./news_details.php?pk=<?php echo $arr4['news'][$x]['news_details'][0]
                    ['headline'];?>&pic=<?php echo $arr4['news'][$x]['news_details'][0]
                  ['pk'];?> "><?php echo $arr4['news'][$x]['news_details'][0]['headline']; ?></a>
                    </h2>

                    <p class="para"><?php echo $arr4['news'][$x]['news_details'][0]
                    ['short_body']; ?></p>

                    <time class="time"><?php echo $arr4['news'][$x]['news_details'][0]
                    ['created']; ?></time>
          
                  </div><!-- col-sm-9 -->
                </div><!-- row -->
        
        
        
        
        
        <?php }}} else {?>

           <?php for($x=count($arr5['news'])-1;$x>=0;$x--){ if($arr5['news']!='') ?>
             
           
        <div class="row" style="border-bottom: 1px solid #e3e6e3;padding: 0px 0px 30px 0px;margin-top: 30px;">
                  <div class="col-sm-3" style="width: 32%;">

                <?php if($arr5['news'][$x]['news_details'][0]['url'] == ""){ ?>
                  <a href="./news_details.php?pk=<?php echo $arr5['news'][$x]['news_details'][0]
                  ['headline'];?>&pic=<?php echo $arr5['news'][$x]['news_details'][0]
                  ['pk'];?> " title="<?php echo $arr5['news'][$x]['news_details'][0]['headline']; ?>"><img class="img-responsive image" src="images/profile.png"></img></a>
                   <?php }else{ ?> 
                  <a href="./news_details.php?pk=<?php echo $arr5['news'][$x]['news_details'][0]
                  ['headline'];?>&pic=<?php echo $arr5['news'][$x]['news_details'][0]
                  ['pk'];?> " title="<?php echo $arr5['news'][$x]['news_details'][0]['headline']; ?>">
                  <img class="img-responsive image" src="<?php echo $arr5['news'][$x]['news_details'][0]
                  ['url']; ?>"></img></a>
                <?php } ?><!-- closing for if statement -->
                  </div><!-- col-sm-3 -->

                  
                  <div class="col-sm-9" style="width: 63%;">
                    <span id="category"><?php echo $arr5['news'][$x]['news_details'][0]
                    ['category']; ?></span>
                    <span class="dot">.</span>
                    <span class="topic"><?php echo $arr5['news'][$x]['news_details'][0]
                    ['topic']; ?></span>
                    


                    <h2 class="heading1">
                    <a href="./news_details.php?pk=<?php echo $arr5['news'][$x]['news_details'][0]
                    ['headline'];?>&pic=<?php echo $arr5['news'][$x]['news_details'][0]
                  ['pk'];?> " title="<?php echo $arr5['news'][$x]['news_details'][0]['headline']; ?>"><?php echo $arr5['news'][$x]['news_details'][0]['headline']; ?></a>
                    </h2>

                    <p class="para"><?php echo $arr5['news'][$x]['news_details'][0]
                    ['short_body']; ?></p>

                    <time class="time"><?php echo $arr5['news'][$x]['news_details'][0]
                    ['created']; ?></time>
          
                  </div><!-- col-sm-9 -->
                </div><!-- row -->
                <?php } ?>
                <?php } ?>
             
        
        <!-- closing of for loop -->
                </div><!-- col-sm-12 -->
              </div><!-- row border -->
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

function scan_seriano() {
  
    var a=$("#export_type").val();
     var url1 = window.location.href;
   var ur='?';
   var url =url1 + ur;
          var newurl='';
          if (url.indexOf('?') >0)
          {
            var suburl=url.split('?');
            newurl+=suburl[0]+'?cat='+a;
          }else{
            newurl+=url;
          }
          window.location.href = newurl;
     
     
     
}

</script>


<script type="text/javascript">

function scan_seriano1() {
  
    var a1=$("#export_type1").val();
  
var url1 = window.location.href;
   var ur='?';
   var url =url1 + ur;
          var newurl='';
          if (url.indexOf('?') >0)
          {
            var suburl=url.split('?');
            newurl+=suburl[0]+'?top='+a1;
          }else{
            newurl+=url;
          }
          window.location.href = newurl;

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

