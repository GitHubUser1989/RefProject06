<?php /* Template Name: Sales Products Template */ ?>

<?php get_header(); ?>

<!-- HTML goes here -->

<div class="left-sidebar-home">
  <?php dynamic_sidebar('rp6-left-sidebar-home'); ?>
</div>

<div class="content-area">

  <div class="akcios-termekek-loop">
    <?php

     if (have_posts() ):

            while (have_posts() ): the_post();?>

              <?php get_template_part('content', get_post_format()); ?>

              <?php the_content(); ?>

      <?php  endwhile;
      endif;

    ?>
  </div>

</div>

<!-- HTML goes here -->

<?php get_footer(); ?>
