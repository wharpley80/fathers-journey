<?php get_header(); ?>

  <div class="container">
    <div class="page-header">
      <h3><?php wp_title(''); ?></h3>
      <hr>
    </div>
    <div class="row">
      <div class="medium-9 columns">
        
        <div class="primary">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 

          <div>
            
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p>
            <span class="wpt-avatar small">
              <?php echo get_avatar( get_the_author_meta('ID'), 24 ); ?>
            </span>
              by <?php the_author_posts_link(); ?>
              on <?php echo the_time('l F jS, Y'); ?>
              in <?php the_category(', '); ?>
              <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
            </p>

            <?php
              $thumbnail_id = get_post_thumbnail_id();
              $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true);
            ?>

            <?php if ( !empty( $thumbnail_id ) ) : ?>

            <p><a href="<?php the_permalink();?>"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title(); ?> graphic"></a>
            </p>

            <?php the_excerpt(); ?>

            <?php else : ?>

              <?php the_excerpt(); ?>

            <?php endif; ?>

            <hr>
          </div>          
    
        <?php endwhile; else : ?>
          
          <p><?php _e( 'Sorry, no page found.', 'fathersjourney' ); ?></p>
        
        <?php endif; ?>  

      </div>

      </div>
     
      <?php get_sidebar('search'); ?>
     
    </div>
  </div>

<?php get_footer(); ?>