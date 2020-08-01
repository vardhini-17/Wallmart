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
                 die("conection failed:".$conn->connect_error);
                    }
        $phno="SELECT number FROM gp WHERE email='$email'";
        $res_u=mysqli_query($conn,$phno);
        }
        else{
           # header("location:../index.php");
        }
}
else{
            #header("location:../index.php");
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
  <link href="https://fonts.googleapis.com/css?family=Rubik+Mono+One" rel="stylesheet">
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
<link href='https://fonts.googleapis.com/css?family=Vibur' rel='stylesheet' type='text/css'>
  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style1.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

  
</head>
    
    <script>
        $(document).ready(function(){
        setInterval(function(){ $('#abc').load('notification.php');}, 1000);
        });
    </script>

<body style="overflow:hidden;">
  <section id="container">
    
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
            
          <?php  
$bio="bio";
$bio.=$username;
$status="SELECT * FROM $username.noti WHERE status='unread'";
$resultstatus=mysqli_query($conn,$status);
            $no_of_noti_rows=mysqli_num_rows($resultstatus);
?>
            
            
            
            
        <?php  if(mysqli_num_rows($resultstatus)>0){ ?>    
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.php#">
              <i class="fa fa-tasks" ></i>
              <span class="badge bg-theme" id="abc" ><?php 
    echo $no_of_noti_rows;
    ?></span>
              </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have <?php echo $no_of_noti_rows; ?> notifications</p>
              </li>
              <li><?php while($rownoti = $resultstatus->fetch_array()){ ?>
                <a href="index.php#">
                  <span class="photo"><img alt="avatar" src="img/ui-zac.jpg" width="40" height="40"></span>
                  <span class="subject">
                  <span class="from"><?php echo $rownoti['id']; ?></span>
                  <span class="time" style="padding-left:75px;"><i>Just now</i></span>
                  </span><br>
                  <span class="message"><h6>
                  <?php echo $rownoti['description'];?></h6>
                  </span>
                  </a><?php } ?>
              </li>
            </ul>
          </li><?php  }
            else {
            ?>
            <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.php#">
              <i class="fa fa-tasks" ></i>
              </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have no pending tasks</p>
              </li>
            </ul>
          </li>
            
            
            <?php } ?>

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
                <p class="green">You have 5 new messages</p>
              </li>
              <li>
                <a href="index.php#">
                  <span class="photo"><img alt="avatar" src="img/ui-zac.jpg"></span>
                  <span class="subject">
                  <span class="from">Zac Snider</span>
                  <span class="time">Just now</span>
                  </span>
                  <span class="message">
                  Hi mate, how is everything?
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.php#">
                  <span class="photo"><img alt="avatar" src="img/ui-divya.jpg"></span>
                  <span class="subject">
                  <span class="from">Divya Manian</span>
                  <span class="time">40 mins.</span>
                  </span>
                  <span class="message">
                  Hi, I need your help with this.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.php#">
                  <span class="photo"><img alt="avatar" src="img/ui-danro.jpg"></span>
                  <span class="subject">
                  <span class="from">Dan Rogers</span>
                  <span class="time">2 hrs.</span>
                  </span>
                  <span class="message">
                  Love your new Dashboard.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.php#">
                  <span class="photo"><img alt="avatar" src="img/ui-sherman.jpg"></span>
                  <span class="subject">
                  <span class="from">Dj Sherman</span>
                  <span class="time">4 hrs.</span>
                  </span>
                  <span class="message">
                  Please, answer asap.
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
                <p class="yellow">You have 7 new notifications</p>
              </li>
              <li>
                <a href="index.php#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Server Overloaded.
                  <span class="small italic">4 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.php#">
                  <span class="label label-warning"><i class="fa fa-bell"></i></span>
                  Memory #2 Not Responding.
                  <span class="small italic">30 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.php#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Disk Space Reached 85%.
                  <span class="small italic">2 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.php#">
                  <span class="label label-success"><i class="fa fa-plus"></i></span>
                  New User Registered.
                  <span class="small italic">3 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.php"> all notifications</a>
              </li>
            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="logout.php">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    
    <!--sidebar start-->
     <?php $a="SELECT image FROM gp WHERE email='$email'";
$result = mysqli_query($conn,$a);
$b="SELECT MAX(id) AS maximum FROM hello1";
$result1=mysqli_query($conn,$b);
$row1=mysqli_fetch_assoc($result1);
$maximum=$row1['maximum'];
     ?> 
    <aside>
      <div id="sidebar" class="nav-collapse" >
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
          <li class="mt">
            <a href="index.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          
         <li>
            <a href="profile.php">
              <i class="fa fa-book"></i>
                <span>profile</span>
              </a>
          </li>
          
        <li class="sub-menu">
            <a class="active" href="">
              <i class=" fa fa-bar-chart-o"></i>
              <span>Code Here!!!</span>
              </a>
          </li>
        
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    
    <!--main content start-->
    <section id="main-content" style="background-color:#202227">
      <section class="wrapper site-min-height">
        <div class="s1">

          </div>
        <!--  <div class="s1">
       <form>
  <fieldset class="account-info" style="border-color:#2f323a;">
    <label class="col-lg-2 control-label" style="color:#c6c7cc; width:inherit;padding: 6px 16px 0px 6px;left:9px;top:9px;">Enter code</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="c-name" class="form-control" style="background-color:transparent; border-color:#4ecdc4; color:#cccfe2;">
                            </div> 
    
  </fieldset>
  <fieldset class="account-action" style="border-color:#2f323a;">
    <input class="btn" type="submit" name="submit" value="Send" style="background:#64c3c2;color:#f2f2f2">
  </fieldset>
</form>
          </div>-->
          
          <style>
          
          *,
*:before,
*:after {
   box-sizing: border-box;
}
form {
  border: 1px solid #2f323a;
  border-radius: 5px;
  font: 14px/1.4 "Helvetica Neue", Helvetica, Arial, sans-serif;
  overflow: hidden;
  width: 240px;
   display: inline-block;
    width: 40%;
}
fieldset {
    background-color: #2f323a !important;
  border: 1px solid #2f323a;
  margin: 0;
  padding: 0;
    height:100px;
    justify-content: center;
    align-items: center;
}
input {
  border-radius: 5px;
  font: 14px/1.4 "Helvetica Neue", Helvetica, Arial, sans-serif;
  margin: 0;
 width: inherit;
    position: relative;
left:12px;
    top:-2px;
              }
.account-info {
  padding: 20px 20px 0 20px;
}
.account-info label {
  color: #395870;
  display: block;
  font-weight: bold;
  margin-bottom: 20px;
}
.account-info input {
  background: #fff;
  border: 1px solid #c6c7cc;
   box-shadow: inset 0 1px 1px rgba(0, 0, 0, .1);
  color: #636466;
  padding: 6px;
  margin-top: 6px;
  width: 100%;
}
.account-action {
  background: transparent;
  border-top: 1px solid #c6c7cc;
  padding: 20px;
}
.account-action .btn {
  background: linear-gradient(#49708f, #293f50);
  border: 0;
  color: #fff;
  cursor: pointer;
  font-weight: bold;
  float: left;
  padding: 8px 16px;
}
.account-action label {
  color: #7c7c80;
  font-size: 12px;
  float: left;
  margin: 10px 0 0 20px;
}
              
              .btn{
                  margin-left: 30%;
              }
              .btn:hover{
                  background: #000 !important;
              }

              .s1{
                  display: inline;
              }
          
          
          
          
          </style>
          
          
          
          
          
          
          
          </div>  
          
        <!-- /container -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
     
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
 <!-- <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <!-- MAP SCRIPT - ALL CONFIGURATION IS PLACED HERE - VIEW OUR DOCUMENTATION FOR FURTHER INFORMATION -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
  <!--<script>
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
  </script>-->
</body>

</html>