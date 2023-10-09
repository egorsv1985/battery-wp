<section class="goals scroll">
	<div class="goals__container">
		<h2 class="goals__title title_center"><?php echo get_field('goals_title'); ?></h2>
		<div class="goals__icons icons">
			<?php
			$args = array(
				'post_type' => 'post',  // Укажите здесь тип вашей записи, если это не посты
				'category_name' => 'goals', // Укажите здесь название рубрики "goals"
				'posts_per_page' => -1  // Укажите, сколько записей вы хотите вывести, -1 для всех записей
			);
			$query = new WP_Query($args);

			if ($query->have_posts()) :
				while ($query->have_posts()) : $query->the_post();
			?>
					<div class="icons__item item-icon scroll">
						<img src="<?php the_field('icon'); ?>" alt="<?php echo the_title(); ?>" class="item-icons__icon" />
						<div class="item-icon__subtitle"><?php the_title(); ?></div>
						<div class="item-icon__text"> <?php the_content(); ?> </div>
					</div>
			<?php
				endwhile;
			endif;
			wp_reset_postdata();
			?>
		</div>
	</div>
</section>