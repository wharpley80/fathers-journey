<?php
/*
  Template Name: Travels Template
*/
?>
<?php get_header(); ?>

  <div class="container">
    <div class="row">
      <div class="medium-12 columns portfolio-page" >
        <h1><?php the_title(); ?></h1>
        <hr>
        <div class="small-12 medium-9 columns" >
          <div class="primary">

            <?php

            $args = array(
              'post_type' => 'travels',
              'category_name' => 'display'
            );

            $the_query = new WP_Query($args);

            ?>

            <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
              <ul class="orbit-container">
                <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
                <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
                
                <?php if (  have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <?php
                  $thumbnail_id = get_post_thumbnail_id();
                  $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true);
                  $thumbnail_meta = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                ?>

                <li class="is-active orbit-slide">
                  <a href="<?php the_permalink(); ?>">
                    <img class="orbit-image" src="<?php echo $thumbnail_url[0]; ?>" alt="<?php echo $thumbnail_meta; ?>">
                  </a>
                  <figcaption class="orbit-caption"><?php the_title(); ?></figcaption>
                </li>

                <?php endwhile; endif; ?>

              </ul>

              <?php rewind_posts(); ?>
              
              <nav class="orbit-bullets">

                <?php if (  have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                  <button class="<?php if ($the_query->current_post == 0) : ?>is-active<?php endif; ?>" data-slide="<?php echo $the_query->current_post; ?>"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span>
                  </button>

                <?php endwhile; endif; ?>

              </nav>
            </div>

            <?php

            $args = array(
              'post_type'     => 'travels'
            );

            $the_query = new WP_Query($args);

          ?>

          <h2>Technical</h2>
          <hr>

          <?php if (  have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>  

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

              <?php the_excerpt(); ?>

              <hr>
            </div>          
      
          <?php endwhile; else : ?>
            
            <p><?php _e( 'Sorry, no page found.', 'fathersjourney' ); ?></p>
          
          <?php endif; ?> 


         </div>

        </div>

        <?php get_sidebar('travels'); ?>

      </div>

    </div>
  </div>

<?php get_footer(); ?>