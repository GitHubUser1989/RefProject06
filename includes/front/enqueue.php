<?php

function rp6_enqueue() {

  $uri = get_theme_file_uri();

  wp_register_style('rp6_customstyle', $uri . '/css/styles.css');

  wp_enqueue_style('rp6_customstyle', $uri . '/css/styles.css');
  wp_enqueue_script('slideshow.js', get_template_directory_uri() . '/js/slideshow.js', array(), '1.0.0', true);

}
