<?php get_header(); ?>

<div class="container">
    <?php
    // Start the Loop.
    while (have_posts()) : the_post();

        the_title();
        the_content();


    endwhile;
    ?>
</div><!-- #primary -->

<?php
get_footer();
