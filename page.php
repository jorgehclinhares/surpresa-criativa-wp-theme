<?php
$context = Timber::context();
$context['post'] = Timber::get_post();

if (is_shop()) {
  $args = [
    'post_type' => 'product',
    'posts_per_page' => 12,
    'paged' => get_query_var('paged') ?: 1,
  ];

  foreach (Timber::get_posts($args) as $post) {
    $product = wc_get_product($post->ID);
    $image_url = wp_get_attachment_url($product->get_image_id());
    $products[] = (object)[
      'name' => $product->get_name(),
      'price_html' => $product->get_price_html(),
      'image_url' => $image_url,
      'permalink' => get_permalink($post->ID),
    ];
  }
  $context['products'] = $products;

  Timber::render('archive-product.twig', $context);
  return;
}

// Renderiza a página normalmente
Timber::render('page.twig', $context);
