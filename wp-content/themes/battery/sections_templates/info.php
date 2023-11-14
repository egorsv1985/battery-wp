<section class="info _not-mt">
	<div class="info__container">
		<h1 class="info__maintitle"><?php the_title(); ?></h1>
		<div class="info__news new">


			<?php
			$args = array(
				'post_type' => 'post',  // Укажите здесь тип вашей записи, если это не посты
				'category_name' => 'info', // Укажите здесь название рубрики "info"
				'posts_per_page' => 4  // Укажите, сколько записей вы хотите вывести, -1 для всех записей
			);

			$query = new WP_Query($args);

			if ($query->have_posts()) :
				while ($query->have_posts()) : $query->the_post();
			?>
					<article class="new__item">
						<a href="<?php the_permalink(); ?>">
							<img src="<?php the_field('img_new_small'); ?>" alt="<?php the_title(); ?>" class="new__img" />
							<h2 class="new__header">
								<?php the_title(); ?>
							</h2>
							<p class="new__date"><?php the_modified_date(); ?></p>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="new__link"></a>
						</a>
					</article>
			<?php
				endwhile;
				the_posts_pagination(array(
					'mid_size'  => 2,
					'prev_text' => __("Предыдущая", 'textdomain'),
					'next_text' => __('Следующая', 'textdomain'),
					'allow_empty' => true,
				));
			endif;
			wp_reset_postdata();
			?>
			<?php wp_pagenavi(); ?>
		</div>
	</div>
</section>
<?
