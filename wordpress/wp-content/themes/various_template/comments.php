<?php
if (post_password_required()) {
 return;
}
?>

<div id="comments" class="main_contents">
<?php if (have_comments()): ?>
    <h3 id="comments-count"><?php echo get_comments_number().' 件のコメント'; ?></h3>
    <ul id="comments-list">
        <?php wp_list_comments(array('avatar_size'=>40,'style'=>'ul','type'=>'comment')); ?>
    </ul>

<?php if ( get_comment_pages_count() > 1) : ?>
    <ul id="comments-pagination">
        <li id="prev-comments"><?php previous_comments_link('&lt;&lt; 前のコメント'); ?></li>
        <li id="next-comments"><?php next_comments_link('次のコメント &gt;&gt;'); ?></li>
    </ul>
<?php endif; endif; ?>
<?php comment_form(); ?>
</div><!-- comments -->