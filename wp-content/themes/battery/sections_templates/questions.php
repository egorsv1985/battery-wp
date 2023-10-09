<section class="questions _not-mt">
	<div class="questions__container">
		<div class="questions-lcolumn">
			<h2 class="questions__title"><?php echo get_field('faq_title_left'); ?></h2>
			<div class="questions__accordion accordion">
				<?php
				$args = array(
					'post_type' => 'post',
					'category_name' => 'faq',
					'posts_per_page' => -1
				);

				$query = new WP_Query($args);

				if ($query->have_posts()) :
					$counter = 1; // Счетчик элементов
					$total_posts = $query->found_posts; // Общее количество записей

					while ($query->have_posts()) : $query->the_post();
						$is_scroll_class = ''; // Переменная для класса scroll

						// Проверяем, является ли текущий элемент одним из последних четырех
						if ($counter > ($total_posts - 4)) {
							$is_scroll_class = ' scroll';
						}
				?>
						<div class="accordion__item accordion-item<?php echo $is_scroll_class; ?>">
							<div class="accordion-item__header">
								<h3 class="accordion-item__subtitle">
									<?php the_title(); ?>
								</h3>
							</div>
							<div class="accordion-item__body">
								<div class="accordion-item__content"> <?php the_content(); ?> </div>
							</div>
						</div>
				<?php
						$counter++;
					endwhile;
				endif;
				wp_reset_postdata();
				?>
			</div>
		</div>
		<div class="questions-rcolumn">
			<h2 class="questions__title"><?php echo get_field('faq_title_right'); ?></h2>
			<div class="questions__accordion accordion">
				<?php
				$args = array(
					'post_type' => 'post',
					'category_name' => 'questions',
					'posts_per_page' => -1
				);

				$query = new WP_Query($args);

				if ($query->have_posts()) :
					while ($query->have_posts()) : $query->the_post();

				?>
						<div class="accordion__item accordion-item accordion-item_blue">
							<div class="accordion-item__header accordion-item__header_blue">
								<h3 class="accordion-item__subtitle">
									<?php the_title(); ?>
								</h3>
							</div>
							<div class="accordion-item__body">
								<div class="accordion-item__content"> <?php the_content(); ?> </div>
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