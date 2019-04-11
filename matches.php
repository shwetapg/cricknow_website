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
  <link rel="stylesheet" type="text/css" href="css/style_matches.css">
  </head>

<body>
  
          <!-- navigation bars -->
          <nav class="navbar" id="myTopnav">
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
              <div class="row" style="width: 420px;">
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
                    <a href="#" style="width: 195px;">United Arab Emirates</a>
                    <a href="#">Hong Kong</a>
                    <a href="#">Kenya</a>
                    <a href="#" style="width: 226px;">United States of America</a>
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

            <input type="text" name="search" placeholder="Search">
            <i class="fa fa-search search-icon"></i>

            <a href="javascript:void(0);" style="font-size:20px;" class="icon" onclick="myFunction()">&#9776;</a>

          </nav><!-- navbar -->

  
<!-- this api is for livescore -->
<?php
session_start();
  
  
$url1 = 'https://rest.entitysport.com/v2/matches/?token=871a3fd1baf7fdd00455bc7eca1258db&status=3&paged=1&per_page=40';
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

   for($x=0;$x<count($arr1['response']['items']);$x++){ 

              $p[]=$arr1['response']['items'][$x]['competition']['title'];
           
             }
     //echo $arr1['response']['items'][0]['date_start'];
//var_dump(array_unique($p));exit;         
?>

<!-- this api is for schedule -->
<?php
session_start();
   
  
$url2 = 'https://rest.entitysport.com/v2/matches/?token=871a3fd1baf7fdd00455bc7eca1258db&status=1&paged=1&per_page=40';
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
     

   for($x=0;$x<count($arr2['response']['items']);$x++){ 

              $p[]=$arr2['response']['items'][$x]['competition']['title'];
           
             }
           
    // echo $arr2['response']['items'][$x]['title'];
//var_dump(array_unique($p));exit;
?>

<!-- this api is for result -->
<?php
session_start();
   
  
$url3 = 'https://rest.entitysport.com/v2/matches/?token=871a3fd1baf7fdd00455bc7eca1258db&status=2&paged=1&per_page=40';
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
  

   for($x=0;$x<count($arr3['response']['items']);$x++){ 

              $p[]=$arr3['response']['items'][$x]['competition']['title'];
           
             }
     //echo $arr1['response']['items'][0]['date_start'];
