<section class="post ">
	<div class="post__box-img" style="background: url(<?php the_field('img_new_large'); ?>) no-repeat center / cover;">


	</div>
	<div class="post__container">
		<h1 class="post__title"><?php the_title(); ?></h1>
		<p class="post__date"><?php the_modified_date(); ?></p>
		<div class="post__content">
			<div class="post__text">

				<?php the_content(); ?>
			</div>
			<div class="sidebar">
				<h2 class="sidebar__subtitle">Recommended</h2>

				<?php
				// Дополнительный запрос для рекомендованных записей (последних 3)
				$recommended_args = array(
					'post_type'      => 'post',
					'category_name'  => 'info',
					'posts_per_page' => 3,
					'orderby'        => 'date',
					'order'          => 'DESC',
				);

				$recommended_query = new WP_Query($recommended_args);

				if ($recommended_query->have_posts()) :
					while ($recommended_query->have_posts()) : $recommended_query->the_post();
				?>
						<article class="recommended__item">
							<p class="recommended__date"> <?php the_modified_date(); ?></p>
							<a href="<?php the_permalink(); ?>">
								<h2 class="recommended__text"><?php the_title(); ?></h2>
							</a>
						</article>
				<?php
					endwhile;

					// Сброс данных запроса
					wp_reset_postdata();
				endif;
				?>
			</div>
		</div>
	</div>
</section>