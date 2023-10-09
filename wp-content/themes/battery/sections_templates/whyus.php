<section class="whyus scroll">
	<div class="whyus__container">
		<div class="whyus__lcolumn">
			<div class="whyus__title"><?php echo get_field('whyus_title'); ?></div>
			<div class="whyus__text"> <?php echo get_field('whyus_text_right'); ?> </div>
		</div>
		<div class="whyus__rcolumn">
			<div class="whyus__list-item">
				<img src="<?php echo get_template_directory_uri(); ?>/img/icons/blueCircle.svg" alt="" class="whyus__circle" />
				<div class="whyus__text"> <?php echo get_field('whyus_text_left_up'); ?> </div>
			</div>
			<div class="whyus__list-item">
				<img src="<?php echo get_template_directory_uri(); ?>/img/icons/blueCircle.svg" alt="" class="whyus__circle" />
				<div class="whyus__text"> <?php echo get_field('whyus_text_left'); ?> </div>
			</div>
			<div class="whyus__important important">
				<img src="<?php echo get_template_directory_uri(); ?>/img/icons/attention.svg" alt="" class="important__icon" />
				<div class="important__text"> <?php echo get_field('whyus_text_left_important'); ?> </div>
			</div>
			<div class="whyus__list-item">
				<img src="<?php echo get_template_directory_uri(); ?>/img/icons/blueCircle.svg" alt="" class="whyus__circle" />
				<div class="whyus__text"> <?php echo get_field('whyus_text_left_down'); ?> </div>
			</div>
		</div>
	</div>
</section>