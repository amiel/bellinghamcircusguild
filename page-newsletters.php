<?php title(get_the_title()); ?>

<?php get_header(); ?>

<div class="wrapper">
  <section id="main">

    <?php if (have_posts()) while (have_posts()) : the_post(); ?>
      <div class="user-content">
        <?php the_content(); ?>
      </div>
    <?php endwhile; ?>

<!-- Begin MailChimp Signup Form -->
<!-- <link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css"> -->
<div id="mc_embed_signup">
  <form action="http://bellinghamcircusguild.us1.list-manage2.com/subscribe/post?u=88ad4bffeee977ac0ee07d20e&amp;id=8e1c5aeaf2" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <h2>Subscribe to our newsletter</h2>

    <div class="mc-field-group field">
      <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span></label>
      <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
    </div>
    <div id="mce-responses" class="clear">
      <div class="response" id="mce-error-response" style="display:none"></div>
      <div class="response" id="mce-success-response" style="display:none"></div>
    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
      <div style="position: absolute; left: -5000px;"><input type="text" name="b_88ad4bffeee977ac0ee07d20e_8e1c5aeaf2" value=""></div>
    <div class="clear actions"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
  </form>
</div>

<!--End mc_embed_signup-->


    <h2>Previous Newsletters</h2>
    <script language="javascript" src="http://us1.campaign-archive1.com/generate-js/?u=88ad4bffeee977ac0ee07d20e&fid=48149&show=10" type="text/javascript"></script>
  </section>

  <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
