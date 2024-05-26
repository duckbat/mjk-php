<?php
global $wp_query;
get_header();
?>

<main>
    <div class="container" style="min-height: 50vh">
        <section class="products text-center"> <!-- Add text-center class -->
            <h2><?php _e('Search results', 'esimerkki'); ?></h2>
            <?php
            $search_query = get_search_query();

            // Custom query to search by tags or categories
            $args = array(
                'tax_query' => array(
                    'relation' => 'OR',
                    array(
                        'taxonomy' => 'post_tag', // Search by tag
                        'field' => 'name', // Search by tag name
                        'terms' => $search_query, // Search query
                    ),
                    array(
                        'taxonomy' => 'category', // Search by category
                        'field' => 'name', // Search by category name
                        'terms' => $search_query, // Search query
                    ),
                ),
                'posts_per_page' => -1, // Display all posts
            );
            $search_query = new WP_Query($args);

            if ($search_query->have_posts()) :
                while ($search_query->have_posts()) : $search_query->the_post();
                    ?>
                    <article <?php post_class(); ?>>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div class="post-content">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <p><?php _e('Sorry, no results found.', 'esimerkki'); ?></p>
                <?php
            endif;
            ?>
        </section>
    </div> <!-- Close container -->
</main>

<?php
get_footer();
?>
