<section class="screen1">
		<div class="screen1__container">
			<div class="screen1__wrapper">
				<h1 class="screen1__maintitle"><?php echo get_field('screen_title'); ?> </h1>
				<div class="screen1__text"><?php the_field('screen_text'); ?> </div>
				<div class="screen1__button button button_fill">
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
							<a href="<?php echo esc_url($contact_url); ?>" class="button__text">Contact us</a>
					<?php
						}
						wp_reset_postdata(); // Сбрасываем запрос
					}
					?>
				</div>
			</div>
		</div>
		<div class="screen1__background">
			<div class="scene">
				<div data-depth="0.3">
					<div class="screen1__img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/icons/g12.svg" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>