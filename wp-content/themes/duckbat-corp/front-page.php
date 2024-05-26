<?php
get_header();
?>

<section class="hero text-center">
    <div class="hero-text">
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                the_content();
            endwhile;
        else :
            _e('Sorry, no posts matched your criteria.', 'esimerkki');
        endif;
        ?>
    </div>

    <?php the_custom_header_markup(); ?>
    <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/map.svg" alt="hero"> -->
</section>

<main class="text-center">
    <section class="products">
        <h2>Featured Products</h2>
        <div class="row">
            <?php
            $args = ['tag' => 'keyboard', 'posts_per_page' => 2];
            $products = new WP_Query($args);
            if ($products->have_posts()) :
                while ($products->have_posts()) : $products->the_post();
                    ?>
                    <div class="col-md-6">
                        <article class="product">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="product-thumbnail">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium', ['class' => 'img-fluid']); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <div class="product-excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                        </article>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p class="col">No featured products found.</p>';
            endif;
            ?>
        </div>
    </section>


    <hr>

    <section class="all-posts">
        <h2>All Posts</h2>
        <?php
        $all_posts_args = ['post_type' => 'post', 'posts_per_page' => -1];
        $all_posts_query = new WP_Query($all_posts_args);

        if ($all_posts_query->have_posts()) :
            while ($all_posts_query->have_posts()) : $all_posts_query->the_post();
                ?>
                <article class="post-item">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumbnail">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium'); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div class="post-meta">
                        <span><?php the_time('F j, Y'); ?></span> | <span><?php the_author(); ?></span>
                    </div>
                    <div class="post-excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
                <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>No posts found.</p>';
        endif;
        ?>
    </section>
</main>

<?php
get_footer();
?>
