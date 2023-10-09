<?
/*
Template Name: About
*/
get_header(); ?>

<main class="main">
	<section class="ustobeus ustobeus_back scroll">
		<div class="ustobeus__container">

			<div class="ustobeus__content">
				<h2 class="ustobeus__title"><?php echo get_field('ustobeus_title'); ?></h2>
				<div class="ustobeus__facts">
					<?php
					$args = array(
						'post_type' => 'post',  // Укажите здесь тип вашей записи, если это не посты
						'category_name' => 'ustobeus', // Укажите здесь название рубрики "goals"
						'posts_per_page' => -1  // Укажите, сколько записей вы хотите вывести, -1 для всех записей
					);

					$query = new WP_Query($args);

					if ($query->have_posts()) :
						while ($query->have_posts()) : $query->the_post();
					?>
							<div class="ustobeus__fact fact">
								<div class="fact__description"><?php echo get_field('ustobeus_direction'); ?></div>
								<div class="fact__content">
									<div class="fact__number"><?php the_title(); ?></div>
									<div class="fact__text"><?php the_content(); ?></div>
								</div>
							</div>
					<?php
						endwhile;
					endif;
					wp_reset_postdata();
					?>
					<!-- <div class="ustobeus__fact fact">
						<div class="fact__description">has over</div>
						<div class="fact__content">
							<div class="fact__number">10</div>
							<div class="fact__text">Years of Experience</div>
						</div>
					</div>
					<div class="ustobeus__fact fact">
						<p class="fact__description">deal with</p>
						<div class="fact__content">
							<p class="fact__number">1k</p>
							<p class="fact__text">
								Electric Batteries On Different Types
							</p>
						</div>
					</div> -->
				</div>
				<div class="ustobeus__text">
					<?php echo get_field('ustobeus_text'); ?>
				</div>
				<div class="ustobeus__button button button_fill">
					<a href="aboutUs.html" class="button__text">Contact Us</a>
				</div>
			</div>
			<div class="scene">
				<div data-depth="0.6">
					<img src="<?php echo get_template_directory_uri(); ?>/img/icons/new_planet.svg" alt="<?php echo get_field('proposal_title'); ?>" class="ustobeus__img" />
				</div>
			</div>
		</div>
	</section>
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
								<img src="<?php echo get_template_directory_uri(); ?>/img/icons/white_circle.svg" alt="" class="infograf__img" />
								<img src="<?php echo get_template_directory_uri(); ?>/img/icons/short_line.svg" alt="" class="infograf__line" />
								<h3 class="infograf__text"><?php the_title(); ?></h3>

							<?php } else { ?>

								<h3 class="infograf__text"><?php the_title(); ?></h3>
								<img src="<?php echo get_template_directory_uri(); ?>/img/icons/short_line.svg" alt="" class="infograf__line" />
								<img src="<?php echo get_template_directory_uri(); ?>/img/icons/white_circle.svg" alt="" class="infograf__img" />
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

	<section class="goals scroll">
		<div class="goals__container">
			<h2 class="goals__title title_center"><?php echo get_field('goals_title'); ?></h2>
			<div class="goals__icons icons">
				<?php
				$args = array(
					'post_type' => 'post',  // Укажите здесь тип вашей записи, если это не посты
					'category_name' => 'goals', // Укажите здесь название рубрики "goals"
					'posts_per_page' => -1  // Укажите, сколько записей вы хотите вывести, -1 для всех записей
				);

				$query = new WP_Query($args);

				if ($query->have_posts()) :
					while ($query->have_posts()) : $query->the_post();
				?>
						<div class="icons__item item-icon scroll">
							<img src="<?php the_field('icon'); ?>" alt="<?php echo the_title(); ?>" class="item-icons__icon" />
							<div class="item-icon__subtitle"><?php the_title(); ?></div>
							<div class="item-icon__text"> <?php the_content(); ?> </div>
						</div>

				<?php
					endwhile;
				endif;
				wp_reset_postdata();
				?>

			</div>
		</div>
	</section>
	<section class="proposal">
		<div class="proposal__content">
			<div class="proposal__title"><?php echo get_field('proposal_title'); ?></div>
			<div class="proposal__text">
				<?php echo get_field('proposal_text'); ?>
			</div>
			<div class="proposal__button button button_border">
				<a href="contact.html" class="button__text">contact us</a>
			</div>
		</div>
	</section>
	<section class="whyus scroll">
		<div class="whyus__container">
			<div class="whyus__lcolumn">
				<div class="whyus__title"><?php echo get_field('whyus_title'); ?></div>
				<div class="whyus__text">
					<?php echo get_field('whyus_text_right'); ?>
				</div>
			</div>
			<div class="whyus__rcolumn">
				<div class="whyus__list-item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/icons/blueCircle.svg" alt="" class="whyus__circle" />
					<div class="whyus__text">
						<?php echo get_field('whyus_text_left_up'); ?>
					</div>
				</div>
				<div class="whyus__list-item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/icons/blueCircle.svg" alt="" class="whyus__circle" />
					<div class="whyus__text">
						<?php echo get_field('whyus_text_left'); ?>
					</div>
				</div>
				<div class="whyus__important important">
					<img src="<?php echo get_template_directory_uri(); ?>/img/icons/attention.svg" alt="" class="important__icon" />
					<div class="important__text">
						<?php echo get_field('whyus_text_left_important'); ?>
					</div>
				</div>
				<div class="whyus__list-item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/icons/blueCircle.svg" alt="" class="whyus__circle" />
					<div class="whyus__text">
						<?php echo get_field('whyus_text_left_down'); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="shortpar scroll">
		<div class="shortpar__container infocard">
			<?php
			$args = array(
				'post_type' => 'post',  // Укажите здесь тип вашей записи, если это не посты
				'category_name' => 'shortpar', // Укажите здесь название рубрики "shortpar"
				'posts_per_page' => -1  // Укажите, сколько записей вы хотите вывести, -1 для всех записей
			);

			$query = new WP_Query($args);

			if ($query->have_posts()) :
				while ($query->have_posts()) : $query->the_post();
			?>
					<div class="infocard__item">
						<img src="<?php the_field('shortpar_icon'); ?>" alt="<?php echo the_title(); ?>" class="infocard__icon" />
						<div class="infocard__content">
							<div class="infocard__subtitle"><?php echo the_title(); ?></div>
							<div class="infocard__text">
								<?php the_content(); ?>
							</div>
						</div>
					</div>


			<?php
				endwhile;
			endif;
			wp_reset_postdata();
			?>

		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/img/icons/back_circle2.svg" alt="" class="shortpar__backimg" />
	</section>
</main>
<?
get_footer();
?>