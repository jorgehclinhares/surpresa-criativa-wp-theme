<?php Timber::render('components/header.twig', Timber::context()); ?>

<?php
$context = Timber::context();

$context['search_query'] = get_search_query();
$context['posts'] = Timber::get_posts();

Timber::render('search/search.twig', $context);
?>

<?php get_footer(); ?>