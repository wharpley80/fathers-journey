<?php get_header(); ?>

  <div class="container">
    <div class="small-12 columns">
      <div class="page-header">
        <h2><?php wp_title(''); ?></h2>
        <hr>
      </div>
      <div class="row">
        <div class="small-12 medium-9 columns">
          <div class="reading-col">
            
  		    	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

              <p>
              <span class="wpt-avatar small">
                <?php echo get_avatar( get_the_author_meta('ID'), 24 ); ?>
              </span>
                by <?php the_author_posts_link(); ?>
                on <?php echo the_time('l F jS, Y'); ?>
                in <?php the_category(', '); ?>
                <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
              </p>

              <?php if ( get_the_post_thumbnail() ) : ?>
              <div class="img-container">
                <?php the_post_thumbnail('large'); ?>
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
      
        <?php get_sidebar(); ?>

  		</div>
  	</div>
  </div>

<?php get_footer(); ?>