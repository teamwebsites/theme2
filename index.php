<?php
if ( is_user_logged_in() ) {
  get_template_part('easieradminlinks');
} else {
    
}
?> 

<div style="display: block; clear: both; height: 10px;"></div>

<?php if(true === get_theme_mod('homepage_slider')): ?> 

<?php get_template_part('homepageimageslider'); ?>


<?php else: ?>

<div class="news-slider">
    
<div id="featured">

<?php
 $postslist = get_posts('numberposts=1&offset=0&order=DESC&orderby=date');
 foreach ($postslist as $post) :
    setup_postdata($post);
 ?>

<a href="<?php echo get_permalink(); ?>">
    
    <?php if ( has_post_thumbnail() ) : ?>

<div id="featurednewsslider" style="background-position: center; background-image: url('<?php the_post_thumbnail_url(); ?>');">
    
    <?php else:?>
    
<div id="featurednewsslider" style="background-position: center; background-image: url(http://teamwebsites.co.uk/defaultnewspic.JPG);">
    
    <?php endif; ?>
    

<div class="primary-color-banner"></div>    
    

<div class="first-news-article-title">
    
<span><?php the_title(); ?></span> 

<span class="first-news-article-date"> <i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></span>

<span class="first-news-article-content"><?php
$trimexcerpt = get_the_excerpt();
	
			$shortexcerpt = wp_trim_words( $trimexcerpt, $num_words = 20, $more = '… ' ); 
	
				echo '<a class="text-ex" href="' . get_permalink() . '"><p>' . $shortexcerpt . '</p></a>'; 
?></span>

<span class="readmore-sec"><a href="<?php echo get_permalink(); ?>">Read More <i class="fa fa-angle-right" aria-hidden="true"></i> </a></span>
    
</div>
    
</div>

</a>

<?php endforeach; ?>

</div>

</div>

<?php endif; ?>

<div class="homepage-welcome">
    
<div class="welcome-text">
    
<div>
    
<h1>Welcome <?php if ( get_theme_mod( 'club_initials' ) ) : ?> to   <?php echo esc_html(get_theme_mod('club_initials','')); ?>   <?php endif; ?></h1> 

<p><?php if ( get_theme_mod( 'club_welcome' ) ) : ?>     <?php echo esc_html(get_theme_mod('club_welcome','')); ?>  <?php else: ?> Welcome to the official club website of <?php bloginfo( 'name' ); ?>.    <?php endif; ?></p>    
    
</div>
    
</div>

</div>

<div style="clear: both; display: block; height: 20px;"></div>

<div id="homepage-article-row">

<?php
 $postslist = get_posts('numberposts=3&offset=1&order=DESC&orderby=date');
 foreach ($postslist as $post) :
    setup_postdata($post);
 ?>
 
<div class="homepage-article"> 

<div class="hp-article-container">
    
<a href="<?php echo get_permalink(); ?>">
    
<div class="article-image-container">
    
<?php if ( has_post_thumbnail() ) : ?>

<img src="<?php the_post_thumbnail_url(); ?>" alt="ABC">
    
<?php else:?>
    
<img src="http://teamwebsites.co.uk/defaultnewspic.JPG" alt="ABC">
    
<?php endif; ?>    
    
</div>
    
<div class="first-news-article-title">
    
<span><?php the_title(); ?></span> 

<span class="first-news-article-date"> <i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></span>

<span class="first-news-article-content"><?php
$trimexcerpt = get_the_excerpt();
	
			$shortexcerpt = wp_trim_words( $trimexcerpt, $num_words = 20, $more = '… ' ); 
	
				echo '<a class="text-ex" href="' . get_permalink() . '"><p>' . $shortexcerpt . '</p></a>'; 
?></span>

<span class="readmore-sec"><a href="<?php echo get_permalink(); ?>">Read More <i class="fa fa-angle-right" aria-hidden="true"></i> </a></span>
    
</div>
    

</a>    
    
</div>

</div>

<?php endforeach; ?>

</div>


<?php get_template_part( 'bottom', 'homepage' ); ?>