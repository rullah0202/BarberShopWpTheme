<section id="feature">
        <div class="title-text">
            <p>FEATURES</p>
            <h1>Why Choose Us</h1>
        </div>
        <div class="feature-box">
        <?php
            $features = new WP_Query(array(
            'post_type'   =>'features',
            'post_status' =>'publish',
            'posts_per_page' =>1,
            'order' =>'ASC'
            ));
            if ($features->have_posts()) :
              while($features->have_posts()) : $features->the_post();
          ?>
            <div class="features">
                <h1>Experienced Staff</h1>
                <div class="features-desc">
                    <div class="feature-icon">
                        <i class="fa fa-shield"></i>
                    </div>
                    <div class="feature-text">
                        <p><?php echo get_post_meta( $post->ID, 'Affordable Cost', true) ;?></p>
                    </div>
                </div>
                <h1>Pre Booking Online</h1>
                <div class="features-desc">
                    <div class="feature-icon">
                        <i class="fa fa-check-square-o"></i>
                    </div>
                    <div class="feature-text">
                        <p><?php echo get_post_meta( $post->ID, 'Pre Booking Online', true) ;?></p>
                    </div>
                </div>
                <h1>Affordable Cost</h1>
                <div class="features-desc">
                    <div class="feature-icon">
                        <i class="fa fa-money"></i>
                    </div>
                    <div class="feature-text">
                        <p><?php echo get_post_meta( $post->ID, 'Affordable Cost', true) ;?></p>
                    </div>
                </div>
            </div>
            <div class="features-img">
                <img src="<?php echo the_post_thumbnail_url( );?>">
            </div>
            <?php
            endwhile;
            else  :
            _e('No Post Found');
            endif;
          ?>
        </div>
    </section>
