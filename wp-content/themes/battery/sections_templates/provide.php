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