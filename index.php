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
  <div class="postings">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //if there are posts, get the post(s) ?>
  <h2><a href="<?php the_permalink(); //link to the post in its orig location ?>"><?php the_title(); //get title of the post ?></a></h2>
  <?php the_content(''); //get content of the post ?>
  <?php endwhile; endif; //end the loop ?>
  </div>
  
  <article class="withaside">
    <h2>Books and Works in Progress</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis dolor interdum, rutrum justo eu, congue orci. Nulla commodo condimentum mauris, ut eleifend libero molestie in.</p>
    <p>Vivamus efficitur ullamcorper elit, at pretium leo tincidunt vitae. Maecenas sit amet lobortis felis. Aliquam id purus vitae odio luctus sagittis. Phasellus ultrices et libero aliquet lacinia. Proin finibus viverra pretium. In molestie enim non accumsan molestie. Ut porttitor dictum sagittis.</p>
    <p>In ac lacus tempor, viverra metus eget, elementum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras faucibus nibh convallis tristique scelerisque. </p>
  </article>

  <aside>
    <p id="social">
      <a href="#"><i class="fa fa-facebook-square fa-4x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="#"><i class="fa fa-pinterest-square fa-4x"></i></a>
    </p>
    
    <p>Want to know when my next book will be out? Sign up for my newsletter!</p>
    <form>
    <label>Email address:</label>
    <input type="text" name="email">
    <br><br>
    <input type="submit" value="Submit">
    </form>
    
    <!--Begin Secondary navigation-->
    <div id="sub-navigation" class="widget">
    <?php if (is_page()) : // If this is a page ?>
    <h2 class="sub-navigation-title"><?php echo get_the_title($post->post_parent); // Get gateway page title ?></h2>
    <ul class="sub-navigation-items"><?php if ($post->post_parent) { //Check for post parent
    wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => __(''))); // List subpages without a title
    } 
	else { // (for pages that don't have a parent)
    wp_list_pages(array('child_of' => $post->ID, 'title_li' => __(''))); // List subpages with no title
    } ?></ul>
    <?php endif; ?>
    </div>
    <!--End Secondary navigation-->
    
    <!--Begin Category Listing-->
    <?php if (!(is_page())) : // If this is not a page ?>
    <h2 class="sub-navigation-title">Topics</h2>
	<ul class="sub-navigation-items"><?php wp_list_categories(array('title_li' => __(''))); // List categories with no title ?></ul>
	<?php endif; ?>
    <!--End Category Listing-->
    
  </aside>
  
</section>
<footer>
  <p><a href="http://jigsaw.w3.org/css-validator/check/referer">Valid CSS</a> and <a href="http://validator.w3.org/check/referer">Valid HTML5</a></p>
  <p><a href="#">Home</a> &nbsp; &#124; &nbsp; <a href="#">About</a> &nbsp; &#124; &nbsp; <a href="#">Bookshelf</a> &nbsp; &#124; &nbsp; <a href="#">News</a> &nbsp; &#124; &nbsp; <a href="#">Contact</a></p>
  <p>Copyright Mary Delahanty 6/2015</p>
</footer>


</div>
<!--Start WP Footer-->
<?php wp_footer(); ?>
<!--End WP Footer-->

</body>
</html>