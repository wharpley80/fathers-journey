<?php get_header(); ?>
<div class="container">
  <div class="small-12 columns">
    <div class="page-header">
      <div class="row">
        <div class="small-9 columns">
          <a href="<?php the_field('link'); ?>"><h2><?php wp_title(''); ?></h2></a>
        </div>
        <div class="small-3 columns prev-next">
          <?php next_post_link('%link', '<span class="glyphicon glyphicon-circle-arrow-left"></span>'); ?>
          <!-- Uses the id # of the Ballparks Page -->  
          <a href="<?php bloginfo('url'); ?>/?p=58"><span class="glyphicon glyphicon-th"></span></a>
          <?php previous_post_link('%link', '<span class="glyphicon glyphicon-circle-arrow-right"></span>'); ?>
        </div>
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