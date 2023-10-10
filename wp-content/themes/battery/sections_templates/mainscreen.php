<section class="types-mainscreen">
	<div class="types-mainscreen__container">
		<h1 class="types-mainscreen__maintitle"><?php the_title(); ?></h1>
		<div class="types-mainscreen__content">
			<div class="types-mainscreen-lcolumn">
				<div class="types-mainscreen__text"> <?php the_content(); ?> </div>
				<div class="types-mainscreen__attention attention">
					<img src="<?php echo get_field('mainscreen_icon'); ?>" alt="<?php echo get_field('mainscreen_attention'); ?>" class="attention__icon" />
					<div class="attention__text"> <?php echo get_field('mainscreen_attention'); ?> </div>
				</div>
			</div>
			<div class="types-mainscreen-rcolumn">
				<div class="types-mainscreen__numberfacts numberfacts">
					<?php
					$args = array(
						'post_type' => 'post',  // Укажите здесь тип вашей записи, если это не посты
						'category_name' => 'numberfact', // Укажите здесь название рубрики "numberfact"
						'posts_per_page' => -1  // Укажите, сколько записей вы хотите вывести, -1 для всех записей
					);

					$query = new WP_Query($args);

					if ($query->have_posts()) :
						while ($query->have_posts()) : $query->the_post();
					?>
							<div class="numberfacts__item numberfact">
								<div class="numberfact__info">
									<div class="numberfact__number"><?php the_title(); ?></div>
									<div class="numberfact__description"><?php echo get_field('numberfact_text'); ?></div>
								</div>
								<div class="numberfact__text"> <?php the_content(); ?> </div>
							</div>
					<?php
						endwhile;
					endif;
					wp_reset_postdata();
					?>

				</div>
				<div class="types-mainscreen__text"> <?php echo get_field('mainscreen_text'); ?> </div>
			</div>
		</div>
	</div>
</section>