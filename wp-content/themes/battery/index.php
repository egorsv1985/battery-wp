<?
/*
Template Name: Шаблон главной страницы
*/

get_header(); ?>
<main class="main">
	<section class="screen1">
		<div class="screen1__container">
			<div class="screen1__wrapper">
				<h1 class="screen1__maintitle">Recycling Electric Batteries<?php the_field('screen_title'); ?> </h1>
				<div class="screen1__text">Recycling Electric Batteries is a goal-driven company moved by our purpose, guided by values and determination to deliver what we promise and guarantee to all of our customers.<?php the_field('screen_text'); ?> </div>
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
					<?php the_field('good_subtitle'); ?>Why is battery recycling so crucial?
				</h2>
				<div class="good-question__text">
					<?php the_field('good_text'); ?>In actuality, each individual in the USA consumes 50 batteries a
					year!
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
			<h2 class="goals__title title_center">Our goals</h2>
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
							<img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon1.svg" alt="" class="item-icons__icon" />
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
			<p class="proposal__title">Start Recycling Now</p>
			<p class="proposal__text">
				Recycle With Recycling Electric Batteries And Make Your Environment
				A Better Place To Live In
			</p>
			<div class="proposal__button button button_border">
				<a href="contact.html" class="button__text">contact us</a>
			</div>
		</div>
	</section>
	<section class="ustobeus ustobeus_back scroll">
		<div class="ustobeus__container">
			<div class="scene">
				<div data-depth="0.6">
					<img src="<?php echo get_template_directory_uri(); ?>/img/icons/new_planet.svg" alt="" class="ustobeus__img" />
				</div>
			</div>
			<div class="ustobeus__content">
				<h2 class="ustobeus__title">That what makes us to be us</h2>
				<div class="ustobeus__facts">
					<div class="ustobeus__fact fact">
						<p class="fact__description">has over</p>
						<div class="fact__content">
							<p class="fact__number">10</p>
							<p class="fact__text">Years of Experience</p>
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
					</div>
				</div>
				<p class="ustobeus__text">
					We want to provide you with all the resources you need to
					confidently recycle your battery/cells.
				</p>
				<p class="ustobeus__text">
					Learn more about our expertise and how we can help you make this
					world just a little bit greener. Feel free to contact us if you
					have any questions.
				</p>
				<div class="ustobeus__button button button_fill">
					<a href="aboutUs.html" class="button__text">Learn more</a>
				</div>
			</div>
		</div>
	</section>
	<section class="weworkwith scroll">
		<div class="weworkwith__container">
			<h2 class="weworkwith__title">We work with</h2>
			<p class="weworkwith__text">
				Our priority is offering quality service and solutions to our
				customers. We are dedicated to providing a variety of ways to invest
				in environmentally safe battery recycling.
			</p>
			<div class="weworkwith__cards cards">
				<div class="cards__column">
					<div class="cards__item card">
						<img src="<?php echo get_template_directory_uri(); ?>/img/icons/weWork1.svg" alt="" class="card__icon" />
						<div class="card__content">
							<h3 class="card__subtitle">Business Owners</h3>
							<p class="card__text">
								Recycling Electric batteries work with business owners all
								over the US. We serve business owners to combat their common
								problem to disposing.
							</p>
							<a href="templatePage.html" class="card__link"></a>
						</div>
					</div>
					<div class="cards__item card">
						<img src="<?php echo get_template_directory_uri(); ?>/img/icons/weWork2.svg" alt="" class="card__icon" />
						<div class="card__content">
							<h3 class="card__subtitle">Manufacturers</h3>
							<p class="card__text">
								We work collectively with top manufactures to guarantee safe
								recycling and strive to create our environment a better
								place to live in.
							</p>
							<a href="" class="card__link"></a>
						</div>
					</div>
				</div>
				<div class="cards__item card">
					<img src="<?php echo get_template_directory_uri(); ?>/img/icons/weWork3.svg" alt="" class="card__icon" />
					<div class="card__content">
						<h3 class="card__subtitle">Salvage Yards</h3>
						<p class="card__text">
							Recycling Electric batteries work with business owners all
							over the US.
						</p>
						<a href="" class="card__link card__link_up"></a>
					</div>
				</div>
				<div class="cards__item card">
					<img src="<?php echo get_template_directory_uri(); ?>/img/icons/weWork4.svg" alt="" class="card__icon" />
					<div class="card__content">
						<h3 class="card__subtitle">Refurbishers</h3>
						<p class="card__text">
							Recycling Electric batteries work with business owners all
							over the US.
						</p>
						<a href="" class="card__link card__link_up"></a>
					</div>
				</div>
				<div class="cards__item card">
					<img src="<?php echo get_template_directory_uri(); ?>/img/icons/weWork5.svg" alt="" class="card__icon" />
					<div class="card__content">
						<h3 class="card__subtitle">Recycling Facilities</h3>
						<p class="card__text">
							Recycling Electric batteries work with business owners all
							over the US.
						</p>
						<a href="" class="card__link card__link_up"></a>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>