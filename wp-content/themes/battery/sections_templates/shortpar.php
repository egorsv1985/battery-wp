<section class="shortpar scroll">
	<div class="shortpar__container infocard">
		<?php
		$args = array(
			'post_type' => 'post',  // Укажите здесь тип вашей записи, если это не посты
			'category_name' => 'shortpar', // Укажите здесь название рубрики "shortpar"
			'posts_per_page' => -1  // Укажите, сколько записей вы хотите вывести, -1 для всех записей
		);

		$query = new WP_Query($args);

		if ($query->have_posts()) :
			while ($query->have_posts()) : $query->the_post();
		?>
				<div class="infocard__item">
					<img src="<?php the_field('shortpar_icon'); ?>" alt="<?php echo the_title(); ?>" class="infocard__icon" />
					<div class="infocard__content">
						<div class="infocard__subtitle"><?php echo the_title(); ?></div>
						<div class="infocard__text">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
		<?php
			endwhile;
		endif;
		wp_reset_postdata();
		?>
	</div>
	<img src="<?php echo get_template_directory_uri(); ?>/img/icons/back_circle2.svg" alt="" class="shortpar__backimg" />
</section>