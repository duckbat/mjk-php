<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <?php if(function_exists('the_custom_logo')){
              the_custom_logo();
            } ?>
        <div class="container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vidra.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">Project Vidra</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
                    )
                ); ?>
                <form class="d-flex" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" value="<?php echo get_search_query(); ?>" name="s">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <header class="header text-center">	
        <h1 class="heading mt-3"><?php the_title(); ?></h1>
    </header>
    
    <?php wp_footer(); ?>
</body>
</html>
