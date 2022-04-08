<section id="testimonial">
        <div class="title-text">
            <p>TESTIMONIAL</p>
            <h1>What Client Says</h1>
        </div>
        <div class="testimonial-row">
          <?php 
            $testimonial = new WP_Query(array(
              'post_type'   =>'testimonial',
              'post_status' =>'publish',
              'posts_per_page' =>3,
              'order' =>'ASC'
            ));
            if ($testimonial->have_posts()) :
              while($testimonial->have_posts()) : $testimonial->the_post();
          ?>
            <div class="testimonial-col">
                <div class="user">
                <?php echo the_post_thumbnail( 'full', array('class' =>'testimonial_post_thumbnail')); ?>
                    <div class="user-info">
                        <h4><?php the_title(); ?><i class="fa fa-twitter"></i></h4>
                        <small>
                          <?php echo get_post_meta( $post->ID, 'twitter-account', true) ;?>
                        </small>
                    </div>
                </div>
                <p>
                    <?php the_excerpt() ;?>
                </p>
            </div>
            <?php
              endwhile;
              else  :
              _e('No Post Found');
              endif;
          ?>
        </div>
    </section>