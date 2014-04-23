<?php title(get_the_title()); ?>

<?php get_header(); ?>

<div class="wrapper">
  <div id="main">


    <?php if (have_posts()) while (have_posts()) : the_post(); ?>
      <div class="user-content">
        <?php the_content(); ?>
      </div>
    <?php endwhile; ?>

    <script language="javascript" src="http://us1.campaign-archive1.com/generate-js/?u=88ad4bffeee977ac0ee07d20e&fid=48149&show=10" type="text/javascript"></script>

  </div>
</div>

<?php get_footer(); ?>
