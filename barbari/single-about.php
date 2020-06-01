<?php /* template name:single about */ ?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="container">
    <div class="row">
        <div class="col-12 content-about">
            <h3><?php the_title(); ?></h3>
            <?php the_content($more_link_text = null, $strip_teaser = true); ?>
        </div>    
    </div>   
</div>   
<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 pic-about">
            <?php the_post_thumbnail('full'); ?>
        </div>   
        <div class="col-3"></div> 
    </div>   
</div>  
<?php endwhile; endif; ?>
<?php get_footer(); ?>