<?php
// Carrega o autoload do Composer (se você usou Composer)
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
  require_once __DIR__ . '/vendor/autoload.php';
}

use Timber\Timber;

$timber = new Timber();

Timber::$dirname = array('templates', 'views'); // Pasta onde você vai criar os arquivos Twig
