<?php get_header(); ?>

<article class="withaside">
  <div class="widgets">
    <section class="widget-item">
      <h2>Welcome!</h2>
      <!--first loop, for homepage content-->
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //if there are posts, get the post(s) ?>
      <h2><a href="<?php the_permalink(); //link to the post in its orig location ?>"><?php the_title(); //get title of the post ?></a></h2>
      <?php the_content(''); //get content of the post ?>
      <?php endwhile; endif; //end the loop ?>
      <!--end first loop-->
    </section>
    <section class="widget-item">
      <h2>Latest News</h2>
      <!--second loop, for blog excerpts-->
      <?php rewind_posts(); // stop first loop ?>
      <?php query_posts('showposts=4'); // specify # of posts to be displayed = 4 ?>
      <?php while (have_posts()) : the_post(); // start second loop ?>
      <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
      <?php endwhile; // end loop two ?>
    </section>
  </div>


  <h2>Books and Works in Progress</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis dolor interdum, rutrum justo eu, congue orci. Nulla commodo condimentum mauris, ut eleifend libero molestie in.</p>
  <p>Vivamus efficitur ullamcorper elit, at pretium leo tincidunt vitae. Maecenas sit amet lobortis felis. Aliquam id purus vitae odio luctus sagittis. Phasellus ultrices et libero aliquet lacinia. Proin finibus viverra pretium. In molestie enim non accumsan molestie. Ut porttitor dictum sagittis.</p>
  <p>In ac lacus tempor, viverra metus eget, elementum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras faucibus nibh convallis tristique scelerisque. </p>
  <small>front-page.php</small>
</article>
<?php get_sidebar(); ?>  
<?php get_footer(); ?>