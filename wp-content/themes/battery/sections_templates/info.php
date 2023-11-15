<section class="info _not-mt">
	<div class="info__container">
		<h1 class="info__maintitle"><?php the_title(); ?></h1>
		<div class="info__news news">

			<?php
			$args = array(
				'post_type' => 'post',
				'category_name' => 'info',
				'posts_per_page' => 4,
				'paged' => get_query_var('paged') ? get_query_var('paged') : 1 // добавляем текущую страницу
			);

			$query = new WP_Query($args);

			if ($query->have_posts()) :
				while ($query->have_posts()) : $query->the_post();
			?>
					<article class="news__item">
						<a href="<?php the_permalink(); ?>" class="news__box">

							<img src="<?php the_field('img_new_small'); ?>" alt="<?php the_title(); ?>" class="news__img" />
							<div class="news__content">
								<p class="news__date"><?php the_modified_date(); ?></p>
								<h2 class="news__subtitle">
									<?php the_title(); ?>
								</h2>
								<span class="news__link"></span>
							</div>
						</a>
					</article>
			<?php
				endwhile;

				// Добавляем пагинацию
				custom_pagination(); // используйте функцию, которую я предложил в предыдущем ответе

			endif;
			wp_reset_postdata();
			?>

		</div>
	</div>
</section>