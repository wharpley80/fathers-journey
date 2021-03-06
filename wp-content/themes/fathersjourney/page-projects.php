<?php
/*
  Template Name: Projects Grid Template
*/
?>
<?php get_header(); ?>

  <div class="container">
    <div class="row">
      <div class="medium-12 columns">
        
        <?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <div class="page-header"> 
            <h1><?php the_title(); ?></h1>
            <hr>
          </div>

          <?php the_content(); ?>

        <?php endwhile; else: ?>

        <div class="page-header"> 
          <h1>Oh no!</h1>
        </div>
        <p>No content is appearing for this page!</p>

        <?php endif; ?>

      </div>   
    </div>
    <div class="row">

      <?php

        $args = array(
          'post_type' => 'projects'
        );
        $the_query = new WP_Query($args);

      ?>

      <?php if (  have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

        <div class="small-12 medium-6 columns">

          <?php
            $thumbnail_id = get_post_thumbnail_id();
            $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true);
          ?>

          <p><a href="<?php the_permalink();?>"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title(); ?> graphic"></a>
          </p>
          <h4><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>

        </div>

        <?php $projects_count = $the_query->current_post + 1 ; ?>
        
        <?php if ( $projects_count % 2 == 0 ): ?>

          </div><div class="row">

        <?php endif; ?>

      <?php endwhile; endif; ?>

    </div>
  </div>

<?php get_footer(); ?>