<?php
session_start();
if(!empty($_SESSION['key1']))
{
         $username = $_SESSION['key1']; 
         if(!empty($_SESSION['key2']))
         {
             $email = $_SESSION['key2']; 
             $conn = new mysqli('localhost','root','','gp');
             if($conn->connect_error){
                 die("गर्भाधान विफल:".$conn->connect_error);
                    }
        $phno="SELECT number FROM gp WHERE email='$email'";
        $res_u=mysqli_query($conn,$phno);
        }
        else{
            header("location:../indexh.php");
        }
}
else{
            header("location:../indexh.php");
}
#profile pic starts

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>GAREWARD</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href='https://fonts.googleapis.com/css?family=Vibur' rel='stylesheet' type='text/css'>
  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
     


</head>
<script type="text/javascript">
  $(document).ready(function(){
    $(".pointstab1").counterUp({delay:10,time:1000});
  });
  </script>
    


<body id="bod">
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.php" class="logo"><b><span>G</span><span>ar</span><span>ew</span><span>a</span><span>rd</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
            <!-- settings start -->
          <?php  
$bio="bio";
$bio.=$username;
$status="SELECT * FROM $username.noti WHERE status='unread'";
$resultstatus=mysqli_query($conn,$status);
            $no_of_noti_rows=mysqli_num_rows($resultstatus);
?>
            
            <?php ?>    
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.php#">
              <i class="fa fa-tasks" ></i>
              <span class="badge bg-theme abc" id="abc" ></span>
              </a>
            <ul class="dropdown-menu extended tasks-bar hi1">
              
            </ul>
          </li><?php  //}
            //else {
            ?>
            
            
            
            <?php// } ?>
            
            
        
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.php#">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme">5</span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">आपके पास 5 नए संदेश हैं</p>
              </li>
              <li>
                <a href="index.php#">
                  <span class="photo"><img alt="avatar" src="img/ui-zac.jpg"></span>
                  <span class="subject">
                  <span class="from">Zac Snider</span>
                  <span class="time">अभी</span>
                  </span>
                  <span class="message">
                  हाय मेट, कैसा है सब कुछ?
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.php#">
                  <span class="photo"><img alt="avatar" src="img/ui-divya.jpg"></span>
                  <span class="subject">
                  <span class="from">Divya Manian</span>
                  <span class="time">40 मिनट.</span>
                  </span>
                  <span class="message">
                  नमस्ते, मुझे आपकी सहायता चाहिए.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.php#">
                  <span class="photo"><img alt="avatar" src="img/ui-danro.jpg"></span>
                  <span class="subject">
                  <span class="from">Dan Rogers</span>
                  <span class="time">2 घंटे.</span>
                  </span>
                  <span class="message">
                  अपने नए डैशबोर्ड से प्यार करें.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.php#">
                  <span class="photo"><img alt="avatar" src="img/ui-sherman.jpg"></span>
                  <span class="subject">
                  <span class="from">Dj Sherman</span>
                  <span class="time">4 घंटे.</span>
                  </span>
                  <span class="message">
                  कृपया जवाब दें.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.php#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.php#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning">7</span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">आपके पास 7 नई सूचनाएं हैं</p>
              </li>
              <li>
                <a href="index.php#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  सर्वर अतिभारित.
                  <span class="small italic">4 मिनट.</span>
                  </a>
              </li>
              <li>
                <a href="index.php#">
                  <span class="label label-warning"><i class="fa fa-bell"></i></span>
                  मेमोरी # 2 जवाब नहीं.
                  <span class="small italic">30 मिनट.</span>
                  </a>
              </li>
              <li>
                <a href="index.php#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  डिस्क स्पेस 85% तक पहुंच गया.
                  <span class="small italic">2 घंटे.</span>
                  </a>
              </li>
              <li>
                <a href="index.php#">
                  <span class="label label-success"><i class="fa fa-plus"></i></span>
                  नया उपयोगकर्ता पंजीकृत.
                  <span class="small italic">3 घंटे.</span>
                  </a>
              </li>
              <li>
                <a href="index.php"> सभी अधिसूचनाएं</a>
              </li>
            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" data-toggle="modal" data-target="#exampleModal1"><i class="fa fa-sign-out" aria-hidden="true" ></i></a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
      <?php 
                  $status = $statusMsg = ''; 
                  if(isset($_POST["submit"])){
                      $status = 'error'; 
                if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            //$sql="INSERT into hello1(image) VALUES ('$imgContent')";
            
            $sql_u="SELECT * FROM gp WHERE email='$email'";
            $res_u=mysqli_query($conn,$sql_u);
            if(mysqli_num_rows($res_u)>0){
            $sql="UPDATE GP SET image='$imgContent' WHERE email='$email'";
            }
            else{
                $sql="INSERT into gp(image) VALUES ('$imgContent') WHERE email='$email'";
            }
            $insert = mysqli_query($conn,$sql); 
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "फाईल सफलता पूर्वक अपलोड हुई."; 
            }else{ 
                $statusMsg = "फ़ाइल अपलोड विफल रहा, कृपया पुनः प्रयास करें."; 
            }  
        }else{ 
            $statusMsg = 'क्षमा करें, केवल JPG, JPEG, PNG और GIF फ़ाइलों को अपलोड करने की अनुमति है.'; 
        } 
    }else{ 
        $statusMsg = 'कृपया अपलोड करने के लिए एक छवि फ़ाइल चुनें.'; 
    } 
} 
      
      
      
      $a="SELECT image FROM gp WHERE email='$email'";
