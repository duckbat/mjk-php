<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body>    
	    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
  <img src="<?php echo get_template_directory_uri(); ?>/images/vidra.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
    <a class="navbar-brand" href="#">Project Vidra</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contacts</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
      </ul>
      <form class="d-flex" role="search"><?php get_search_form(); ?>
      </form>
    </div>
  </div>
</nav>

<header class="header text-center">	
	<h1 class="heading"><?php the_title(); ?></h1>
    </header>