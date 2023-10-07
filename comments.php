<!-- Comments -->
<div class="entry-comments">
  <h5 class="section-title mb-24"><?php comments_number('0 comments', '1 comment', '% comments'); ?></h5>
  <ul class="comment-list">
    <?php
    $comments = get_comments(array(
      'status' => 'approve', // Only retrieve approved comments
      'post_id' => get_the_ID() // Get comments for the current post
    ));

    wp_list_comments(array(
      'style' => 'ul',
      'avatar_size' => 60,
      'callback' => 'custom_comment_callback',
      'type' => 'comment',
      'reply_text' => 'Reply',
      'page' => 1,
      'reverse_top_level' => false
    ));
    ?>
  </ul>
</div> <!-- end comments -->

<!-- Comment Form -->
<div id="respond" class="comment-respond">
  <h5 class="section-title mb-24">Leave your comment</h5>
  <?php comment_form(); ?>
</div> <!-- end comment-respond -->

<?php
function custom_comment_callback($comment, $args, $depth)
{
  $GLOBALS['comment'] = $comment;
  ?>
  <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
    <div class="comment-body">
      <div class="comment-avatar">
        <?php echo get_avatar($comment, 60); ?>
      </div>
      <div class="comment-text">
        <h6 class="comment-author"><?php echo get_comment_author_link(); ?></h6>
        <div class="comment-metadata">
          <a href="<?php echo esc_url(get_comment_link($comment->comment_ID)); ?>" class="comment-date"><?php printf(__('%1$s at %2$s'), get_comment_date(), get_comment_time()); ?></a>
        </div>
        <p><?php comment_text(); ?></p>
        <?php
        comment_reply_link(array_merge($args, array(
          'depth' => $depth,
          'max_depth' => $args['max_depth'],
          'reply_text' => 'Reply',
          'before' => '',
          'after' => ''
        )));
        ?>
      </div>
    </div>
  <?php
}
?>