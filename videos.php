<!DOCTYPE html>
<?php 
ini_set('display_errors', 0);
error_reporting(E_ERROR | E_WARNING | E_PARSE); 
?>
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
  <link rel="stylesheet" type="text/css" href="css/style_videos.css">
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

           
        

<!-- This is categories drop down api -->
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
   /* var_dump($arr1)*/
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

<!-- this is for topic video api -->
<?php
session_start();
/* var_dump($_GET['topic']);*/
if(isset($_GET['top'])){
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
}
  /* var_dump($arr3['video']);*/
?>

<!-- this is for category video api -->
<?php
session_start();
if(isset($_GET['cat'])){
/* var_dump($_GET['category']);*/
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
}
   /* var_dump($arr4['video']);*/
?>

<?php
session_start();
    $url5 = 'https://criknowapp.herokuapp.com/get_video_list/';
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
            <div style="border-bottom: 1px solid #e3e6e3;padding: 2px 0 0px 25px;margin-bottom: 10px;">
            

            	<?php if(isset($_GET['cat'])){ ?>
                  <h1 class="heading">Video Categories</h1>
                <?php ?> <?php } elseif(isset($_GET['top'])) { ?>
                  <h1 class="heading">Video Topics</h1>
                <?php } else {?>
                <h1 class="heading">All Cricket Videos</h1>
                <?php } ?>

            	



            	<a href="./videos.php?" class="all-videos" title="All Videos">All Videos</a>
            	
            	<label style="margin-left: 50px;font-size: 16px;">Categories</label>
              <select style="width: 190px;height: 25px;" id="export_type" onchange="scan_seriano()">
                <?php if(isset($_GET['cat'])){ ?>
                  <option value="<?php echo $_GET['cat'];?>" selected="selected">
                  <?php echo $_GET['cat'];?></option>
                <?php } ?>

                <option>Select Category</option>

                <?php for($x=0;$x<count($arr1['video_categories']);$x++){ ?>
                  <option value="<?php echo $arr1['video_categories'][$x]['category']; ?>" class="export_option"
                  ><?php echo $arr1['video_categories'][$x]['category']; ?></option>
                <?php } ?>
              </select>

            	<label style="margin-left: 50px;font-size: 16px;">Playlists</label>
              <select style="width: 190px;height: 25px;" id="export_type1" 
              onchange="scan_seriano1()">
                <?php if(isset($_GET['top'])){ ?>
                  <option value="<?php echo $_GET['top'];?>" selected="selected">
                  <?php echo $_GET['top'];?></option>
                <?php } ?>

                <option>Select Playlist</option>

                <?php for($x=0;$x<count($arr2['video_topics']);$x++){ ?>
                  <option value="<?php echo $arr2['video_topics'][$x]['topic']; ?>" class="export_option1"> 
                    <?php echo $arr2['video_topics'][$x]['topic']; ?></option>
                <?php } ?>
              </select>
            </div>

          
          
          


            


            
            <div class="row">
            	<div class="col-sm-12">
          <?php if(isset($_GET['cat'])){ ?>
          	<h2 class="heading1"><?php echo $_GET['cat']; ?></h2>
          <?php }else{ ?>
          	<h2 class="heading1"><?php echo $_GET['top']; ?></h2>
          	<?php } ?>
                    
            
						
          
        </div><!-- col-sm-12 -->
        </div><!-- row -->
        
				
        	
			<?php if(isset($_GET['cat'])){ ?>
				
				
				<a href="./cat_top_all_videos.php?cat=<?php echo $_GET['cat'];?>" title="All <?php echo $_GET['cat'];?> Videos"><button class="button" style="margin-top: -40px;">All Videos</button></a>

			<div class="row" style="border-bottom: 1px solid #e3e6e3;padding: 0px 0px 10px 0px;">

			<?php 	for($xre=3;$xre>=0;$xre--){ if($arr4['video']!='') 
			if(count($arr4['video'][$xre]) > 0){ ?>
        		<div class="col-sm-3">
        			<div class="main">
					<?php for($y=0;$y<count($arr4['video'][$xre]['video_details']);$y++){ ?>
        			

					
        			<a href="./videos_details.php?pk=<?php echo $arr4['video'][$xre]['video_details'][$y]
                  ['title'];?>&cat=<?php echo $arr4['video'][$xre]['video_details'][$y]
                  ['pk'];?>" title="<?php echo $arr4['video'][$xre]['video_details'][$y]['title'];?>"><img class="image" src="<?php echo $arr4['video'][$xre]['video_details'][$y]['url'];?>"></img></a>

        			<a href="./videos_details.php" title="<?php echo $arr4['video'][$xre]['video_details'][$y]['title'];?>"><img class="play-image" src="images/play.png"></img></a>
        			
        			<a href="./videos_details.php?pk=<?php echo $arr4['video'][$xre]['video_details'][$y]
                    ['title'];?>&cat=<?php echo $arr4['video'][$xre]['video_details'][$y]
                  ['pk'];?>" title="<?php echo $arr4['video'][$xre]['video_details'][$y]['title'];?>"><div class="title"><?php echo $arr4['video'][$xre]['video_details'][$y]['title'];?></div> </a>

                  <a href="./videos_details.php" title="<?php echo $arr4['video'][$xre]['video_details'][$y]['title'];?>"><time class="time"><?php echo $arr5['video'][$xre]['video_details'][$y]['created']; ?></time></a>

					<?php } ?>
					
        		</div><!-- main -->
        			</div><!-- col-sm-4 -->
        		<?php }} ?>	
				
				</div><!-- row -->
			 

            </div><!-- card body -->
          </div><!-- sub card -->
        </div><!-- col-sm-12 -->
      </div><!-- row -->
    

				

						<footer class="footer">
                        <div class="row">
                          <div class="col-sm-3">
                            <a href="./home.php"><img src="images/logo_criknow.png" class="footer-logo"></img></a>
                          </div>
                          <div class="col-sm-3">
                            <span class="text">MOBILE SITE & APPS</span><br>
                            
                            <a href="#"><i class="fa fa-android icon1" style="margin-left: -95px;"></i>
                              <span class="list">Android</span></a><br>
                            <a href="#"><i class="fa fa-apple icon1" style="margin-left: -118px;"></i>
                              <span class="list">iOS</span></a>
                          </div>
                          <div class="col-sm-3">
                            <span class="text" style="margin-right: 25%;">FOLLOW US ON</span><br>
                            <a href="#"><i class="fa fa-facebook icon2" style="margin-left: -45%;"></i>
                              <span class="list">facebook</span></a><br>
                            <a href="#"><i class="fa fa-twitter icon2" style="margin-left: -50%;"></i>
                              <span class="list">twitter</span></a><br>
                            <a href="#"><i class="fa fa-youtube-play icon2" style="margin-left: -46%;"></i>
                              <span class="list">youtube</span></a><br>
                            <a href="#"><i class="fa fa-pinterest icon2" style="margin-left: -45%;"></i>
                              <span class="list">Pinterest</span></a>
                          </div>
                          <div class="col-sm-3">
                            <span class="text" style="margin-right: 72%;">COMPANY</span><br>
                            <a href="#"><span class="list" style="margin-left: -80%;line-height: 1.5;">Careers</span></a><br>
                            <a href="#"><span class="list" style="margin-left: -77%;line-height: 2.5;">Advertise</span></a><br>
                            <a href="#"><span class="list" style="margin-left: -67%;line-height: 2.5;">Privacy Policy</span></a><br>
                            <a href="#"><span class="list" style="margin-left: -68%;line-height: 2.5;">Terms of Use</span></a>
                          </div>
                        </div>
                      </footer>
				
				
				
				
				
				
				
				<?php } elseif(isset($_GET['top'])) { ?>
        			<a href="./cat_top_all_videos.php?top=<?php echo $_GET['top'];?>" title="All <?php echo $_GET['top'];?> Videos"><button class="button" style="margin-top: -40px;">All Videos</button></a>
				<div class="row" style="border-bottom: 1px solid #e3e6e3;padding: 0px 0px 10px 0px;">
					
				<?php for($xre=3;$xre>=0;$xre--){ if($arr3['video']!='') 
				if(count($arr3['video'][$xre]) > 0){ ?>
        		<div class="col-sm-3">
        			<div class="main" style="margin-bottom: 52px;">
					<?php for($y=0;$y<count($arr3['video'][$xre]['video_details']);$y++){ ?>
        			

					
        			<a href="./videos_details.php?pk=<?php echo $arr3['video'][$xre]['video_details'][$y]
                  ['title'];?>&top=<?php echo $arr3['video'][$xre]['video_details'][$y]
                  ['pk'];?>" title="<?php echo $arr3['video'][$xre]['video_details'][$y]['title']; ?>"><img class="image" src="<?php echo $arr3['video'][$xre]['video_details'][$y]['url'];?>"></img></a>

        			<a href="./videos_details.php" title="<?php echo $arr3['video'][$xre]['video_details'][$y]['title']; ?>"><img class="play-image" src="images/play.png"></img></a>
        			
        			<a href="./videos_details.php?pk=<?php echo $arr3['video'][$xre]['video_details'][$y]
                    ['title'];?>&top=<?php echo $arr3['video'][$xre]['video_details'][$y]
                  ['pk'];?>" title="<?php echo $arr3['video'][$xre]['video_details'][$y]['title']; ?>"><div class="title"><?php echo $arr3['video'][$xre]['video_details'][$y]['title']; ?></div> </a>
                  <a href="./videos_details.php"><time class="time"><?php echo $arr5['video'][$xre]['video_details'][$y]['created']; ?></time></a>

					<?php } ?>
					
        		</div><!-- main -->
        			</div><!-- col-sm-4 -->
        		<?php }} ?>
				
				</div><!-- row -->
			 

            </div><!-- card body -->
          </div><!-- sub card -->
        </div><!-- col-sm-12 -->
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
				
				<?php } else {
					
					echo '<b class="heading1">Latest Videos</b>';?>
					<a href="./latest_all_videos.php" title="All latest Videos"><button class="button" style="margin-top: -10px;">All Videos</button></a>
					 <div class="row" style="border-bottom: 1px solid #e3e6e3;padding: 0px 0px 10px 0px;margin-bottom: 20px;">
					<?php 
					
		
		 
		 	for($xree=3;$xree>=0;$xree--){ if($arr5['video']!='') 
		 		if(count($arr5['video'][$xree]) > 0){ ?>

		 	
			<div class="col-sm-3">
				<div class="main">
        			
					
        			<?php for($ye=0;$ye<1;$ye++){ ?>
        			

			
        			<a href="./videos_details.php?pk=<?php echo $arr5['video'][$xree]['video_details'][$ye]
                  ['title'];?>&cat=<?php echo $arr5['video'][$xree]['video_details'][$ye]
                  ['pk'];?>" title="<?php echo $arr5['video'][$xree]['video_details'][$ye]['title']; ?>"><img class="image" src="<?php echo $arr5['video'][$xree]['video_details'][$ye]['url'];?>"></img></a>
                  
        			<a href="./videos_details.php" title="<?php echo $arr5['video'][$xree]['video_details'][$ye]['title']; ?>"><img class="play-image" src="images/play.png"></img></a>
        			
        			<a href="./videos_details.php?pk=<?php echo $arr5['video'][$xree]['video_details'][$ye]
                    ['title'];?>&cat=<?php echo $arr5['video'][$xree]['video_details'][$ye]
                  ['pk'];?>" title="<?php echo $arr5['video'][$xree]['video_details'][$ye]['title']; ?>"><div class="title"><?php echo $arr5['video'][$xree]['video_details'][$ye]['title']; ?></div> </a>

                  <a href="./videos_details.php" title="<?php echo $arr5['video'][$xree]['video_details'][$ye]['title']; ?>"><time class="time"><?php echo $arr5['video'][$xree]['video_details'][$ye]['created']; ?></time></a>

					<?php } ?>
					
					
        		</div>
        			</div>
        		<?php }} ?> 
					
			
				</div>	
				
				
				
				<?php
				for($xt=0;$xt<count($arr1['video_categories']);$xt++){ 

				
    $url41 = 'https://criknowapp.herokuapp.com/get_category_videos/';
    $options41 = array(
      'http' => array(
        'header'  => array(
        								'category:'.$arr1['video_categories'][$xt]['category'],
        							),
        'method'  => 'GET',
      ),
    );
    $context41 = stream_context_create($options41);
    $output41 = file_get_contents($url41, false,$context41);
	 $arr41 = json_decode($output41,true);
	 //var_dump(count($arr41['video']));
	
	 
	 if(count($arr41['video']) > 0){
	 	echo '<b class="heading1">'.$arr1['video_categories'][$xt]['category'].'</b>';?>
	 
		<a href="./cat_top_all_videos.php?cat=<?php echo $arr1['video_categories'][$xt]['category'];?>" title="All <?php echo $arr1['video_categories'][$xt]['category'];?> Videos" ><button class="button" style="margin-top: -10px;">All Videos</button></a>
		 <div class="row" style="border-bottom: 1px solid #e3e6e3;padding: 0px 0px 10px 0px;margin-bottom: 20px;">
			<?php 
				for($xr=3;$xr>=0;$xr--){ if($arr41['video']!='') 
					if(count($arr41['video'][$xr]) > 0){ ?>

				
        		<div class="col-sm-3">
        			
						<div class="main">
        			<?php for($y=0;$y<count($arr41['video'][$xr]['video_details']);$y++){ ?>
        			

			
        			<a href="./videos_details.php?pk=<?php echo $arr41['video'][$xr]['video_details'][$y]
                  ['title'];?>&cat=<?php echo $arr41['video'][$xr]['video_details'][$y]
                  ['pk'];?>" title="<?php echo $arr41['video'][$xr]['video_details'][$y]['title']; ?>"><img class="image" src="<?php echo $arr41['video'][$xr]['video_details'][$y]['url'];?>"></img></a>
        			<a href="./videos_details.php" title="<?php echo $arr41['video'][$xr]['video_details'][$y]['title']; ?>"><img class="play-image" src="images/play.png"></img></a>
        			
        			<a href="./videos_details.php?pk=<?php echo $arr41['video'][$xr]['video_details'][$y]
                    ['title'];?>&cat=<?php echo $arr41['video'][$xr]['video_details'][$y]
                  ['pk'];?>" title="<?php echo $arr41['video'][$xr]['video_details'][$y]['title']; ?>"><div class="title"><?php echo $arr41['video'][$xr]['video_details'][$y]['title']; ?></div> </a>
                  <a href="./videos_details.php" title="<?php echo $arr41['video'][$xr]['video_details'][$y]['title']; ?>"><time class="time"><?php echo $arr5['video'][$xr]['video_details'][$y]['created']; ?></time></a>

					<?php } ?>
					</div>
					
        		
        			</div>
        		<?php }} ?>
				</div>
				<?php }} ?>
				


				<?php
				for($xt=0;$xt<count($arr2['video_topics']);$xt++){ 
				
				
    $url31 = 'https://criknowapp.herokuapp.com/get_topic_videos/';
    $options31 = array(
      'http' => array(
        'header'  => array(
        								'topic:'.$arr2['video_topics'][$xt]['topic'],
        							),
        'method'  => 'GET',
      ),
    );
    $context31 = stream_context_create($options31);
    $output31 = file_get_contents($url31, false,$context31);
	 $arr31 = json_decode($output31,true);
	 //var_dump(count($arr41['video']));
	
	 
	 
	 if(count($arr31['video']) > 0){
	 	echo '<b class="heading1">'.$arr2['video_topics'][$xt]['topic'].'</b>';?>
	<a href="./cat_top_all_videos.php?top=<?php echo $arr2['video_topics'][$xt]['topic'];?>" title="All <?php echo $arr2['video_topics'][$xt]['topic'];?> Videos"><button class="button" style="margin-top: -10px;">All Videos</button></a>
		 <div class="row" style="border-bottom: 1px solid #e3e6e3;padding: 0px 0px 10px 0px;margin-bottom: 20px;">
			<?php	for($xr=3;$xr>=0;$xr--){ if($arr31['video']!='') 
			if(count($arr31['video'][$xr]) > 0){ ?>
				
        		<div class="col-sm-3">
        			<div class="main">
					
        			<?php for($y=0;$y<count($arr31['video'][$xr]['video_details']);$y++){ ?>
        			

			
        			<a href="./videos_details.php?pk=<?php echo $arr31['video'][$xr]['video_details'][$y]
                  ['title'];?>&top=<?php echo $arr31['video'][$xr]['video_details'][$y]
                  ['pk'];?>" title="<?php echo $arr31['video'][$xr]['video_details'][$y]['title']; ?>"><img class="image" src="<?php echo $arr31['video'][$xr]['video_details'][$y]['url'];?>"></img></a>
        			<a href="./videos_details.php" title="<?php echo $arr31['video'][$xr]['video_details'][$y]['title']; ?>"><img class="play-image" src="images/play.png"></img></a>
        			
        			<a href="./videos_details.php?pk=<?php echo $arr31['video'][$xr]['video_details'][$y]
                    ['title'];?>&top=<?php echo $arr31['video'][$xr]['video_details'][$y]
                  ['pk'];?>" title="<?php echo $arr31['video'][$xr]['video_details'][$y]['title']; ?>"><div class="title"><?php echo $arr31['video'][$xr]['video_details'][$y]['title']; ?></div> </a>
                  <a href="./videos_details.php" title="<?php echo $arr31['video'][$xr]['video_details'][$y]['title']; ?>"><time class="time"><?php echo $arr5['video'][$xr]['video_details'][$y]['created']; ?></time></a>

					<?php } ?>
					
					</div>
        		
        			</div>
        		<?php }} ?>
				</div>
				<?php }} ?>
				
				
        	</div><!-- row -->
			 

            </div><!-- card body -->
          </div><!-- sub card -->
        </div><!-- col-sm-12 -->
      </div><!-- row -->
    

				

						<footer class="footer">
                        <div class="row">
                          <div class="col-sm-3">
                            <a href="./home.php"><img src="images/logo_criknow.png" class="footer-logo"></img></a>
                          </div>
                          <div class="col-sm-3">
                            <span class="text">MOBILE SITE & APPS</span><br>
                            <a href="#"><i class="fa fa-android icon1" style="margin-left: -50px;"></i>
                              <span class="list">m.cricbuzz.com</span></a><br>
                            <a href="#"><i class="fa fa-android icon1" style="margin-left: -95px;"></i>
                              <span class="list">Android</span></a><br>
                            <a href="#"><i class="fa fa-apple icon1" style="margin-left: -118px;"></i>
                              <span class="list">iOS</span></a>
                          </div>
                          <div class="col-sm-3">
                            <span class="text" style="margin-right: 25%;">FOLLOW US ON</span><br>
                            <a href="#"><i class="fa fa-facebook icon2" style="margin-left: -45%;"></i>
                              <span class="list">facebook</span></a><br>
                            <a href="#"><i class="fa fa-twitter icon2" style="margin-left: -50%;"></i>
                              <span class="list">twitter</span></a><br>
                            <a href="#"><i class="fa fa-youtube-play icon2" style="margin-left: -46%;"></i>
                              <span class="list">youtube</span></a><br>
                            <a href="#"><i class="fa fa-pinterest icon2" style="margin-left: -45%;"></i>
                              <span class="list">Pinterest</span></a>
                          </div>
                          <div class="col-sm-3">
                            <span class="text" style="margin-right: 72%;">COMPANY</span><br>
                            <a href="#"><span class="list" style="margin-left: -80%;line-height: 1.5;">Careers</span></a><br>
                            <a href="#"><span class="list" style="margin-left: -77%;line-height: 2.5;">Advertise</span></a><br>
                            <a href="#"><span class="list" style="margin-left: -67%;line-height: 2.5;">Privacy Policy</span></a><br>
                            <a href="#"><span class="list" style="margin-left: -68%;line-height: 2.5;">Terms of Use</span></a><br>
                            <a href="#"><span class="list" style="margin-left: -60%;line-height: 2.5;">Cricbuzz TV Ads</span></a>
                          </div>
                        </div>
                      </footer>


<?php }?>



<!-- this script for news dropdown -->
  <script type="text/javascript">
function myFunction() {
  location.replace("./news.php")
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


<!-- this script for videos dropdown -->
  <script type="text/javascript">
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