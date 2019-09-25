<?php get_header(); ?>

<!-- HTML goes here -->

<div class="left-sidebar-home">
  <?php dynamic_sidebar('rp6-left-sidebar-home'); ?>
</div>


<div class="single-post-container">

  <?php if(have_posts()) : ?>
  <?php while(have_posts()): the_post(); ?>
    <div class="post-found">

      <h3><?php the_title(); ?></h3>

      <?php if(has_post_thumbnail()) : ?>
        <div class="post-thumbnail">
        <?php the_post_thumbnail(); ?>
        </div>
      <?php endif; ?>

      <div class="meta">
        Created By <?php the_author(); ?> on <?php the_date(); ?>
      </div>

      <?php the_content(); ?>
      <a class="button" href="http://localhost/ref_project_6/blog/">
        Read More
      </a>
    </div>
  <?php endwhile; ?>
  <?php else : ?>
    <div class="post-found">
      <?php echo wpautop('Sorry, No posts were found.'); ?>
    </div>
    <?php endif; ?>

    <?php comments_template(); ?>

</div>


<!-- HTML goes here -->

<?php get_footer(); ?>
