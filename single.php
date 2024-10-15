<?php
get_header();
?>
<div class="wrapper">
    <p><?php the_time( 'F d, Y' );?></p>

    <?php
        

        if(have_posts()){
            while(have_posts()){
                the_post();
                the_content();
            }
        }
    echo '<div class="tags">';
    the_tags('<span><i class="fa-tag fa"></i> ','</span><span><i class="fa-tag fa"></i>  ','</span>');
    echo '<br><span><i class="fa fa-comment"></i> Comments: ';
    echo comments_number();
    echo '</span>';
    echo '</div>';

    comments_template();
    ?>

</div>

<?php
    get_footer();
?>