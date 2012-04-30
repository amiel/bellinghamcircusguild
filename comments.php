<!-- Begin comments.php -->

<?php // if comments are enabled and there are some comments, let's show some comments, eh? ?>
<?php if ( have_comments() AND comments_open() ) : ?>
  <!-- Begin #comment-wrapper -->
  <div id="comment-wrapper">
    <h3 id="comments-title">Comments</h3>

    <ol class="comments">
      <?php // Outputs comments in default WordPress format ?>
      <?php wp_list_comments(); ?>
    </ol>
  </div>
  <!-- End #comment-wrapper -->
<?php endif; ?>

<?php // Show default WordPress comment form ?>
<?php comment_form(); ?>

<!-- End comments.php -->