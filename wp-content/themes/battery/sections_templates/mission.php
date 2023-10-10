<section class="mission">
	<div class="mission__container">
		<h2 class="mission__title title_center">our Mission</h2>
		<div class="mission__infograf infograf">
			<?php
			$args = array(
				'post_type' => 'post',
				'category_name' => 'mission',
				'posts_per_page' => -1,
				'orderby' => 'title',
				'orderby' => 'modified', // Сортировка по дате создания
				'order' => 'ASC', // Порядок сортировки: DESC (убывание) или ASC (возрастание)
			);

			$query = new WP_Query($args);

			if ($query->have_posts()) :
				$counter = 1;
				while ($query->have_posts()) : $query->the_post();
			?>
					<div class="infograf__item">
						<?
						$formatted_counter = sprintf('%02d', $counter);
						if ($counter % 2 == 0) {
						?>

							<p class="infograf__number"><?php echo $formatted_counter; ?></p>
							<img src="<?php echo get_template_directory_uri(); ?>/img/icons/short_line.svg" alt="" class="infograf__line" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/icons/white_circle.svg" alt="" class="infograf__img" />

							<h3 class="infograf__text"><?php the_title(); ?></h3>

						<?php } else { ?>

							<h3 class="infograf__text"><?php the_title(); ?></h3>
							<img src="<?php echo get_template_directory_uri(); ?>/img/icons/white_circle.svg" alt="" class="infograf__img" />
							<img src="<?php echo get_template_directory_uri(); ?>/img/icons/short_line.svg" alt="" class="infograf__line" />

							<p class="infograf__number"><?php echo $formatted_counter; ?></p>

						<?php
						}
						?>
					</div>
			<?
					$counter++;

				endwhile;

			endif;
			wp_reset_postdata();
			?>
		</div>
	</div>
</section>