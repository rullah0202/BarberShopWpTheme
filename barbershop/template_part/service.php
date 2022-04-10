 <section id="service">
        <div class="title-text">
            <p>SERVICES</p>
            <h1>We Provide Better</h1>
        </div>
        <div class="service-box">

          <?php
            $service = new WP_Query(array(
            'post_type'   =>'service',
            'post_status' =>'publish',
            'posts_per_page' =>4,
            'order' =>'ASC'
            ));
            if ($service->have_posts()) :
              while($service->have_posts()) : $service->the_post();
          ?>
            <div class="single-service">
            <img src="<?php echo the_post_thumbnail_url( );?>">
                
                <div class="overlay"></div>
                <div class="service-desc">
                    <h3><?php the_title(); ?></h3>
                    <hr>
                    <p><?php echo wp_trim_words(get_the_content(),24,'.......') ;?></p>
                </div>
            </div>
          <?php
            endwhile;
            else  :
            _e('No Post Found');
            endif;
          ?>
        </div>
    </section>