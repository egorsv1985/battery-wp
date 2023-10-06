<?
/*
Template Name: Шаблон главной страницы
*/

get_header(); ?>
<main class="main">
	<section class="screen1">
		<div class="screen1__container">
			<div class="screen1__wrapper">
				<h1 class="screen1__maintitle"><?php echo get_field('screen_title'); ?> </h1>
				<div class="screen1__text"><?php the_field('screen_text'); ?> </div>
				<div class="screen1__button button button_fill">
					<a href="contact.html" class="button__text">contact us</a>
				</div>
			</div>
		</div>
		<div class="screen1__background">
			<div class="scene">
				<div data-depth="0.3">
					<div class="screen1__img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/icons/g12.svg" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
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
							<a href="<?php the_permalink(); ?>" class="good-answer__link"></a>
						</div>
				<?php
					endwhile;
				endif;
				wp_reset_postdata();
				?>
			</div>

			<!-- <div class="good__item good-answers">
				<div class="good-answers__item good-answer">
					<h2 class="good-answer__subtitle">Recycling</h2>
					<p class="good-answer__text">
						is a fantastic method to contribute to environmental protection.
					</p>
					<a href="aboutUs.html" class="good-answer__link"></a>
				</div>
				<div class="good-answers__item good-answer">
					<h2 class="good-answer__subtitle">Each battery</h2>
					<p class="good-answer__text">
						will be disassembled, and the components will be repurposed to
						create new products.
					</p>
					<a href="aboutUs.html" class="good-answer__link"></a>
				</div>
			</div> -->
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
				<!-- <div class="icons__item item-icon scroll">
              <img src="./img/icon1.svg" alt="" class="item-icons__icon" />
              <h3 class="item-icon__subtitle">Our today’s output</h3>
              <p class="item-icon__text">
                must be better than yesterday, and tomorrow has to be better
                than today
              </p>
            </div>
            <div class="icons__item item-icon scroll">
              <img src="./img/icon2.svg" alt="" class="item-icons__icon" />
              <h3 class="item-icon__subtitle">We are committed</h3>
              <p class="item-icon__text">
                to treat our associates, suppliers and customers respectfully
              </p>
            </div>
            <div class="icons__item item-icon scroll">
              <img src="./img/icon3.svg" alt="" class="item-icons__icon" />
              <h3 class="item-icon__subtitle">Every person</h3>
              <p class="item-icon__text">
                in the organization must put in the shoes of project owner and
                end-users
              </p>
            </div>
            <div class="icons__item item-icon scroll">
              <img src="./img/icon4.svg" alt="" class="item-icons__icon" />
              <h3 class="item-icon__subtitle">Yet each of us</h3>
              <p class="item-icon__text">
                always willing to learn a new knowledge and skills
              </p>
            </div>
            <div class="icons__item item-icon scroll">
              <img src="./img/icon5.svg" alt="" class="item-icons__icon" />
              <h3 class="item-icon__subtitle">Team work</h3>
              <p class="item-icon__text">
                is the way we carry out business processes
              </p>
            </div>
            <div class="icons__item item-icon scroll">
              <img src="./img/icon6.svg" alt="" class="item-icons__icon" />
              <h3 class="item-icon__subtitle">All we do</h3>
              <p class="item-icon__text">
                is to fulfill our customer’s need and wants
              </p>
            </div> -->
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

	<section class="ustobeus ustobeus_back scroll">
		<div class="ustobeus__container">
			<div class="scene">
				<div data-depth="0.6">
					<img src="<?php echo get_template_directory_uri(); ?>/img/icons/new_planet.svg" alt="<?php echo get_field('proposal_title'); ?>" class="ustobeus__img" />
				</div>
			</div>
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
					<a href="aboutUs.html" class="button__text">Learn more</a>
				</div>
			</div>
		</div>
	</section>
	<section class="weworkwith scroll">
		<div class="weworkwith__container">
			<h2 class="weworkwith__title"><?php echo get_field('weworkwith_title'); ?></h2>
			<div class="weworkwith__text">
				<?php echo get_field('weworkwith_text'); ?>
			</div>
			<div class="weworkwith__cards cards">
				<?php
				$args = array(
					'post_type' => 'post',
					'category_name' => 'weworkwith',
					'posts_per_page' => -1,
					'orderby' => 'modified', // Сортировка по дате создания
					'order' => 'ASC', // Порядок сортировки: DESC (убывание) или ASC (возрастание)
				);

				$query = new WP_Query($args);

				if ($query->have_posts()) :
					$count = 0; // Счетчик элементов
					$left_column_open = false; // Флаг для отслеживания открытой левой колонки
					$right_column_open = false; // Флаг для отслеживания открытой правой колонки
					while ($query->have_posts()) : $query->the_post();
						if ($count < 2) {
							// Открываем левую колонку, если она еще не открыта
							if (!$left_column_open) {
								echo '<div class="cards__column">';
								$left_column_open = true;
							}
							// Элементы для левой колонки
				?>
							<div class="cards__item card">
								<img src="<?php the_field('weworkwith_icon'); ?>" alt="<?php echo get_field('weworkwith_title'); ?>" class="card__icon" />
								<div class="card__content">
									<h3 class="card__subtitle"><?php the_title(); ?></h3>
									<div class="card__text">
										<?php the_content(); ?>
									</div>
									<a href="templatePage.html" class="card__link"></a>
								</div>
							</div>
						<?php
						} else {
							// Закрываем левую колонку перед элементами правой колонки
							if ($left_column_open) {
								echo '</div>';
								$left_column_open = false;
							}
							// Открываем левую колонку, если она еще не открыта
							if (!$right_column_open) {
								echo '<div class="cards__column">';
								$right_column_open = true;
							}
							// Элементы для правой колонки
						?>
							<div class="cards__item card">
								<img src="<?php the_field('weworkwith_icon'); ?>" alt="<?php echo get_field('weworkwith_title'); ?>" class="card__icon" />
								<div class="card__content">
									<h3 class="card__subtitle"><?php the_title(); ?></h3>
									<div class="card__text">
										<?php the_content(); ?>
									</div>
									<a href="templatePage.html" class="card__link"></a>
								</div>
							</div>
				<?php
						}
						$count++;
					endwhile;
					// Закрываем открытую левую колонку, если она еще открыта
					if ($left_column_open) {
						echo '</div>';
					}
					// Закрываем правую колонку перед элементами правой колонки
					if ($right_column_open) {
						echo '</div>';
						$right_column_open = false;
					}
				endif;
				wp_reset_postdata();
				?>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
?>