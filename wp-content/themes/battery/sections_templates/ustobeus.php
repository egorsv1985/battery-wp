<?php
global $template;

if (is_page('about-us')) {

	echo '<section class="ustobeus scroll">';
} else {

	echo '<section class="ustobeus ustobeus_back scroll">';
}
?>

<div class="ustobeus__container">
	<?php
	global $template;

	if (is_page('about-us')) {

		echo '<div class="scene order">';
	} else {

		echo '<div class="scene">';
	}
	?>
	<div data-depth="0.6">
		<img src="<?php echo get_template_directory_uri(); ?>/img/icons/new_planet.svg" alt="<?php echo get_field('proposal_title'); ?>" class="ustobeus__img" />
	</div>
</div>
<div class="ustobeus__content">
	<h2 class="ustobeus__title"><?php echo get_field('ustobeus_title'); ?></h2>
	<div class="ustobeus__facts">
		<?php
		$args = array(
			'post_type' => 'post',  // Укажите здесь тип вашей записи, если это не посты
			'category_name' => 'ustobeus', // Укажите здесь название рубрики "ustobeus"
			'posts_per_page' => -1  // Укажите, сколько записей вы хотите вывести, -1 для всех записей
		);

		$query = new WP_Query($args);

		if ($query->have_posts()) :
			while ($query->have_posts()) : $query->the_post();
		?>
				<div class="ustobeus__fact fact">
					<div class="fact__description"><?php echo get_field('ustobeus_direction'); ?></div>
					<div class="fact__content">
						<div class="fact__number"><?php the_title(); ?></div>
						<div class="fact__text"><?php the_content(); ?></div>
					</div>
				</div>
		<?php
			endwhile;
		endif;
		wp_reset_postdata();
		?>
	</div>
	<div class="ustobeus__text">
		<?php echo get_field('ustobeus_text'); ?>
	</div>
	<div class="ustobeus__button button button_fill">
		<?php
		$args = array(
			'post_type' => 'page', // Указываем тип поста как 'page'
			'post_status' => 'publish', // Указываем статус 'publish'
			'name' => 'about-us', // Укажите ярлык (slug) страницы
		);

		$contact_query = new WP_Query($args);

		if ($contact_query->have_posts()) {
			while ($contact_query->have_posts()) {
				$contact_query->the_post();
				$contact_url = get_permalink();
		?>

				<a href="<?php echo esc_url($contact_url); ?>" class="button__text"><?php echo get_field('ustobeus_btn'); ?></a>
		<?php
			}
			wp_reset_postdata(); // Сбрасываем запрос
		}
		?>
	</div>
</div>
</div>
</section>