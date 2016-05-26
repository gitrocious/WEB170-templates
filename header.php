<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></title>
<meta name="robots" content="noindex,nofollow" />
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400' rel='stylesheet' type='text/css'>
<link href="http://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet" type="text/css">

<!--Begin Styles-->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<!--End Styles-->

<!--Begin Scripts-->
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="script.js"></script>
<!--End Scripts-->

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2" />
<script src='https://www.google.com/recaptcha/api.js'></script>

<!--Begin WP head-->
<?php wp_head(); ?>
<!--End WP head-->
</head>

<body <?php body_class(); ?>>
<div id="wrapper">
<header>

  <!--Begin Main Navigation-->
  <div class="nav-container">
    <!--nav id="cssmenu">
      <ul>
        <li><a href="index.php"><span>Home</span></a></li>
        <li><a href="about.php"><span>About Me</span></a></li>
        <li class="active"><a href="bookshelf.php"><span>Bookshelf</span></a></li>
        <li><a href="news.php"><span>News</span></a></li>
        <li><a href="contact.php"><span>Contact</span></a></li>
      </ul>
    </nav-->

  <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'nav','container_id' => 'cssmenu', ) ); ?>
    </div>
  <!--End Main Navigation-->

<div id="ribbonh1"></div>
<div id="ribbonh2"></div>
<div id="headercontent">
<h1 class="name"><a href="index.php">Celeste Deveney</a></h1>
<h2 class="tagline">Old&nbsp;stories. New&nbsp;twists. Happy&nbsp;endings.</h2>
<div id="threeline">
<h2 class="lineone">Old stories</h2>
<h2 class="linetwo">New twists</h2>
<h2 class="linethree">Happy endings</h2>

</div>
</div>
<div class="imgangle">
<img src="<?php bloginfo('template_directory'); ?>/images/happycouple2.jpg" width="250" height="337" alt="Picture of happy couple embracing"/>
</div>

</header>

<section class="main">
