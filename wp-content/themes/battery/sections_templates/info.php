<section class="info _not-mt">
	<div class="info__container">
		<h1 class="info__maintitle"><?php the_title(); ?></h1>
		<div class="info__news news">

			<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

			$args = array(
				'post_type'      => 'post',
				'category_name'  => 'info',
				'posts_per_page' => -1,
				'paged'          => $paged,
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
				wp_reset_postdata();
				?>
		</div>

		<div class="pagination">
			<?php
				$total_pages = $query->max_num_pages;

				// Показываем стрелку "назад" всегда, но делаем ее отключенной на первой странице
				if (get_previous_posts_link()) {
					echo '<a class="prev page-numbers" href="' . esc_url(get_previous_posts_page_link()) . '"></a>';
				} else {
					echo '<a class="prev page-numbers pagination-disabled"></a>';
				}

				// Выводим текущую страницу
				echo '<span class="current page-numbers">' . max(1, get_query_var('paged')) . '</span>';

				// Показываем стрелку "вперед" и делаем ее отключенной на последней странице
				if ($paged < $total_pages) {
					echo '<a class="next page-numbers" href="' . esc_url(get_next_posts_page_link()) . '"></a>';
				} else {
					echo '<a class="next page-numbers pagination-disabled"></a>';
				}
			?>
		</div>

	<?php endif; ?>
	</div>
</section>