<?php
global $template;

if (strpos($template, 'template.php') !== false) {
	// Если текущий шаблон содержит "template.php"
	echo '<section class="choose _margin-up scroll">';
} else {
	// Иначе (для всех остальных шаблонов)
	echo '<section class="choose scroll">';
}
?>

<div class="choose__container">
	<div class="choose__content">
		<div class="choose__title"> <?php echo get_field('choose_title'); ?> </div>
		<div class="choose__text"> <?php echo get_field('choose_text'); ?> </div>
		<div class="choose__button button button_fill">
			<a href="./contact.html" class="button__text">Schedule A Battery Pick Up Today</a>
		</div>
	</div>
	<div class="choose__variants variants">
		<div class="variants__graph graph">
			<img src="<?php echo get_template_directory_uri(); ?>/img/icons/small_circle.svg" alt="" class="graph__smcircle _sm1" />
			<div class="graph__middle">
				<img src="<?php echo get_template_directory_uri(); ?>/img/icons/big_circle.svg" alt="" class="graph__bigcircle" />
				<img src="<?php echo get_template_directory_uri(); ?>/img/icons/small_circle.svg" alt="" class="graph__smcircle _sm2" />
			</div>
			<img src="./img/small_circle.svg" alt="" class="graph__smcircle _sm3" />
		</div>
		<div class="variants__items">
			<?php
			$args = array(
				'post_type' => 'post',  // Укажите здесь тип вашей записи, если это не посты
				'category_name' => 'choose', // Укажите здесь название рубрики "choose"
				'posts_per_page' => -1  // Укажите, сколько записей вы хотите вывести, -1 для всех записей
			);

			$query = new WP_Query($args);

			if ($query->have_posts()) :
				while ($query->have_posts()) : $query->the_post();
			?>
					<div class="variants__item variant">
						<img src="<?php the_field('choose_icon'); ?>" alt="<?php echo the_title(); ?>" class="variant__icon" />
						<div class="variant__content">
							<div class="variant__subtitle"><?php the_title(); ?></div>
							<div class="variant__text"> <?php the_content(); ?> </div>
						</div>
					</div>
			<?php
				endwhile;
			endif;
			wp_reset_postdata();
			?>
		</div>
	</div>
</div>
</section>