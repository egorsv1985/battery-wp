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

			<nav class="header__nav nav">
				<?php
				// Определяем, какое меню использовать (по его названию)
				$primary_menu = wp_nav_menu(
					array(
						'theme_location' => 'primary-menu',
						'echo' => false, // Не выводить меню на экран, только получить его HTML
					)
				);

				// Выводим меню
				echo $primary_menu;
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

					<nav class="burger__nav nav-burger">
						<?php
						// Определяем, какое меню использовать (по его названию)
						$primary_menu = wp_nav_menu(
							array(
								'theme_location' => 'primary-menu',
								'echo' => false, // Не выводить меню на экран, только получить его HTML
							)
						);

						// Выводим меню
						echo $primary_menu;
						?>
						<div class="nav__button button button_border">
							<a href="contact.html" class="button__text">General Inquiries</a>
						</div>
					</nav>

				</div>
			</div>
		</div>
	</header>

	<div class="menu-background"></div>