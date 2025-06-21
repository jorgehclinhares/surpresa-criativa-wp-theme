<?php
// Carrega o autoload do Composer (se você usou Composer)
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
  require_once __DIR__ . '/vendor/autoload.php';
}

use Timber\Timber;

$timber = new Timber();

Timber::$dirname = array('templates', 'views'); // Pasta onde você vai criar os arquivos Twig

add_filter('timber/context', function ($context) {
  // Garante que o carrinho WooCommerce está carregado
  if (function_exists('WC') && WC()->cart) {
    $context['cart_count'] = WC()->cart->get_cart_contents_count();
  } else {
    $context['cart_count'] = 0;
  }

  return $context;
});