$result = mysqli_query($conn,$a);
$b="SELECT MAX(id) AS maximum FROM hello1";
$result1=mysqli_query($conn,$b);
$row1=mysqli_fetch_assoc($result1);
$maximum=$row1['maximum'];
     ?> 
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
          <?php if(mysqli_num_rows($result) > 0){ ?> 
        <ul class="sidebar-menu" id="nav-accordion">
            <?php while($row = $result->fetch_assoc()){ ?> 
          <p class="centered"><a href="profile.php"><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" class="img-circle" width="80"></a></p>
             <?php } ?>
            <?php }else{ ?> 
                    <p class="status error"><a href="profile.php"><img src="img/friends/fr-11.jpg" class="img-circle" width="80"></a></p> 
                <?php } ?>
          <h5 class="centered" style="text-transform:capitalize;"><?php echo $username; ?></h5>
          
          <li class="sub-menu">
            <a href="hqr1.php">
              <i class=" fa fa-bar-chart-o"></i>
              <span>scan Here!!!</span>
              </a>
          </li>  
          
         <li>
            <a class="active" href="profilehd.php">
              <i class="fa fa-book"></i>
                <span>प्रोफ़ाइल</span>
              </a>
          </li>
          <li class="mt" style="margin-top:0px;">
            <a href="indexhd.php">
              <i class="fa fa-dashboard"></i>
              <span>डैशबोर्ड</span>
              </a>
          </li>
          
          <img class="sidebar-gif" src="img/sidebar-bottom.gif">
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
      <?php 
      $sql_u1="SELECT * FROM gp WHERE email='$email'";
            $res_u1=mysqli_query($conn,$sql_u1);
      ?>
    <section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-12" style="width: 98%;left: 11px;">
            <div class="row content-panel panel1" style="background:#07051fa1;">
             
              <!-- /col-md-4 -->
              <div class="col-md-4 profile-text">
                <h3 style="text-transform:capitalize;"><?php echo $username; ?>
                </h3>
                <h6 style="text-transform:capitalize;">Gareward user</h6>
                <p style="color:#fff;"><?php $row=mysqli_fetch_assoc($res_u1);
                    $ph=$row['Number'];
                    echo $ph;
                    ?></p>
                <br>
                <p><button class="btn btn-theme" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-envelope"></i> Send Message</button></p>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 centered">
                
 
<!--Display status message -->
                  <?php
