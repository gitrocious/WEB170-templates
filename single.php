<?php get_header(); ?>

<article class="withaside">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //if there are posts, get the post(s) ?>
  <div id="post-<?php the_ID(); ?>" class="post">
    <h2><a href="<?php the_permalink(); //link to the post in its orig location ?>"><?php the_title(); //get title of the post ?></a></h2>
    <small>Posted on <?php the_time('F j, Y'); //get date of post ?> by <?php the_author(); //get author of post ?> in <?php the_category(', '); //get category ?></small>
    <?php the_post_thumbnail('large'); //get featured image ?>
    <?php the_content(''); //get content of the post ?>
    <?php endwhile; endif; //end the loop ?>
    <small>single.php</small>
  </div>
</article>
<?php get_sidebar(); ?>  
<?php get_footer(); ?>