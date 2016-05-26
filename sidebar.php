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