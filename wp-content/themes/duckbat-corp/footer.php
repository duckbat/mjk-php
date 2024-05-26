<div class="mt-5 pt-5 pb-5 footer bg-primary">
<div class="container">
  <div class="row">
    <div class="col-lg-5 col-xs-12 about-company">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vidra.png" alt="Logo" width="50" height="30" class="d-inline-block align-text-top">
      <h2 class="text-white">Project Vidra</h2>
      <p class="pr-5 text-white-50">Buy and customize your keyboards here </p>
      <p><a href="#"><i class="fa fa-facebook-square mr-1"></i></a><a href="#"><i class="fa fa-linkedin-square"></i></a></p>
    </div>
    <div class="col-lg-3 col-xs-12 links">
      <h4 class="mt-lg-0 mt-sm-3 text-white">Follow us</h4>
      <?php wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'menu_class' => 'footer-nav m-0 p-0 text-white-50',
                    )
                ); ?>
    </div>
    <div class="col-lg-4 col-xs-12 location">
      <h4 class="mt-lg-0 mt-sm-4 text-white">Location</h4>
      <p class="text-white-50">Mansudong, Junggu-yeok, Pyongyang, North Korea</p>
      <p class="mb-0 text-white-50"><i class="fa fa-phone mr-3"></i>(420) 420-6969</p>
      <p><i class="fa fa-envelope-o mr-3 text-white-50"></i>info-projectkey@gmail.com</p>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col copyright">
      <p class=""><small class="text-white-50">© DuckBat 2024. All Rights Reserved.</small></p>
    </div>
  </div>
</div>
</div>
</div>

<dialog id="single-post">
    <button id="close">Close</button>
    <article class="single" id="modal-content"></article>
</dialog>

<?php wp_footer(); ?>
</body>

</html>