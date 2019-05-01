<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php wp_head(); ?>
</head>
<body>
  <?php $pages = get_pages(["sort_column" => "menu_order"]); ?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/">Spacecrafts</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <?php foreach ($pages as $page) : ?>

      <li class="nav-item <?php if (is_page($page) || is_home() && $page->ID == get_option('page_for_posts')) { echo 'active'; } ?>">
        <a class="nav-link" href="<?php echo get_permalink($page); ?>">
            <?php echo $page->post_title; ?>
        </a>
      </li>
    <?php endforeach;?>
      </li>
    </ul>
  </div>
</nav>
  <div class="container">
