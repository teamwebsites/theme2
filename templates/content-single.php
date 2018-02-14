<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
      
      <?php get_template_part('templates/entry-meta'); ?>
    
    <div class="entry-content">
        
       <?php 
        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	    the_post_thumbnail( 'large', array('class' => 'post-thumbnail'));  
        } 
        ?>
        
        
      <?php the_content(); ?>
    </div>
    
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
