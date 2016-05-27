<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/mnt_favicon.ico" type="image/x-icon">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?> | Web Developer, father, traveler, photographer, and blogger. Portfolio, php, laravel, wordpress development, and javascript.
    </title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  
		<?php if ( has_post_thumbnail() ) : ?>
	 		<?php $image = wp_get_attachment_image_src(the_post_thumbnail()); ?>
	  	<div id="my-div" style="background-image: url('<?php echo $image; ?>');">
	  <?php else : ?>
	  	<?php $image = get_bloginfo( 'stylesheet_directory') . '/img/snake_river.jpg'; ?>
	  	<div id="feature" style="background-image: url('<?php echo $image; ?>'); ">
		<?php endif; ?>

		</div>
		<div class="overlay">
			<div class="container">
				<div class="title-bar" data-responsive-toggle="collapse-menu" data-hide-for="medium">
          <button class="menu-icon" type="button" data-toggle></button>
          <div class="title-bar-title">Menu</div>
        </div>
				<div class="home-header">
					<h1 class="current"><a  href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
				  <nav class="main-nav">
				    
				    <?php 

				      $defaults = array(
				        'container'      => false,
				        'theme_location' => 'primary-menu',
				        'menu_class'     => 'no-bullet',
				        'menu_id'        => 'collapse-menu'
				      );

				      wp_nav_menu( $defaults );

				    ?>

				  </nav>  
				</div>
				<div class="intro">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			      <p><?php the_content(); ?></p> 
				  <?php endwhile; else : ?>
						<p><?php _e( 'Sorry, page found.', 'fathersjourney'  ); ?></p>
				  <?php endif; ?> 
				</div>
				<div class="row">
					<div class="medium-9 columns" id="featured-col">
						<div class="row">

						<?php

			        $args = array(
			          'post_type'     => 'post',
			          'category_name' => 'featured'
			        );

			        $the_query = new WP_Query($args);

			      ?>

		        <?php if (  have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>  

		        	<div class="small-12 medium-4 columns">

		        		<?php
			            $thumbnail_id = get_post_thumbnail_id();
			            $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true);
		          	?>

			          <p><a href="<?php the_permalink();?>"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title(); ?> graphic"></a>
			          </p>
			          <h4><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
		        	</div>

			        <?php $featured_count = $the_query->current_post + 1 ; ?>
			        
				        <?php if ( $featured_count % 3 == 0 ): ?>

			          </div><div class="row">

		        	<?php endif; ?>

		        <?php endwhile; endif; ?>
		        
		      	</div>
		      </div>

				<?php get_sidebar(); ?>

				</div>
		
<?php get_footer(); ?>
