
<section class="archive">
    <?php the_post_thumbnail();?>
    <h1><?php the_title(); ?></h1>
    <p><?php the_date();?></p>
    <p><?php comments_number();?></p>
    <?php
    the_excerpt();
    ?>
    <a href=<?php the_permalink(); ?>>Read more...</a>
    
</section>