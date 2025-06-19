<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?> <?php wp_title('|', true, 'left'); ?></title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/general.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/carousel/carousel.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/home-posts/home-posts.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/post/post.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
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