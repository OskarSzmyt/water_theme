<?php
get_header();
?>
<div class="wrapper">
        <?php
            if(have_posts()){
                while(have_posts()){
                    the_post();
                    get_template_part('template-parts/content','archive');
                }
            }
?>
<section>
<?php
        the_posts_pagination();
    ?>
</section>
</div>

<?php
    get_footer();
?>