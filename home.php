
<?php
$context = Timber::context();
$context['posts'] = Timber::get_posts(array('posts_per_page' => 8));
$context['posts_highlights'] = Timber::get_posts(array(
  'post_type' => 'post',
  'posts_per_page' => 6,
  'tag' => 'destaque',
));
$context['current_url'] = home_url();

Timber::render('home.twig', $context);
