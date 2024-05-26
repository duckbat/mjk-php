<?php
get_header();
?>
<hr class="container">
<main class="container p-2" style="min-height: 50vh;">
    <section class="products">
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                ?>
                <div class="single text-center">
                    <?php
                    // Display the post thumbnail if it exists
                    if (has_post_thumbnail()) {
                        ?>
                        <div class="post-thumbnail">
                            <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'large')); ?>" alt="<?php the_title_attribute(); ?>">
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    get_template_part('template-parts/content', 'article');
                    ?>
                </div>
                <?php
            endwhile;
        else :
            _e('Sorry, no posts matched your criteria.', 'esimerkki');
        endif;
        ?>
    </section>
</main>

<?php
get_footer();
?>
