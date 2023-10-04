<!DOCTYPE html>
<html <? language_attributes(); ?>>

<head>
	<meta charset="<? bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><? wp_title(); ?></title>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;800;900&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body>

	<header class="header">
		<div class="header__container">
			<? if (get_theme_mod('custom_logo')) : ?>
				<a href="<? echo esc_url(home_url('/')); ?>" class="header__logo logo">
					<img src="<? echo esc_url(wp_get_attachment_url(get_theme_mod('custom_logo'))); ?>" alt="<? bloginfo('name'); ?>" class="logo__img">
				</a>
			<? else : ?>
				<a href="<? echo esc_url(home_url('/')); ?>" class="header__logo logo ">
					<? bloginfo('name'); ?>
				</a>
			<? endif; ?>
			<nav class="header__menu menu col-12 position-relative">
            <?php
            $menu_items = wp_get_nav_menu_items('Primary Menu');
            if ($menu_items) {
              echo '<ul class="menu__list d-flex h-100 flex-column flex-lg-row align-items-center justify-content-center justify-content-lg-between text-nowrap ps-0 gap-3">';
              foreach ($menu_items as $item) {
                echo '<li class="menu__item d-flex justify-content-center">';
                echo '<a href="' . $item->url . '" class="menu__link d-inline-block">' . $item->title . '</a>';
                echo '</li>';
              }
              echo '</ul>';
            }
            ?>
          </nav>
			<div class="header__button button button_fill">
				<a href="contact.html" class="button__text">General Inquiries</a>
			</div>
			<div class="wrapper">
				<div class="burgermenu">
					<a href="#" class="burger-button">
						<span></span>
					</a>
					<nav class="header__menu menu col-12 position-relative">
            <?php
            $menu_items = wp_get_nav_menu_items('Primary Menu');
            if ($menu_items) {
              echo '<ul class="menu__list d-flex h-100 flex-column flex-lg-row align-items-center justify-content-center justify-content-lg-between text-nowrap ps-0 gap-3">';
              foreach ($menu_items as $item) {
                echo '<li class="menu__item d-flex justify-content-center">';
                echo '<a href="' . $item->url . '" class="menu__link d-inline-block">' . $item->title . '</a>';
                echo '</li>';
              }
              echo '</ul>';
            }
            ?>
          </nav>
				</div>
			</div>
		</div>
	</header>