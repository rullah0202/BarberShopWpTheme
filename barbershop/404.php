<!-- This template for displaying -->

<!-- ---------Header Part--------- -->
<?php
get_header('inner');
?>

<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 error_page">
                <p>404 error - Page Not Found</p>
                <h1>Oops! Looks Like Something was wrong</h1>
                <div class="error_search">
                    <?php get_search_form(); ?>
                </div>
                <a href="<?php echo home_url();?>" class="homepage">Home Page</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>