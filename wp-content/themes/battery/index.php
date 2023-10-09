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
	<?php get_template_part('sections_templates/good'); ?>
	<?php get_template_part('sections_templates/goals'); ?>
	<?php get_template_part('sections_templates/proposal'); ?>
	<?php get_template_part('sections_templates/ustobeus'); ?>
	<?php get_template_part('sections_templates/weworkwith'); ?>	
</main>
<?
get_footer();
?>