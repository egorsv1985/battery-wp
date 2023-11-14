<section class="weworkwith scroll">
	<div class="weworkwith__container">
		<?php
		global $template;

		if (strpos($template, 'we_work_with.php') !== false) {
			// Если текущий шаблон содержит "we_work_with.php", используйте <h1>
			echo '<h1 class="weworkwith__maintitle">' . get_field('weworkwith_title') . '</h1>';
		} else {
			// Иначе (для всех остальных шаблонов) используйте <h2>
			echo '<h2 class="weworkwith__title">' . get_field('weworkwith_title') . '</h2>';
		}
		?>

		<div class="weworkwith__text">
			<?php echo get_field('weworkwith_text'); ?>
		</div>

		<div class="weworkwith__cards cards">
			<?php
			$args = array(
				'post_type' => 'post',
				'category_name' => 'weworkwith',
				'posts_per_page' => -1,
				'orderby' => 'date', // Сортировка по дате создания
				'order' => 'ASC', // Порядок сортировки: возрастание
			);

			$query = new WP_Query($args);

			if ($query->have_posts()) :
				$count = 0; // Счетчик элементов
				$left_column_open = false; // Флаг для отслеживания открытой левой колонки
				$right_column_open = false; // Флаг для отслеживания открытой правой колонки

				while ($query->have_posts()) : $query->the_post();

					if ($count < 2) {
						// Открываем левую колонку, если она еще не открыта
						if (!$left_column_open) {
							echo '<div class="cards__column">';
							$left_column_open = true;
						}
						// Элементы для левой колонки
			?>
						<div class="cards__item card">
							<img src="<?php the_field('weworkwith_icon'); ?>" alt="<?php the_title(); ?>" class="card__icon" />
							<div class="card__content">
								<h3 class="card__subtitle"><?php the_title(); ?></h3>
								<div class="card__text">
									<?php the_content(); ?>
								</div>
								<a href="<?php echo esc_url(get_permalink()); ?>" title="<?php the_title(); ?>" class="card__link"></a>
							</div>
						</div>
					<?php
					} elseif ($count >= 2) {
						// Закрываем левую колонку перед элементами правой колонки
						if ($left_column_open) {
							echo '</div>';
							$left_column_open = false;
						}
						// Открываем правую колонку, если она еще не открыта
						if (!$right_column_open) {
							echo '<div class="cards__column">';
							$right_column_open = true;
						}
						// Элементы для правой колонки
					?>
						<div class="cards__item card">
							<img src="<?php the_field('weworkwith_icon'); ?>" alt="<?php the_title(); ?>" class="card__icon" />
							<div class="card__content">
								<h3 class="card__subtitle"><?php the_title(); ?></h3>
								<div class="card__text">
									<?php the_content(); ?>
								</div>
								<a href="<?php echo esc_url(get_permalink()); ?>" title="<?php the_title(); ?>" class="card__link card__link_up"></a>
							</div>
						</div>
			<?php
					}
					$count++;
				endwhile;
				// Закрываем открытую левую колонку, если она еще открыта
				if ($left_column_open) {
					echo '</div>';
				}
				// Закрываем правую колонку перед элементами правой колонки
				if ($right_column_open) {
					echo '</div>';
					$right_column_open = false;
				}
			endif;
			wp_reset_postdata();
			?>
		</div>
	</div>
</section>