//var_dump(array_unique($p));exit;
?>



  <div class="row">
        <div class="col-sm-12">
          <div class="sub-card">
            <div class="card-body">
              <div class="matches">
              <a href="./matches.php" style="margin-left: 38px;">Livescore</a>
              <a href="./matches.php?" id="export_type" onchange="scan_seriano()">Schedule</a>
              <a href="./matches.php?" id="export_type1" 
              onchange="scan_seriano1()">Result</a>
            </div>

              </div>
          </div>
        </div>
      </div>

       <div class="row">
        <div class="col-sm-12">
          <div class="sub-card" style="margin-top: 8px;">
            <div class="card-body">

      <?php if(isset($_GET['cat'])){ ?>
                  <h1 class="heading">Cricket Matches Schedule</h1>
                <?php ?> <?php } elseif(isset($_GET['top'])) { ?>
                  <h1 class="heading">Cricket Matches Results</h1>
                <?php } else {?>
                <h1 class="heading">Live Cricket Score</h1>
                <?php } ?>
                </div>
          </div>
        </div>
      </div>
    


      
    

    <?php for($xx=0;$xx<count(array_unique($p));$xx++){ ?>
    
      <div class="row">
        <div class="col-sm-12">
          <div class="match-card">
            <div class="card-body">
              

              <div style="border-bottom: 1px solid #e3e6e3;padding: 0px 0px 5px 0px;" class="title">
                <!--$arr1['response']['items'][$x]['competition']['title']-->
              <a href="#"><?php echo $p[$xx]; ?></a>
            
            </div>
           
          

            <?php for($x=0;$x<count($arr2['response']['items']);$x++){ ?>
      
      <?php if($arr2['response']['items'][$x]['competition']['title']==$p[$xx]) { ?>
            <div style="border-bottom: 1px solid #e3e6e3;">
            <div class="match-info">
            <a href="./matches_details.php">
              <span class="status" style="background-color: #106499;"><?php echo $arr2['response']['items'][$x]['status_str']; ?></span>

              <span class="date-start"><?php echo date('d F Y', strtotime(substr($arr2['response']['items'][$x]['date_start'],strpos($arr2['response']['items'][$x]['date_start'],""),10)));?></span>



              <span class="sub-title"><?php echo $arr2['response']['items'][$x]['subtitle']; ?></span>

              <div class="teama">
                <?php if($arr2['response']['items'][$x]['teama']['logo_url']){ ?>
                 <img src="<?php echo $arr2['response']['items'][$x]['teama']['logo_url'];?>" class="team-logo"></img>
                 <?php }else{ ?>
                   <img src="images/profile.png" class="team-logo"></img>
                    <?php }?>

                <div class="team-name"><?php echo $arr2['response']['items'][$x]['teama']['name'];?></div>
                
              </div>

              <div class="teamb">
                <?php if($arr2['response']['items'][$x]['teamb']['logo_url']){ ?>
                 <img src="<?php echo $arr2['response']['items'][$x]['teamb']['logo_url'];?>" class="team-logo" style="margin-top: 15px;"></img>
                 <?php }else{ ?>
                   <img src="images/profile.png" class="team-logo" style="margin-top: 15px;"></img>
                    <?php }?>

                <div class="team-name"><?php echo $arr2['response']['items'][$x]['teamb']['name'];?></div>
                
              </div>

              <div><p class="short-para"><?php echo $arr2['response']['items'][$x]['status_note']; ?></p></div>
            </a>
          </div>
        </div>
      <?php }?>
      <?php }?>
          

              </div>
          </div>
        </div>
      </div>
<?php }?>
    



    

    <?php for($xx=0;$xx<count(array_unique($p));$xx++){ ?>
    
      <div class="row">
        <div class="col-sm-12">
          <div class="match-card">
            <div class="card-body">
              

              <div style="border-bottom: 1px solid #e3e6e3;padding: 0px 0px 5px 0px;" class="title">
                <!--$arr1['response']['items'][$x]['competition']['title']-->
              <a href="#"><?php echo $p[$xx]; ?></a>
            
            </div>
           
          

            <?php for($x=0;$x<count($arr3['response']['items']);$x++){ ?>
      
      <?php if($arr3['response']['items'][$x]['competition']['title']==$p[$xx]) { ?>
            <div style="border-bottom: 1px solid #e3e6e3;">
            <div class="match-info">
            <a href="./matches_details.php">
              <span class="status" style="background-color: red;"><?php echo $arr3['response']['items'][$x]['status_str']; ?></span>

              <span class="date-start"><?php echo date('d F Y', strtotime(substr($arr3['response']['items'][$x]['date_start'],strpos($arr3['response']['items'][$x]['date_start'],""),10)));?></span>



              <span class="sub-title"><?php echo $arr3['response']['items'][$x]['subtitle']; ?></span>

              <div class="teama">
                <?php if($arr3['response']['items'][$x]['teama']['logo_url']){ ?>
                 <img src="<?php echo $arr3['response']['items'][$x]['teama']['logo_url'];?>" class="team-logo"></img>
                 <?php }else{ ?>
                   <img src="images/profile.png" class="team-logo"></img>
                    <?php }?>

                <div class="team-name"><?php echo $arr3['response']['items'][$x]['teama']['name'];?></div>
                <div class="full-score"><?php echo $arr3['response']['items'][$x]['teama']['scores_full'];?></div>
              </div>

              <div class="teamb">
                <?php if($arr3['response']['items'][$x]['teamb']['logo_url']){ ?>
                 <img src="<?php echo $arr3['response']['items'][$x]['teamb']['logo_url'];?>" class="team-logo" style="margin-top: 15px;"></img>
                 <?php }else{ ?>
                   <img src="images/profile.png" class="team-logo" style="margin-top: 15px;"></img>
                    <?php }?>

                <div class="team-name"><?php echo $arr3['response']['items'][$x]['teamb']['name'];?></div>
                <div class="full-score"><?php echo $arr3['response']['items'][$x]['teamb']['scores_full'];?></div>
              </div>

              <div><p class="short-para"><?php echo $arr3['response']['items'][$x]['status_note']; ?></p></div>
            </a>
          </div>
        </div>
      <?php }?>
      <?php }?>
          

              </div>
          </div>
        </div>
      </div>

    <?php } ?>


 
    

    <?php for($xx=0;$xx<count(array_unique($p));$xx++){ ?>
    
      <div class="row">
        <div class="col-sm-12">
          <div class="match-card">
            <div class="card-body">
              

              <div style="border-bottom: 1px solid #e3e6e3;padding: 0px 0px 5px 0px;" class="title">
                <!--$arr1['response']['items'][$x]['competition']['title']-->
              <a href="#"><?php echo $p[$xx]; ?></a>
            
            </div>
           
          

            <?php for($x=0;$x<count($arr1['response']['items']);$x++){ ?>
      
      <?php if($arr1['response']['items'][$x]['competition']['title']==$p[$xx]) { ?>
            <div style="border-bottom: 1px solid #e3e6e3;">
            <div class="match-info">
            <a href="./matches_details.php">
              <span class="status"><?php echo $arr1['response']['items'][$x]['status_str']; ?></span>

              <span class="date-start"><?php echo date('d F Y', strtotime(substr($arr1['response']['items'][$x]['date_start'],strpos($arr1['response']['items'][$x]['date_start'],""),10)));?></span>



              <span class="sub-title"><?php echo $arr1['response']['items'][$x]['subtitle']; ?></span>

              <div class="teama">
                <?php if($arr1['response']['items'][$x]['teama']['logo_url']){ ?>
                 <img src="<?php echo $arr1['response']['items'][$x]['teama']['logo_url'];?>" class="team-logo"></img>
                 <?php }else{ ?>
                   <img src="images/profile.png" class="team-logo"></img>
                    <?php }?>

                <div class="team-name"><?php echo $arr1['response']['items'][$x]['teama']['name'];?></div>
                <div class="full-score"><?php echo $arr1['response']['items'][$x]['teama']['scores_full'];?></div>
              </div>

              <div class="teamb">
                <?php if($arr1['response']['items'][$x]['teamb']['logo_url']){ ?>
                 <img src="<?php echo $arr1['response']['items'][$x]['teamb']['logo_url'];?>" class="team-logo" style="margin-top: 15px;"></img>
                 <?php }else{ ?>
                   <img src="images/profile.png" class="team-logo" style="margin-top: 15px;"></img>
                    <?php }?>

                <div class="team-name"><?php echo $arr1['response']['items'][$x]['teamb']['name'];?></div>
                <div class="full-score"><?php echo $arr1['response']['items'][$x]['teamb']['scores_full'];?></div>
              </div>

              <div><p class="short-para"><?php echo $arr1['response']['items'][$x]['status_note']; ?></p></div>
            </a>
          </div>
        </div>
      <?php }?>
      <?php }?>
          

              </div>
          </div>
        </div>
      </div>

    <?php } ?>
  


    
    
    
    
    
    
    
    
    

    
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

//var url = window.location.href;
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

</body>
</html>