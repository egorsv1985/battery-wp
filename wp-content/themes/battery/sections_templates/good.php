<section class="good scroll">
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
				'post_type' => 'post',  // Укажите здесь тип вашей записи, если это не посты
				'category_name' => 'answers', // Укажите здесь название рубрики "answers"
				'posts_per_page' => -1  // Укажите, сколько записей вы хотите вывести, -1 для всех записей
			);

			$query = new WP_Query($args);

			if ($query->have_posts()) :
				while ($query->have_posts()) : $query->the_post();
			?>
					<div class="good-answers__item good-answer">
						<div class="good-answer__subtitle"><?php the_title(); ?></div>
						<div class="good-answer__text"><?php the_content(); ?></div>
						<a href="<?php the_field('good_link'); ?>" title="<?php the_title(); ?>" class="good-answer__link"></a>
					</div>
			<?php
				endwhile;
			endif;
			wp_reset_postdata();
			?>
		</div>
	</div>
</section>