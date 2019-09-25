<?php /* Template Name: Login Template */ ?>

<?php get_header(); ?>

<!-- HTML goes here -->

<?php

 if (have_posts() ):

        while (have_posts() ): the_post();?>

          <?php get_template_part('content', get_post_format()); ?>

          <?php the_content(); ?>

  <?php  endwhile;
  endif;

?>

<!-- HTML goes here -->

<?php get_footer(); ?>
