<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Profile Taufiqurrohman</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="assets/css/style.css">
<link rel="stylesheet" type="text/css"  href="assets/css/prettyPhoto.css">
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<!-- Navigation -->
<div id="nav">
  <nav class="navbar navbar-custom navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse"> <i class="fa fa-bars"></i> </button>
        <a class="navbar-brand page-scroll" href="#page-top"><?php echo $nama;?></a> </div>
      
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
        <ul class="nav navbar-nav">
          <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
          <li class="hidden"> <a href="#page-top"></a> </li>
          <li> <a class="page-scroll" href="#about">About</a> </li>
          <li> <a class="page-scroll" href="#portfolio">Portfolio</a> </li>
          <li> <a class="page-scroll" href="#contact">Contact</a> </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="section-title text-center center">
      <h2>Tentang Saya</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-12 text-center"><img src="assets/img/about.jpg" class="img-responsive"></div>
      <div class="col-md-8 col-md-offset-2">
        <div class="about-text">
            <?php echo $biodata?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Section -->
<div id="portfolio">
  <div class="container">
    <div class="section-title text-center center">
      <h2>Hobbi Saya</h2>
      <hr>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
            <li>All Game</li>
          </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="assets/img/game/gbr1.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Mobile Legend</h4>
                <small>Moba Analog</small> </div>
              <img src="assets/img/game/gbr1.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="assets/img/game/gbr2.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Dragon Nest</h4>
                <small>DN ID</small> </div>
              <img src="assets/img/game/gbr2.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="assets/img/game/gbr3.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Mine Craft</h4>
                <small>Creative Game</small> </div>
              <img src="assets/img/game/gbr3.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="assets/img/game/gbr4.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Closers Online</h4>
                <small>Combo Game</small> </div>
              <img src="assets/img/game/gbr4.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contact Section -->
<div id="contact" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Contact</h2>
      <hr>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <div class="col-md-4"> <i class="fa fa-map-marker fa-2x"></i>
        <p><?php echo $kontak['alamat'];?><br>
      </div>
      <div class="col-md-4"> <i class="fa fa-envelope-o fa-2x"></i>
        <p><?php echo $kontak['email'];?>/p>
      </div>
      <div class="col-md-4"> <i class="fa fa-phone fa-2x"></i>
        <p><?php echo $kontak['telp'];?></p>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
<div id="footer">
  <div class="container text-center">
    <div class="fnav">
      <p>Copyright &copy; 2017 Designed by <a href="http://www.templatewire.com" rel="nofollow">TemplateWire</a></p>
    </div>
  </div>
</div>
<script type="text/javascript" src="assets/js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="assets/js/bootstrap.js"></script> 
</body>
</html>