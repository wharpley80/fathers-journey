<?php get_header(); ?>
<div class="container">
  <div class="small-12 columns">
    <div class="page-header">
      <div class="small-9 columns" id="header-col">
        <a href="<?php the_field('link'); ?>"><h2><?php wp_title(''); ?></h2></a>
      </div>
      <div class="small-3 columns prev-next" id="header-col">
        <?php next_post_link('%link', '<i class="fi-arrow-left"></i>'); ?> 
        <a href="<?php bloginfo('url'); ?>/?p=69"><i class="fi-thumbnails"></i></a>
        <?php previous_post_link('%link', '<i class="fi-arrow-right"></i>'); ?>
      </div>
      <hr>
    </div>
    <div class="row">
      <div class="small-12 medium-9 columns ">
        <div class="reading-col">
          
		    	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

              <?php if ( get_the_post_thumbnail() ) : ?>
              <div class="img-container">
                <a href="<?php the_field('link'); ?>"><?php the_post_thumbnail('large'); ?></a>
              </div>
              <?php endif; ?>

              <?php the_content(); ?>

              <hr>

              <?php comments_template(); ?>

			    <?php endwhile; else : ?>

						<p><?php _e( 'Sorry, no posts found.', 'fathersjourney' ); ?></p>

					<?php endif; ?>   

        </div>
      </div>

      <?php get_sidebar('projects'); ?>

		</div>
	</div>
</div>

<?php get_footer(); ?>