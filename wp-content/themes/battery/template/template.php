<?
/*
Template Name: Template page
*/



get_header(); ?>
<main class="main">
	<section class="maininfo">
		<div class="maininfo__container">
			<div class="maininfo__wrapper">
				<h1 class="maininfo__maintitle"><?php the_title(); ?></h1>
				<div class="maininfo__text">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</section>



	<section class="addinfos scroll">
		<div class="addinfos__container">
			<div class="addinfos__wrapper">
				<?php
				$args = array(
					'tax_query' => array(
						array(
							'taxonomy' => 'business', // Замените на имя вашей таксономии
							'field' => 'slug',
							'terms' => 'business' // Замените на нужный вам термин таксономии
						)
					),
					'posts_per_page' => -1 // Укажите, сколько записей вы хотите вывести, -1 для всех записей
				);

				$query = new WP_Query($args);

				if ($query->have_posts()) :
					while ($query->have_posts()) : $query->the_post();
				?>
						<div class="addinfos__item addinfo">
							<div class="addinfo__subtitle"><?php the_title(); ?></div>
							<div class="addinfo__text"><?php the_content(); ?></div>
						</div>
				<?php
					endwhile;
				endif;
				wp_reset_postdata();
				?>
			</div>
		</div>
	</section>




	<!-- <section class="addinfos scroll">
		<div class="addinfos__container">
			<div class="addinfos__wrapper">

				<div class="addinfos__item addinfo">
					<h3 class="addinfo__subtitle">simple practice</h3>
					<p class="addinfo__text">
						We make the practice simple, uncomplicated and easy for all
						business owners, whether they are a small business or large.
					</p>
				</div>
				<div class="addinfos__item addinfo">
					<h3 class="addinfo__subtitle">experienced members</h3>
					<p class="addinfo__text">
						We utilize our skilled, experienced members of our team to
						arrange and pick up unwanted electric batteries nationwide.
					</p>
				</div>
			</div>
		</div>
	</section> -->
	<section class="choose _margin-up scroll">
		<div class="choose__container">
			<div class="choose__content">
				<div class="choose__title"> <?php echo get_field('choose_title'); ?> </div>
				<div class="choose__text"> <?php echo get_field('choose_text'); ?> </div>
				<div class="choose__button button button_fill">
					<a href="./contact.html" class="button__text">Schedule A Battery Pick Up Today</a>
				</div>
			</div>
			<div class="choose__variants variants">
				<div class="variants__graph graph">
					<img src="<?php echo get_template_directory_uri(); ?>/img/icons/small_circle.svg" alt="" class="graph__smcircle _sm1" />
					<div class="graph__middle">
						<img src="<?php echo get_template_directory_uri(); ?>/img/icons/big_circle.svg" alt="" class="graph__bigcircle" />
						<img src="<?php echo get_template_directory_uri(); ?>/img/icons/small_circle.svg" alt="" class="graph__smcircle _sm2" />
					</div>
					<img src="./img/small_circle.svg" alt="" class="graph__smcircle _sm3" />
				</div>
				<div class="variants__items">
					<?php
					$args = array(
						'post_type' => 'post',  // Укажите здесь тип вашей записи, если это не посты
						'category_name' => 'choose', // Укажите здесь название рубрики "choose"
						'posts_per_page' => -1  // Укажите, сколько записей вы хотите вывести, -1 для всех записей
					);

					$query = new WP_Query($args);

					if ($query->have_posts()) :
						while ($query->have_posts()) : $query->the_post();
					?>
							<div class="variants__item variant">
								<img src="<?php the_field('choose_icon'); ?>" alt="<?php echo the_title(); ?>" class="variant__icon" />
								<div class="variant__content">
									<div class="variant__subtitle"><?php the_title(); ?></div>
									<div class="variant__text"> <?php the_content(); ?> </div>
								</div>
							</div>
					<?php
						endwhile;
					endif;
					wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
	</section>
	<!-- <section class="choose _margin-up scroll">
		<div class="choose__container">
			<div class="choose__content">
				<div class="choose__title">
					Choose to buy, sell or recycle with Recycling Electric Batteries
				</div>
				<p class="choose__text">
					Uncover amazing possibilities to buy, sell or recycle batteries at
					Recycling Electric Batteries.
				</p>
				<p class="choose__text">
					Join our exceptional system that specialize in safe, responsible
					and earth friendly way to handle recycling of batteries. Get in
					touch with us to learn more.
				</p>
				<div class="choose__button button button_fill">
					<a href="./contact.html" class="button__text">Schedule A Battery Pick Up Today</a>
				</div>
			</div>
			<div class="choose__variants variants">
				<div class="variants__graph graph">
					<img src="./img/small_circle.svg" alt="" class="graph__smcircle _sm1" />
					<div class="graph__middle">
						<img src="./img/big_circle.svg" alt="" class="graph__bigcircle" />
						<img src="./img/small_circle.svg" alt="" class="graph__smcircle _sm2" />
					</div>
					<img src="./img/small_circle.svg" alt="" class="graph__smcircle _sm3" />
				</div>
				<div class="variants__items">
					<div class="variants__item variant">
						<img src="./img/buy.svg" alt="" class="variant__icon" />
						<div class="variant__content">
							<h3 class="variant__subtitle">Buy</h3>
							<p class="variant__text">
								Choose us to help you find high quality batteries, improve
								your manufacturing, or refurbishing process.
							</p>
						</div>
					</div>
					<div class="variants__item variant">
						<img src="./img/sell.svg" alt="" class="variant__icon" />
						<div class="variant__content">
							<h3 class="variant__subtitle">Sell</h3>
							<p class="variant__text">
								Earn more by selling your batteries to Recycling Electric
								Batteries.
							</p>
						</div>
					</div>
					<div class="variants__item variant">
						<img src="./img/up.svg" alt="" class="variant__icon" />
						<div class="variant__content">
							<h3 class="variant__subtitle">Partner Up with Us</h3>
							<p class="variant__text">
								Become our partner to buy, sell and recycle batteries and
								let's make this earth a little bit greener.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<section class="provide scroll">
		<div class="provide__container">
			<div class="provide__lcolumn">
				<h2 class="provide__title"> <?php echo get_field('provide_title'); ?> </h2>
				<div class="provide__text"><?php echo get_field('provide_text_left_up'); ?></div>
				<div class="provide__item">
					<div class="provide__subtitle"><?php echo get_field('provide_subtitle_left'); ?></div>
					<div class="provide__text"> <?php echo get_field('provide_text_left_down'); ?> </div>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/icons/row-line.svg" alt="line" class="provide__line _line-media">
			</div>
			<div class="provide__rcolumn">
				<div class="provide__item">
					<div class="provide__subtitle"><?php echo get_field('provide_subtitle_right_up'); ?></div>
					<div class="provide__text"> <?php echo get_field('provide_text_right_up'); ?> </div>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/icons/row-line.svg" alt="line" class="provide__line">
				<div class="provide__item">
					<div class="provide__subtitle"><?php echo get_field('provide_subtitle_right_down'); ?></div>
					<div class="provide__text"> <?php echo get_field('provide_text_right_down'); ?> </div>
				</div>
			</div>
		</div>
	</section>
</main>
<?
get_footer();
?>