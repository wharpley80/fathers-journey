<?php
/*
  Template Name: Portfolio Template
*/
?>
<?php get_header(); ?>

  <div class="container" id="port-cont">
    <div class="row">
      <div class="medium-12 columns portfolio-page" >
        <div class="title-cont">
          <h1><?php the_title(); ?><i class="fi-social-treehouse" id="treehouse-head"></i></h1>
        </div>
        <hr>
        <div class="small-12 medium-9 columns" >
          <a href="http://localhost/fathers-journey/portfolio/projects/"><h3>Projects</h3></a>

          <?php

          $args = array(
            'post_type' => 'projects'
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
        </div>

        <?php get_sidebar('portfolio'); ?>

      </div>

      <div class="row">
        <div class="small-12 columns">
          <a class="show-badges">Show Badges</a>
          <h3 class="tree-title"><i class="fi-social-treehouse" id="treehouse-foot"></i>Treehouse Badges</h3>
          <?php dynamic_sidebar('port-bottom'); ?>
          
          <a class="show-badges">Show Badges</a>
        </div>
      </div>

    </div>
  </div>

<?php get_footer(); ?>