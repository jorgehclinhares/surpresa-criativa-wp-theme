<?php get_header(); ?>

<?php

$context = Timber::context();
$context['posts_highlights'] = Timber::get_posts(array(
  'post_type' => 'post',
  'posts_per_page' => 6,
  'tag' => 'destaque',
));

$context['posts'] = Timber::get_posts(array('posts_per_page' => 8));

$context['template_directory_uri'] = get_template_directory_uri();

Timber::render('/components/carousel/carousel.twig', $context);
Timber::render('/components/home-posts/home-posts.twig', $context);

?>

<?php get_footer(); ?>