<?php title(get_the_title()); ?>
<?php get_header(); ?>

<?php if (have_posts()) while (have_posts()) : the_post(); ?>
  <div class="wrapper">
    <section id="main">
      <?php the_content(); ?>

      <form action="<?php bloginfo( 'stylesheet_directory' ); ?>/send-performer.php" id="new_inquiry" method="post">
        <fieldset>
          <legend>About You</legend>

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
        </fieldset>

        <fieldset>
          <legend>What are you looking for?</legend>

          <div class='field'>
            <label class="required" for="inquiry_type">
              What type of performer are you looking for?
              <br/><small>If you're not sure you can leave this blank.</small>
            </label>
            <input id="inquiry_type" name="inquiry[type]" size="30" type="text" />
          </div>

          <div class='field'>
            <label for="inquiry_budget">What is your budget?</label>
            <input id="inquiry_budget" name="inquiry[budget]" size="30" type="text" />
          </div>

          <div class='field'>
            <label for="inquiry_how_many">How many performers are you looking for?</label>
            <input id="inquiry_how_many" name="inquiry[how_many]" size="30" type="text" />
          </div>


          <div class='field'>
            <label for="inquiry_description">Please describe your event</label>
            <textarea cols="40" id="inquiry_description" name="inquiry[description]" rows="8"></textarea>
          </div>
        </fieldset>


        <div class='actions'>
          <input id="inquiry_submit" name="commit" type="submit" value="Send My Request" />
        </div>

      </form>

    </section>
    <?php get_sidebar(); ?>
  </div>
<?php endwhile; ?>

<?php get_footer(); ?>
