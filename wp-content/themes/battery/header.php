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
			<?php if (get_theme_mod('header_logo')) : ?>
				<a href="<?php echo esc_url(home_url('/')); ?>" class="">
					<img src="<?php echo esc_url(wp_get_attachment_url(get_theme_mod('header_logo'))); ?>" alt="<?php bloginfo('name'); ?>" class="">
				</a>
			<?php else : ?>
				<a href="<?php echo esc_url(home_url('/')); ?>" class=" ">
					<?php bloginfo('name'); ?>
				</a>
			<?php endif; ?>
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
				<?php
				$args = array(
					'post_type' => 'page', // Указываем тип поста как 'page'
					'post_status' => 'publish', // Указываем статус 'publish'
					'name' => 'contact-us', // Укажите ярлык (slug) страницы
				);
				$contact_query = new WP_Query($args);
				if ($contact_query->have_posts()) {
					while ($contact_query->have_posts()) {
						$contact_query->the_post();
						$contact_url = get_permalink();
				?>
						<a href="<?php echo esc_url($contact_url); ?>" class="button__text">General Inquiries</a>
				<?php
					}
					wp_reset_postdata(); // Сбрасываем запрос
				}
				?>
			</div>
			<div class="wrapper">
				<div class="burgermenu">
					<a href="#" class="burger-button" title="burger">
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