<?php
/*
Template Name: Products
*/
get_header();
?>

<main class="container d-flex justify-content-center align-items-center" style="min-height: 50vh;">
    <div class="text-center">
        <?php
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
        ?>
    </div>
</main>

<?php get_footer(); ?>