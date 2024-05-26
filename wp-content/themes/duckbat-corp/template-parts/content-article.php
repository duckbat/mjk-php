
<div class="container">
    <span class="date">
        <?php the_date(); ?>
    </span>
    <hr>
    <span>
        <?php the_tags(''); ?>
    </span>

    <?php
    the_content();
    ?>
</div>