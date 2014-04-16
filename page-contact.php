<?php title(get_the_title()); ?>
<?php get_header(); ?>

<?php if (have_posts()) while (have_posts()) : the_post(); ?>
  <div class="wrapper">
    <section id="main">

      <p>Just use this form and a member of the guild will get back to you as soon as possible.</p>

      <form action="<?php bloginfo( 'stylesheet_directory' ); ?>/send-contact.php" id="new_inquiry" method="post">

        <div class='field'>
          <label class="required" for="inquiry_name">Name *</label>
          <input id="inquiry_name" name="inquiry[name]" size="30" type="text" />
        </div>

        <div class='field'>
          <label class="required" for="email" id="email_label">Email *</label>
          <input id="email" name="email" size="30" type="text" />

          <label class="required" for="inquiry_email" id="inquiry_email_label">Email *</label>
          <input id="inquiry_email" name="inquiry[email]" size="30" type="text" />
        </div>

        <div class='field'>
          <label for="inquiry_phone">Phone</label>
          <input id="inquiry_phone" name="inquiry[phone]" size="30" type="text" />
        </div>

        <div class='field message_field'>
          <label for="inquiry_message">Message</label>
          <textarea cols="40" id="inquiry_message" name="inquiry[message]" rows="8"></textarea>
        </div>

        <div class='actions'>
          <input id="inquiry_submit" name="commit" type="submit" value="Send Message" />
        </div>

      </form>

    </section>
    <?php get_sidebar(); ?>
  </div>
<?php endwhile; ?>

<?php get_footer(); ?>
