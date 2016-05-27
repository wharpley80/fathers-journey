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
                <a href="<?php the_field('link'); ?>">
                  <img class="orbit-image" src="<?php echo $thumbnail_url[0]; ?>" alt="<?php echo $thumbnail_meta; ?>">
                </a>
                <figcaption class="orbit-caption"><?php the_title(); ?></figcaption>
              </li>

              <?php endwhile; endif; ?>

            </ul>

            <?php rewind_posts(); ?>
            
            <nav class="orbit-bullets">
              <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
              <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
              <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
              <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
            </nav>
          
          </div>