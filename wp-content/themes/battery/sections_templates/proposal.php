<?php
global $template;

if (strpos($template, 'template.php') !== false) {
	// Если текущий шаблон содержит "contact.php"
	echo '<section class="proposal _not-mt">';
} else {
	// Иначе (для всех остальных шаблонов)
	echo '<section class="proposal">';
}
?>
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