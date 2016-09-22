<?php get_header(); ?>
    
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php if ( get_the_post_thumbnail() ) : ?>
    <div class="img-container">
      <a href="<?php the_field('link'); ?>"><?php the_post_thumbnail('large'); ?></a>
    </div>
    <?php endif; ?>

    <div class="feat-overlay">
      <div class="row feat">
        <div class="small-12 columns" id="img-text">
          <a href="<?php bloginfo('url'); ?>/?p=302"><h2>Travels</h2></a>
          <h3><?php the_title(); ?></h3>
          <p>
            Published by <?php the_author_posts_link(); ?>
            on <?php echo the_time('l F jS, Y'); ?>
            in <?php the_category(', '); ?>
            <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
          </p>
        </div>
      </div>
    </div>

    <div class="post-content">

      <?php the_content(); ?>

      <div class="photo-container">
        <div class="wrapper">
          <img class="view-img" id="imageresourced1" src="<?php the_field( 'photo1' ); ?>">
        </div>
        <div class="gradient">
          <div class="gradient-foot" id="img-text">
            <p>
              <span class="wpt-avatar small">
                <?php echo get_avatar( get_the_author_meta('ID'), 24 ); ?>
              </span>
              <?php the_field( 'title1' ); ?>
              by <?php the_author_posts_link(); ?>
            </p>
          </div>
        </div>
      </div>

      <div class="photo-container">
        <div class="wrapper">
          <img class="view-img" id="imageresourced2" src="<?php the_field( 'photo2' ); ?>">
        </div>
        <div class="gradient">
          <div class="gradient-foot" id="img-text">
            <p>
              <span class="wpt-avatar small">
                <?php echo get_avatar( get_the_author_meta('ID'), 24 ); ?>
              </span>
              <?php the_field( 'title2' ); ?>
              by <?php the_author_posts_link(); ?>
            </p>
          </div>
        </div>               
      </div>

      <div class="photo-container">
        <div class="wrapper">
          <img class="view-img" id="imageresourced3" src="<?php the_field( 'photo3' ); ?>">
        </div>
        <div class="gradient">
          <div class="gradient-foot" id="img-text">
            <p>
              <span class="wpt-avatar small">
                <?php echo get_avatar( get_the_author_meta('ID'), 24 ); ?>
              </span>
              <?php the_field( 'title3' ); ?>
              by <?php the_author_posts_link(); ?>
            </p>
          </div>
        </div>               
      </div>

      <div class="photo-container">
        <div class="wrapper">
          <img class="view-img" id="imageresourced4" src="<?php the_field( 'photo4' ); ?>">
        </div>
        <div class="gradient">
          <div class="gradient-foot" id="img-text">
            <p>
              <span class="wpt-avatar small">
                <?php echo get_avatar( get_the_author_meta('ID'), 24 ); ?>
              </span>
              <?php the_field( 'title4' ); ?>
              by <?php the_author_posts_link(); ?>
            </p>
          </div>
        </div>               
      </div>

      <div class="photo-container">
        <div class="wrapper">
          <img class="view-img" id="imageresourced5" src="<?php the_field( 'photo5' ); ?>">
        </div>
        <div class="gradient">
          <div class="gradient-foot" id="img-text">
            <p>
              <span class="wpt-avatar small">
                <?php echo get_avatar( get_the_author_meta('ID'), 24 ); ?>
              </span>
              <?php the_field( 'title5' ); ?>
              by <?php the_author_posts_link(); ?>
            </p>
          </div>
        </div>               
      </div>

      <div class="photo-container">
        <div class="wrapper">
          <img class="view-img" id="imageresourced6" src="<?php the_field( 'photo6' ); ?>">
        </div>
        <div class="gradient">
          <div class="gradient-foot" id="img-text">
            <p>
              <span class="wpt-avatar small">
                <?php echo get_avatar( get_the_author_meta('ID'), 24 ); ?>
              </span>
              <?php the_field( 'title6' ); ?>
              by <?php the_author_posts_link(); ?>
            </p>
          </div>
        </div>               
      </div>

      <?php comments_template(); ?>
           
    </div>
  
    <div class="small reveal" id="imagemodal" data-reveal data-animation-in="spin-in" data-animation-out="spin-out">
      <h2><?php the_title(); ?></h2> 
      <img src="" id="imagepreview" class="img-responsive">
      <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

  <?php endwhile; else : ?>

    <p><?php _e( 'Sorry, no posts found.', 'fathersjourney' ); ?></p>

  <?php endif; ?>   

<?php get_footer(); ?>