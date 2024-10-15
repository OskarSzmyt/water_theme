<div class="comments">
    <?php

        if(!have_comments()){
            echo "<h2> Leave a comment!</h2>";
        }
        else{
            echo "<div class=com>";
            wp_list_comments(
                array(
                    'avatar_size' => '60px',
                    'style' => 'div',

                )
            );
            echo "</div>";
        }
            if(comments_open()) {
                echo '<div class=comment-form>';
               //echo '<h3>Komentarze otwarte </h3>';
                comment_form(
    array(
        'class_form' => '',
        'fields' => array(
            'author' => '<p class="">' . '<input id="author" name="author" type="text" value="" size="30" maxlength="245" required="required" placeholder="author"/></p>',
            'email'  => '<p class="email">' . '<input id="email" name="email" type="email" value="" size="30" maxlength="100" required="required" placeholder="email"/></p>',
        ),
        'comment_field' => '<p class="comment-form-comment"><textarea id="comment" name="comment" rows="8" maxlength="65525" required="required" placeholder="Your comment"></textarea></p>',
        'title_reply' => 'Leave a Reply',
        'submit_button' => '<input type="submit" class="submit" value="' . 'Submit'. '" />',
        'logged_in_as' => '',
        'comment_notes_before' => '',
        'comment_notes_after' => '',
        'cookies' => '' 
    )
);


                echo "</div>";
            }
        

    ?>
</div>