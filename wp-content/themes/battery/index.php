<?
/*
Template Name: Шаблон главной страницы
*/

get_header(); ?>
<main class="main">
	<section class="screen1">
		<div class="screen1__container">
			<div class="screen1__wrapper">
				<h1 class="screen1__maintitle">Recycling Electric Batteries<?php the_field('title'); ?> </h1>
				<p class="screen1__text">Recycling Electric Batteries is a goal-driven company moved by our purpose, guided by values and determination to deliver what we promise and guarantee to all of our customers.<?php the_field('text'); ?> </p>
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
					<?php the_field('subtitle'); ?>Why is battery recycling so crucial?
				</h2>
				<p class="good-question__text">
					<?php the_field('text'); ?>In actuality, each individual in the USA consumes 50 batteries a
					year!
				</p>
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


</main>