<?php get_header(); ?>

   <article class="withaside">
    <div class="postings">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //if there are posts, get the post(s) ?>
  <h2><a href="<?php the_permalink(); //link to the post in its orig location ?>"><?php the_title(); //get title of the post ?></a></h2>
  <?php the_content(''); //get content of the post ?>
  <?php endwhile; endif; //end the loop ?>
  </div>
    <h2>Books and Works in Progress</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis dolor interdum, rutrum justo eu, congue orci. Nulla commodo condimentum mauris, ut eleifend libero molestie in.</p>
    <p>Vivamus efficitur ullamcorper elit, at pretium leo tincidunt vitae. Maecenas sit amet lobortis felis. Aliquam id purus vitae odio luctus sagittis. Phasellus ultrices et libero aliquet lacinia. Proin finibus viverra pretium. In molestie enim non accumsan molestie. Ut porttitor dictum sagittis.</p>
    <p>In ac lacus tempor, viverra metus eget, elementum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras faucibus nibh convallis tristique scelerisque. </p>
<small>single.php</small>
  </article>
<?php get_sidebar(); ?>  
<?php get_footer(); ?>