<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>eBusiness Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="css/responsive.css" rel="stylesheet">

</head>

<?php

//$nav_menu = !empty(end(explode("/",$_SERVER['REQUEST_URI']))) ? end(explode("/",$_SERVER['REQUEST_URI'])) : "index.php";
$nav_menu = count(explode("/",$_SERVER['REQUEST_URI'])) > 0 ? explode("/",$_SERVER['REQUEST_URI']) : array();

if(count($nav_menu) > 0)
{
  $count = 0;
  foreach($nav_menu as $_keys => $_values){
    ++ $count;
  }
  $r = explode(".",$nav_menu[$count - 1]);
  $nav_menu = isset($r[1]) && ($r[1] == "php") ? $nav_menu[$count -1] : "index.php" ; 
}
// echo "nav menu -> " . $nav_menu;
function nav_active($nav_name){
  
  $nav_page = array(0=>"index.php",1=>"about.php",2=>"services.php",3=>"learnswiftlet.php",4=>"career.php",5=>"news.php",6=>"blog-details.php",7=>"news-details.php");
  if( in_array( $nav_name ,$nav_page ) )
  {
      return true;
  }
  return false;
}


?>

<body data-spy="scroll"   data-target="#navbar-example">

<div id="preloader"></div>

<header>
  <!-- header-area start -->
  <div id="sticker" class="header-area">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12">

          <!-- Navigation -->
          <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                                      <span class="sr-only">Toggle navigation</span>
                                      <span class="icon-bar"></span>
                                      <span class="icon-bar"></span>
                                      <span class="icon-bar"></span>
                                  </button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="index.php">
               <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <img src="img/logo.png" alt="" title=""> -->
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
              <ul class="nav navbar-nav navbar-right">
              <li class="<?php echo nav_active($nav_menu) == true && $nav_menu == "index.php" ? "active" : "";?>">
                  <a class="" href="index.php">Home</a>
                </li>
              <li class="<?php echo nav_active($nav_menu) == true && $nav_menu == "about.php" ? "active" : "";?>">
                  <a class="" href="about.php">About Swiftlet</a>
                </li>
                <li class="<?php echo nav_active($nav_menu) == true  && $nav_menu == "https://www.tereb.in.th/" ? "active" : "";?>">
                  <a class="" href="https://www.tereb.in.th/">Terebinth</a>
                </li>
                <li class="<?php echo nav_active($nav_menu) == true  && $nav_menu == "services.php" ? "active" : "";?>">
                  <a class="" href="services.php">Services</a>
                </li>
                <li class="<?php echo nav_active($nav_menu) == true  && ($nav_menu == "learnswiftlet.php" || $nav_menu == "blog-details.php")? "active" : "";?>">
                  <a class="" href="learnswiftlet.php">Learn with Swiftlet
</a>
                </li>
          
                <li class="<?php echo nav_active($nav_menu) == true  && $nav_menu == "career.php" ? "active" : "";?>">
                  <a class="" href="career.php">Career</a>
                </li>
                <li class="<?php echo nav_active($nav_menu) == true  && ($nav_menu == "news.php"  || $nav_menu == "news-details.php") ? "active" : "";?>">
                  <a class="" href="news.php">News</a>
                </li>
                
              </ul>
            </div>
            <!-- navbar-collapse -->
          </nav>
          <!-- END: Navigation -->
        </div>
      </div>
    </div>
  </div>
  <!-- header-area end -->
</header>
<!-- header end -->
