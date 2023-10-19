<section class="good">
	<div class="good__container">
		<div class="good__item good-question">
			<h2 class="good-question__subtitle">
				<?php the_field('good_subtitle'); ?>
			</h2>
			<div class="good-question__text">
				<?php the_field('good_text'); ?>
			</div>
		</div>
		<div class="good__item good-answers">
			<?php

			$args = array(
				'post_type' => 'post',
				'category_name' => 'answers',
				'posts_per_page' => -1
			);

			$query = new WP_Query($args);

			if ($query->have_posts()) :
				while ($query->have_posts()) : $query->the_post();
					$custom_link = get_field('good_link'); // Получение значения пользовательского поля 'good_link'
			?>
					<div class="good-answers__item">
						<div class="good-answer__subtitle"><?php the_title(); ?></div>
						<div class="good-answer__text"><?php the_content(); ?></div>
						<?php if ($custom_link) : ?>
							<a href="<?php echo esc_url($custom_link); ?>" title="<?php the_title(); ?>" class="good-answer__link"></a>
						<?php endif; ?>
					</div>
			<?php
				endwhile;
			endif;
			wp_reset_postdata();


			?>
		</div>
	</div>
</section>