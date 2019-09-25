<?php /* Template Name: Home Page Template */ ?>

<?php get_header(); ?>

<!-- HTML goes here -->

<div class="left-sidebar-home">
  <?php dynamic_sidebar('rp6-left-sidebar-home'); ?>
</div> 

<div class="section-1">
  <img src="http://localhost/ref_project_6/wp-content/uploads/2019/09/content-1-img2.jpg" alt="" class="section-1-img">
</div>

<div class="section-2 clearfix">
  <div class="section-2-box-1">
    <img src="http://localhost/ref_project_6/wp-content/uploads/2019/09/truck4.png" alt="" class="section-2-box-1-img">
    <p class="section-2-box-1-p-1">Ingyenes kiszállítás</span>
    <p class="section-2-box-1-p-2">20.000 Ft-os vásárlás felett!</p>
  </div>

  <div class="section-2-box-2">
    <img src="http://localhost/ref_project_6/wp-content/uploads/2019/09/lamp.png" alt="" class="section-2-box-3-img">
    <p class="section-2-box-2-p-1">Speciális termékkínálat</p>
    <p class="section-2-box-2-p-2">Több mint 5000 termék</p>
  </div>

  <div class="section-2-box-3">
    <img src="http://localhost/ref_project_6/wp-content/uploads/2019/09/prize.png" alt="" class="section-2-box-3-img">
    <p class="section-2-box-3-p-1">Díjnyertes webáruház</p>
    <p class="section-2-box-3-p-2">2019 egyik legjobb webáruháza!</p>
  </div>
</div>

<div class="section-3">
  <p class="section-3-p-1">Kiemelt termékeink</p>
  <p class="section-3-p-2">Vásárlóink kedvence</p>
</div>

<div class="fooldal-loop">
  <?php

   if (have_posts() ):

          while (have_posts() ): the_post();?>

            <?php get_template_part('content', get_post_format()); ?>

            <?php the_content(); ?>

    <?php  endwhile;
    endif;

  ?>
</div>


<div class="section-4">

  <p class="section-4-p-1">Rólunk írták</p>

  <div class="section-4-slideshow">

    <!-- Slideshow container -->
  <div class="slideshow-container">

      <!-- Full-width slides/quotes -->
      <div class="mySlides">
        <p class="author">V. Detti, Budapest</p>
        <q>“Kedves, tájékozott eladók, segítőkész kiszolgálás, megbízható szállítás.”</q>
      </div>

      <div class="mySlides">
        <p class="author">K. Józsi, Diósd</p>
        <q>“Már második alkalommal vásárolok ettől a webáruháztól. Mindenkinek csak ajánlani tudom!”</q>
      </div>

      <div class="mySlides">
        <p class="author">N. Erika, Érd</p>
        <q>“A terméket nagyon hamar megkaptuk, nem kellett heteket várni! A választék is nagyon!”</q>
      </div>

      <!-- Next/prev buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

    <!-- Dots/bullets/indicators -->
    <div class="dot-container">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>

  </div>

  <p class="section-4-p-2">További vélemények</p>

</div>

<!-- HTML goes here -->

<?php get_footer(); ?>