//echo $statusMsg; 
$a="SELECT image FROM gp WHERE email='$email'";
$result = mysqli_query($conn,$a);
$b="SELECT MAX(id) AS maximum FROM hello1";
$result1=mysqli_query($conn,$b);
$row1=mysqli_fetch_assoc($result1);
$maximum=$row1['maximum'];
        
              if(mysqli_num_rows($result) > 0){ ?> 
                <div class="profile-pic">
                    <?php while($row = $result->fetch_assoc()){ ?> 
                  <p><a data-toggle="tab" href="#edit"><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" width="42" height="42" class="img-circle"></a></p><!--- display profile here-->
                  <p>
                      <?php } ?> 
                      <button class="btn btn-theme"><i class="fa fa-check"></i> बक्शीश</button>
                    
                  </p>
                </div>
                <?php }else{ ?> 
                    <p><img src="img/default%20user.png" width="42" height="42" class="img-circle"></p>
                <?php } ?>
                      
                      
                    
              </div>
              <!-- /col-md-4 -->
            </div>
            <!-- /row -->
          </div>
          <!-- /col-lg-12 -->
          <div class="col-lg-12 mt" style="width: 98%;left: 11px;">
            <div class="row content-panel" style="background:#07051fa1;">
              <div class="panel-heading" style="background-color: #transparent;">
                <ul class="nav nav-tabs nav-justified">
                  <li class="active">
                    <a data-toggle="tab" href="#overview">Overview</a>
                  </li>
                  <li>
                    <a data-toggle="tab" href="#contact" class="contact-map">Contact</a>
                  </li>
                  <li>
                    <a data-toggle="tab" href="#edit">प्रोफ़ाइल संपादित करें</a>
                  </li>
                </ul>
              </div>
              <!-- /panel-heading -->
              <div class="panel-body" style="height: 500px !important;">
                <div class="tab-content">
                  <div id="overview" class="tab-pane active">
                    <div class="row">
                      <div class="col-md-6">
                        
                        <div class="detailed mt">
                          <h4  style="color:#fff;">Recent Activity</h4>
                          <div class="recent-activity">
                            <div class="activity-icon bg-theme"><i class="fa fa-check"></i></div>
                            <div class="activity-panel">
                              <h5>1 दिन पहले/h5>
                              <p>पुरस्कार के रूप में 1290 अंक जीते.</p>
                            </div>
                            <div class="activity-icon bg-theme02"><i class="fa fa-trophy"></i></div>
                            <div class="activity-panel">
                              <h5>5 DAYS AGO</h5>
                              <p>पुरस्कार के रूप में 1000 अंक जीते</p>
                            </div>
                            <div class="activity-icon bg-theme04"><i class="fa fa-rocket"></i></div>
                            <div class="activity-panel">
                              <h5>9 DAYS AGO</h5>
                              <p>पुरस्कार के रूप में 1025 अंक जीते.</p>
                            </div>
                          </div>
                          <!-- /recent-activity -->
                        </div>
                        <!-- /detailed -->
                      </div>
                      <!-- /col-md-6 -->
                      <div class="col-md-6 detailed" style="top: 15px;">
                        <h4 style="color:#fff;">User Stats</h4>
                        <div class="row centered mt mb">
                          <div class="col-sm-4" style="color:#fff;">
                            <h1><i class="fa fa-money"></i></h1>
                            <h3  class="pointstab1" id="pointstab"></h3>
                            <h6>जीवन काल</h6>
                          </div>
                          <div class="col-sm-4" style="color:#fff;">
                            <h1><i class="fa fa-trophy"></i></h1>
                            <h3 class="pointstab1">37</h3>
                            <h6>आवृत्ति</h6>
                          </div>
                          <div class="col-sm-4" style="color:#fff;">
                            <h1><i class="fa fa-shopping-cart"></i></h1>
                            <h3 class="pointstab1">1980</h3>
                            <h6>बोया गया अंक</h6>
                          </div>
                        </div>
                        <!-- /row -->
                        
                       
                        <!-- /row -->
                      </div>
                      <!-- /col-md-6 -->
                    </div>
                    <!-- /OVERVIEW -->
                  </div>
                  <!-- /tab-pane -->
                  <div id="contact" class="tab-pane">
                    <div class="row">
                      
                      <!-- /col-md-6 -->
                      <div class="col-md-6 detailed">
                        <h4>स्थान</h4>
                        <div class="col-md-8 col-md-offset-2 mt">
                          <p style="color:#cec8c8;">
                            डाक पता<br/> पीओ बॉक्स 12988, सटर अवे<br/> ब्राउनसविले, न्यूयॉर्क.
                          </p>
                          <br>
                          <p style="color:#cec8c8;">
                            मुख्यालय<br/> 844 सटर अवे,<br/> 9003, न्यूयॉर्क.
                          </p>
                        </div>
                      </div>
                      <div class="col-md-6 detailed">
                        <h4>संपर्क</h4>
                        <div class="col-md-8 col-md-offset-2 mt">
                          <p style="color:#cec8c8;">
                            Phone: +91 1234-5678<br/> Cell: 91 9876-5432<br/>
                          </p>
                          <br>
                          <p style="color:#fff;">
                            Email: garewardoffl@gmail.com<br/> Skype: UseGareward<br/> Website: http://gareward.in
                          </p>
                        </div>
                      </div>
                      <!-- /col-md-6 -->
                    </div>
                    <!-- /row -->
                  </div>
                  <!-- /tab-pane -->
                  <div id="edit" class="tab-pane">
                    <div class="row" style="color:#cec8c8;">
                      <div class="col-lg-8 col-lg-offset-2 detailed">
                        <h4 class="mb">Personal Information</h4>
                        <form role="form" class="form-horizontal" method="post" action="" enctype='multipart/form-data'>
                          <div class="form-group">
                              <label class="col-lg-2 control-label">AVATAR</label>
                            <div class="col-lg-6">
                                    <label>Select Image File:(within 1mb)</label>
                                    <input type="file" name="image">
                                    <input type="submit" name="submit" value="Upload">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">कंपनी</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="c-name" class="form-control" style="background-color:transparent; border-color:#4ecdc4; color:#cccfe2;">
                            </div>                   
                            </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">में रहता है</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="lives-in" class="form-control" style="background-color:transparent; border-color:#4ecdc4; color:#cccfe2;">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">देश</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="country" class="form-control" style="background-color:transparent; border-color:#4ecdc4; color:#cccfe2;">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">विवरण</label>
                            <div class="col-lg-10">
                              <textarea rows="10" cols="30" class="form-control" id="" name="" style="background-color:transparent; border-color:#4ecdc4; color:#cccfe2;"></textarea>
                            </div>
                          </div>
                        </form>
                      </div>
                      <div class="col-lg-8 col-lg-offset-2 detailed mt">
                        <h4 class="mb">संपर्क जानकारी</h4>
                        <form role="form" class="form-horizontal">
                          <div class="form-group">
                            <label class="col-lg-2 control-label">पता 1</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="addr1" class="form-control" style="background-color:transparent; border-color:#4ecdc4; color:#cccfe2;">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">पता 2</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="addr2" class="form-control" style="background-color:transparent; border-color:#4ecdc4; color:#cccfe2;">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">फ़ोन</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="phone" class="form-control" style="background-color:transparent; border-color:#4ecdc4; color:#cccfe2;">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">सेल</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="cell" class="form-control" style="background-color:transparent; border-color:#4ecdc4; color:#cccfe2;">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">ईमेल</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="email" class="form-control" style="background-color:transparent; border-color:#4ecdc4; color:#cccfe2;">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">स्काइप</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="skype" class="form-control" style="background-color:transparent; border-color:#4ecdc4; color:#cccfe2;">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button class="btn btn-theme" type="submit1">सहेजें</button>
                              <button class="btn btn-theme04" type="button">रद्द करना</button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <!-- /col-lg-8 -->
                    </div>
                    <!-- /row -->
                  </div>
                  <!-- /tab-pane -->
                </div>
                <!-- /tab-content -->
              </div>
              <!-- /panel-body -->
            </div>
            <!-- /col-lg-12 -->
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Gareward</strong>. All Rights Reserved
        </p>
        <div class="credits">
          
          Created by <a href="../index.php">Gareward टीम</a>
        </div>
        <a href="profile.php#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <!-- MAP SCRIPT - ALL CONFIGURATION IS PLACED HERE - VIEW OUR DOCUMENTATION FOR FURTHER INFORMATION -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
  <script>
    $('.contact-map').click(function() {

      //google map in tab click initialize
      function initialize() {
        var myLatlng = new google.maps.LatLng(40.6700, -73.9400);
        var mapOptions = {
          zoom: 11,
          scrollwheel: false,
          center: myLatlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById('map'), mapOptions);
        var marker = new google.maps.Marker({
          position: myLatlng,
          map: map,
          title: 'GAREWARD!'
        });
      }
      google.maps.event.addDomListener(window, 'click', initialize);
    });
  </script>
  <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel" style="color:#b3a5a5;">क्या आप लॉगआउट करना चाहते हैं???</h4>
            </div>
                
                  <div class="modal-footer">
              <button type="button" class="btn btn-light" data-dismiss="modal">नहीं</button>
              <a href="logout.php"><button type="button" class="btn btn-light">हाँ</button></a>
            </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>



      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel" style="color:#b3a5a5;">Send Message</h4>
            </div>
            <div class="modal-body">
              <form id="form" action="registration.php" method="POST">
                <div class="form-group">
                    <textarea style="width:100%;height:80px;padding:2px; background:transparent;color:white;"></textarea>
                </div>
                
                  <div class="modal-footer">
              <button type="button" class="btn btn-light" data-dismiss="modal">close</button>
              <a href=""><button type="button" class="btn btn-light">प्रस्तुत</button></a>
            </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>

















     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel" style="color:#b3a5a5;">SendMessage</h4>
            </div>
            <div class="modal-body">
              <form id="form" action="registration.php" method="POST">
                <div class="form-group">
                    <textarea style="width:100%;height:80px;padding:2px; background:transparent;color:white;"></textarea>
                </div>
                
                  <div class="modal-footer">
              <button type="button" class="btn btn-light" data-dismiss="modal">बंद करे</button>
              <input type="submit" class="btn btn-success" name="sign-up button" value="SEND">
            </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>
</body>
<script>
$(document).ready(function(){
  
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"notification.php",
   method:"POST",
   data:{view:view},
   //dataType:'json',
   success:function(data)
   {
     var obj = jQuery.parseJSON(data);
    //alert(obj.unseen_notification);
    $('.hi1').html(obj.notification);
    if(obj.unseen_notification > 0)
    {
     $('.abc').html(obj.unseen_notification);
    }
   }
  });
 }
 
 load_unseen_notification();
 
 
 $(document).on('click', '.dropdown-toggle', function(){
  $('.badge bg-theme abc').html('');
  load_unseen_notification('yes');
 });
 
 setInterval(function(){ 
  $('#pointstab').load('pointstab.php');
  load_unseen_notification();; 
 }, 1000);
 
});


      
  </script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="jquery.counterup.min.js"></script>
</html>