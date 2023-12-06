<div id="respond" class="comment-respond">
    <?php
    $comments = get_comments( [ 'post_id' => get_the_ID() ] );
    if ( ( $comments ) ) {
        echo '<p>We have comments:</p>';
        foreach ( $comments as $comment ) {
            echo '<div class="comment">';
            echo '<p>' . esc_html( $comment->comment_content ) . '</p>';
            echo '</div>';
        }
    } else {
        echo '<p><strong>Be the first to comment!</strong></p>';
    }
    ?>

    <h3 id="reply-title" class="comment-reply-title">
        Leave a Reply
        <small>
            <a rel="nofollow" id="cancel-comment-reply-link" href="/archives/7#respond" style="display:none;">Cancel
                reply</a>
        </small>
    </h3>

    <form action="http://wordpress.local/wp-comments-post.php" method="post" id="commentform" class="comment-form">
        <p class="logged-in-as">Logged in as admin.
            <a href="http://wordpress.local/wp-admin/profile.php">Edit your profile</a>.
            <a href="http://wordpress.local/wp-login.php?action=logout&amp;redirect_to=http%3A%2F%2Fwordpress.local%2Farchives%2F7&amp;_wpnonce=d55aea6ba8">Log
                out?</a>
            <span class="required-field-message">Required fields are marked <span class="required">*</span></span>
        </p>

        <p class="comment-form-comment"><label for="comment">Comment <span class="required">*</span></label> <textarea
                id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea></p>
        <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Post Comment"/>
            <input type='hidden' name='comment_post_ID' value='7' id='comment_post_ID'/>
            <input type='hidden' name='comment_parent' id='comment_parent' value='0'/>
        </p><input type="hidden" id="_wp_unfiltered_html_comment_disabled" name="_wp_unfiltered_html_comment_disabled"
                   value="8a4232b7e8"/>
        <script type="text/javascript">
            /* <![CDATA[ */
            (function () {
                if (window === window.parent) {
                    document.getElementById('_wp_unfiltered_html_comment_disabled').name = '_wp_unfiltered_html_comment';
                }
            })();
            /* ]]> */
        </script>
        <p style="display: none !important;"><label>&#916;<textarea name="ak_hp_textarea" cols="45" rows="8"
                                                                    maxlength="100"></textarea></label><input
                type="hidden" id="ak_js_1" name="ak_js" value="239"/>
            <script>document.getElementById("ak_js_1").setAttribute("value", (new Date()).getTime());</script>
        </p>
    </form>
</div><!-- #respond -->
