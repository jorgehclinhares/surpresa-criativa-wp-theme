<?php

get_header();

$context = Timber::context();
$context['post'] = new Timber\Post();
Timber::render('post/post.twig', $context);

get_footer();
