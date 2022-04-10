    

    <Footer id="footer">
        <img src="<?php echo get_theme_mod('contact_background');?>" class="footer-img"/>
        <div class="title-text">
            <p>CONTACT</p>
            <h1><?php echo esc_html(get_theme_mod('Contact_Main_Heading')); ?></h1>
        </div>
        <div class="footer-row">
            <div class="footer-left">
                <h1>Opening Hours</h1>
                <p><i class="fa fa-clock-o"></i><?php echo esc_html(get_theme_mod('Contact_Opening_Hours_One')); ?></p>
                <?php if(get_theme_mod('Contact_Opening_Hours_Two')) : ?>
                  <p><i class="fa fa-clock-o"></i><?php echo esc_html(get_theme_mod('Contact_Opening_Hours_Two')); ?></p>
                <?php endif; ?>
            </div>
            <div class="footer-right">
                <h1>Get In Touch</h1>
                <p><?php echo esc_html(get_theme_mod('Contact_Location')); ?><i class="fa fa-map-marker"></i></p>
                <?php if(get_theme_mod('Contact_Email')) : ?>
                  <p><?php echo esc_html(get_theme_mod('Contact_Email')); ?><i class="fa fa-paper-plane"></i></p>
                <?php endif; ?>
                <?php if(get_theme_mod('Contact_Phone')) : ?>
                <p><?php echo esc_html(get_theme_mod('Contact_Phone')); ?><i class="fa fa-phone"></i></p>
                <?php endif; ?>
             </div>
        </div>
        <div class="social-links">
        <!-- -------Facebook Icon------- -->
        <?php if(get_theme_mod('social_fb_icon')) : ?>
            <a href="<?php echo esc_url(get_theme_mod('social_fb_icon')); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
         <?php endif; ?>
         <!-- Instagram Icon -->
         <?php if(get_theme_mod('social_instagram_icon')) : ?>
            <a href="<?php echo esc_url(get_theme_mod('social_instagram_icon')); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
         <?php endif; ?>
          <!-- -----Twitter Icon---- -->
         <?php if(get_theme_mod('social_twitter_icon')) : ?>
          <a href="<?php echo esc_url(get_theme_mod('social_twitter_icon')); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
         <?php endif; ?>
          <!-- --------Youtube icon------ -->
          <?php if(get_theme_mod('social_youtube_icon')) : ?>
            <a href="<?php echo esc_url(get_theme_mod('social_youtube_icon')); ?>" target="_blank"><i class="fa fa-youtube-play"></i></a>
          <?php endif; ?>

          <!-- -----------Copyright Section---------- -->
            <p id="copyright"><?php echo get_theme_mod('rahmat_copyright'); ?>&nbsp<a href="<?php echo get_theme_mod('rahmat_copyright_weblink'); ?>" target="_blank"><?php echo get_theme_mod('rahmat_copyright_weblink'); ?></a></p>
        </div>
    </Footer>
<?php wp_footer(); ?>
<script>
      const banner = document.querySelector('#banner');
	  let navBar = document.querySelectorAll(".nav-link");
      if(banner.classList.contains('right_menu')) // true
          {
             menuBtn.onclick = function () {
            if (sideNav.style.right == "-250px") {
              sideNav.style.right = "0";
              menu.src = "<?php echo get_template_directory_uri();?>/images/close.png";
            } else {
              sideNav.style.right = "-250px";
              menu.src = "<?php echo get_template_directory_uri();?>/images/menu.png";
            }
            }
			navBar.forEach(function (a) {
        	a.addEventListener("click", function () {
            if(sideNav.style.right=="-250px"){
                sideNav.style.right="0";
                menu.src="<?php echo get_template_directory_uri();?>/images/close.png";
            }
            else{
                sideNav.style.right="-250px";
                menu.src="<?php echo get_template_directory_uri();?>/images/menu.png";
            }
        })
        })
          }
        else if(banner.classList.contains('left_menu')) // true
        {
             menuBtn.onclick = function () {
            if (sideNav.style.left == "-250px") {
              sideNav.style.left = "0";
              menu.src = "<?php echo get_template_directory_uri();?>/images/close.png";
            } else {
              sideNav.style.left = "-250px";
              menu.src = "<?php echo get_template_directory_uri();?>/images/menu.png";
            }
            }
		navBar.forEach(function (a) {
        a.addEventListener("click", function () {
            if (sideNav.style.left == "-250px") {
              sideNav.style.left = "0";
              menu.src = "<?php echo get_template_directory_uri();?>/images/close.png";
            } else {
              sideNav.style.left = "-250px";
              menu.src = "<?php echo get_template_directory_uri();?>/images/menu.png";
            }
        })
        })
          }
    </script>
</body>
</html>