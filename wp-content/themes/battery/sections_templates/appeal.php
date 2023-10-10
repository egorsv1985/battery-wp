<section class="appeal _not-mt">
	<div class="appeal__container">
		<h2 class="appeal__title"><?php echo get_field('appeal_title'); ?></h2>
		<div class="appeal__text"><?php echo get_field('appeal_text'); ?></div>
		<div class="proposal__button button button_border">
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
					<a href="<?php echo esc_url($contact_url); ?>" class="button__text">Contact Us</a>
			<?php
				}
				wp_reset_postdata(); // Сбрасываем запрос
			}
			?>


		</div>
	</div>
</section>