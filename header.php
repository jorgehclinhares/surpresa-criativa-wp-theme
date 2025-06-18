<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/general.css">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
    <div class="header-top">
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Loja</a></li>
        </ul>
      </nav>
      <input type="search" placeholder="Pesquisar...">
    </div>
    <div class="header-bottom">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svgs/logo.svg" alt="Logo">
    </div>
  </header>