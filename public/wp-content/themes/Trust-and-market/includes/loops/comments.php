<?php
 
// Do not delete this section
if (isset($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])){
  die ('Please do not load this page directly. Thanks!'); }
if ( post_password_required() ) { ?>
  <div class="alert alert-warning">
    <?php _e('This post is password protected. Enter the password to view comments.', 'bst-plus'); ?>
  </div>
<?php
  return; 
}
// End do not delete section
 
if (have_comments()) : ?>

<h3><?php _e('Feedback', 'bst-plus'); ?></h3>
<p class="text-muted" style="margin-bottom: 20px;">
  <?php tha_comments_before(); ?>
<i class="glyphicon glyphicon-comment"></i>&nbsp; <?php _e('Comments', 'bst-plus');  ?>: <?php comments_number(__('None', 'bst-plus'), '1', '%'); ?>
</p>
<ol class="commentlist">
  <?php wp_list_comments('type=comment&callback=bst_plus_comment');?>
</ol>
  <?php tha_comments_after(); ?>
<ul class="pagination">
  <li class="older"><?php previous_comments_link() ?></li>
  <li class="newer"><?php next_comments_link() ?></li>
</ul>

<?php
  else :
	  if (comments_open()) :
  echo "<p class='alert alert-info'>" . __('Soyez le premier à commenter cet article.', 'bst-plus') . "</p>";
		else :
			echo "<p class='alert alert-warning'>" . __('Comments are closed for this post.', 'bst-plus') . "</p>";
		endif;
	endif;
?>

<?php if (comments_open()) : ?>
<section id="respond">
  <h3><?php comment_form_title(__('Commenter cet article', 'bst-plus'), __('Responses to %s', 'bst-plus')); ?></h3>
  <p><?php cancel_comment_reply_link(); ?></p>
  <?php if (get_option('comment_registration') && !is_user_logged_in()) : ?>
  <p><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.', 'bst-plus'), wp_login_url(get_permalink())); ?></p>
  <?php else : ?>
  <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
    <?php if (is_user_logged_in()) : ?>
    <p style="display: none">
      <?php printf(__('Logged in as', 'bst-plus') . ' <a href="%s/wp-admin/profile.php">%s</a>.', get_option('siteurl'), $user_identity); ?>
      <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php __('Log out of this account', 'bst-plus'); ?>"><?php echo __('Log out', 'bst-plus') . ' <i class="glyphicon glyphicon-arrow-right"></i>'; ?></a>
    </p>
    <?php else : ?>
    <div class="form-group">
      <label for="author"><?php _e('Votre nom (obligatoire)', 'bst-plus'); if ($req) echo ' <span class="text-muted">' . __('(required)', 'bst') . '</span>'; ?></label>
      <input type="text" class="form-control" name="author" id="author" placeholder="<?php _e('Votre nom', 'bst-plus'); ?>" value="<?php echo esc_attr($comment_author); ?>" <?php if ($req) echo 'aria-required="true"'; ?> required>
    </div>
    <div class="form-group">
      <label for="email"><?php _e('Votre adresse email (obligatoire mais non publiée)', 'bst-plus'); if ($req) echo ' <span class="text-muted">' . _e('(required, but will not be published)', 'bst-plus') . '</span>'; ?></label>
      <input type="email" class="form-control" name="email" id="email" placeholder="<?php _e('Votre adresse email', 'bst-plus'); ?>" value="<?php echo esc_attr($comment_author_email); ?>" <?php if ($req) echo 'aria-required="true"'; ?> required>
    </div>
    <div class="form-group">
      <label for="url"><?php echo __('Votre site web (facultatif)', 'bst-plus'); ?></label>
      <input type="url" class="form-control" name="url" id="url" placeholder="<?php _e('Votre site web', 'bst'); ?>" value="<?php echo esc_attr($comment_author_url); ?>">
    </div>
    <?php endif; ?>
    <div class="form-group">
      <label for="comment"><?php _e('Votre commentaire', 'bst-plus'); ?></label>
      <textarea name="comment" class="form-control" id="comment" placeholder="<?php _e('Votre commentaire', 'bst-plus'); ?>" rows="8" aria-required="true"></textarea>
    </div>
    <p class="text-right"><input name="submit" class="btn btn-default btn-comment-default" type="submit" id="submit" value="<?php _e('Publier', 'bst-plus'); ?>"></p>
    <?php comment_id_fields(); ?>
    <?php do_action('comment_form', $post->ID); ?>
  </form>
  <?php endif; ?>
</section>
<?php endif; ?>
