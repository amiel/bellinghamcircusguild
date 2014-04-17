<?php title(get_the_title()); ?>
<?php get_header(); ?>

<?php if (have_posts()) while (have_posts()) : the_post(); ?>
  <div class="wrapper">
    <section id="main">
      <div class="user-content">
        <?php the_content(); ?>
      </div>

      <form action="<?php bloginfo( 'stylesheet_directory' ); ?>/send-application.php" id="new_application" method="post">
        <div class='field'>
          <label class="required" for="application_name">Name *</label>
          <input id="application_name" name="application[name]" size="30" type="text" />
        </div>

        <div class='field'>
          <label class="required" for="email" id="email_label">Email *</label>
          <input id="email" name="email" size="30" type="text" />

          <label class="required" for="application_email" id="application_email_label">Email *</label>
          <input id="application_email" name="application[email]" size="30" type="text" />
        </div>

        <div class='field'>
          <label class="required" for="application_shows">
            Which show(s) would you like to be in?<br/>
            <small>choose one or both</small>
          </label>

          <label class="checkbox" for="application_shows_7">
            <input id="application_shows_7" type="checkbox" name="application[shows][]" value="7:00" />
            7:00PM
          </label>
          <label class="checkbox" for="application_shows_9">
            <input id="application_shows_9" type="checkbox" name="application[shows][]" value="9:00" />
            9:00PM
          </label>
        </div>

        <div class='field'>
          <label class="required" for="application_description">Brief description of your act</label>
          <textarea id="application_description" name="application[description]" rows="8" cols="40"></textarea>
        </div>

        <div class='field'>
          <label class="required" for="application_tech">
            What are your tech needs?<br/>
            <small>anything we need to know about your act</small>
          </label>
          <textarea id="application_tech" name="application[tech]" rows="8" cols="40"></textarea>
        </div>

        <div class='actions'>
          <input id="application_submit" name="commit" type="submit" value="Submit" />
        </div>

      </form>

    </section>
    <?php get_sidebar(); ?>
  </div>
<?php endwhile; ?>

<?php get_footer(); ?>
