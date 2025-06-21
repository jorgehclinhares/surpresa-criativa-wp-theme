<?php
$context = Timber::context();
$post = Timber::get_post();

$context['product'] = wc_get_product(get_the_ID());
$context['post'] = $post;

Timber::render('single-product.twig', $context);