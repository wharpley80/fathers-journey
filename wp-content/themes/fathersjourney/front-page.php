<?php get_header(); ?>

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
		          'post_type'     => 'travels',
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

	          	<div class="photo-container">
	          		<a href="<?php the_permalink();?>">

		            <div class="wrapper">
		              <img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title(); ?> graphic">
		            </div>
		            <div class="gradient">
		              <div class="home-gradient-foot">
		                <p><?php the_title(); ?></p>
		              </div>
		            </div>
		            </a>
		          </div>
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
