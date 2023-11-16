<section class="info _not-mt">
	<div class="info__container">
		<h1 class="info__maintitle"><?php the_title(); ?></h1>
		<div class="info__news news">

			<?php
			$args = array(
				'post_type' => 'post',
				'category_name' => 'info',
				'posts_per_page' => 4,

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

				wp_pagenavi(array('query' => $query));


				$args = array(
					'screen_reader_text' => '&nbsp;',
					'show_all'           => false,
					'prev_next'          => true,
					'prev_text'          => __('←'),
					'next_text'          => __('→'),
					'type'               => 'post',
					'category_name' => 'info',
					'add_args'           => false,
					'add_fragment'       => '',
					'end_size'     => 1,
					'mid_size'     => 2,
				);

				$pagination = get_the_posts_pagination($args);

				var_dump($pagination);

				the_posts_pagination();
			endif;
			wp_reset_postdata();
			?>

		</div>
	</div>
</section>