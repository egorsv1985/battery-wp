<section class="contact">
	<div class="contact__container">
		<div class="contact__info">
			<div class="contact__content">
				<h1 class="contact__maintitle"><?php the_title(); ?></h1>
				<div class="contact__item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/icons/black_location.svg" alt="" class="contact__icon">
					<a href="https://maps.app.goo.gl/ohTtq8mg3XjhmpTC9" class="contact__text" target="_blank"><?php echo esc_html(get_theme_mod('address')); ?></a>
				</div>
				<div class="contact__item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/icons/black_phone.svg" alt="" class="contact__icon" />
					<?php
					$phone = get_theme_mod('phone', '');
					// Очищаем значение телефона от всех символов, кроме цифр
					$phone_clean = preg_replace('/\D/', '', $phone);
					?>
					<a href="tel:+<?php echo $phone_clean; ?>" class="contact__text" target="_blank"><?php echo esc_html(get_theme_mod('phone')); ?></a>
				</div>
				<div class="contact__item-time">

					<span class="contact__text">Business Hours </span>
					<span class="contact__text">Mon-Fri 9:00am-5:00pm EST </span>
					<span class="contact__text">Sat-Sun 9am-1pm EST </span>
				</div>
				<div class="contact__item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/icons/black_mail.svg" alt="" class="contact__icon" />
					<a href="mailto: <?php echo esc_html(get_theme_mod('emails')); ?>" class="contact__text" target="_blank"><?php echo esc_html(get_theme_mod('emails')); ?></a>
				</div>
			</div>
			<div class="contact__map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3051.399515416171!2d-76.05992839999999!3d40.11109929999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c640205bf47fb3%3A0x66dbd64e83bd8a47!2s150%20Earland%20Dr%20Building%205%2C%20Suite%205D%2C%20New%20Holland%2C%20PA%2017557%2C%20%D0%A1%D0%A8%D0%90!5e0!3m2!1sen!2sby!4v1694690887691!5m2!1sen!2sby&language=en" style="border: 0" class="contact__iframe" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
		<div class="contact__form form">
			<h2 class="form__title">get in touch</h2>
			<?php echo do_shortcode('[contact-form-7 id="fcf2afc" title="contact" class="form__fields" locale="en-US"]'); ?>


		</div>
	</div>
</section>