<footer class="footer">
	<div class="footer__container">
		<div class="footer__main-content">
			<?php if (get_theme_mod('footer_logo')) : ?>
				<a href="<?php echo esc_url(home_url('/')); ?>" class="">
					<img src="<?php echo esc_url(wp_get_attachment_url(get_theme_mod('footer_logo'))); ?>" alt="<?php bloginfo('name'); ?>" class="">
					<p class="logo__transcript">Recycling Electric Batteries</p>
				</a>
			<?php else : ?>
				<a href="<?php echo esc_url(home_url('/')); ?>" class="">
					<p class="logo__transcript">Recycling Electric Batteries</p>
				</a>
			<?php endif; ?>

			<!-- <a href="./" class="footer__logo logo">
            <img src="../img/logo_2.svg" alt="" class="logo" />
            <p class="logo__transcript">Recycling Electric Batteries</p>
          </a> -->
			<div class="footer__links">
				<h3 class="footer__subtitle">Useful Links</h3>
				<?php
				$menu_items = wp_get_nav_menu_items('Footer menu');
				if ($menu_items) {
					echo '<ul class="footer__list list">';
					foreach ($menu_items as $item) {
						echo '<li class="list__item">';
						echo '<a href="' . $item->url . '" class="footer__link">' . $item->title . '</a>';
						echo '</li>';
					}
					echo '</ul>';
				}
				?>
				<!-- <div class="footer__list list">
					<a href="./weWorkWith.html" class="list__item">We Work With</a>
					<a href="./batteryTypes.html" class="list__item">Battery Types</a>
					<a href="./faq.html" class="list__item">FAQ</a>
					<a href="./aboutUs.html" class="list__item">About us</a>
					<a href="./contact.html" class="list__item">Contact us</a>
					<a href="./templatePage.html" class="list__item">Business Owners</a>
					<a href="./templatePage.html" class="list__item">Manufacturers</a>
					<a href="./templatePage.html" class="list__item">Salvage Yards</a>
					<a href="./templatePage.html" class="list__item">Refurbishers</a>
					<a href="./templatePage.html" class="list__item">Recycling Facilities</a>
				</div> -->
			</div>
			<div class="footer__contact contact-footer">
				<h3 class="contact-footer__subtitle">Contact</h3>
				<div class="contact-footer__item _loc-cont">
					<svg width="22" height="31" viewBox="0 0 22 31" fill="none" xmlns="http://www.w3.org/2000/svg" class="_location">
						<path d="M11.039 1C5.49662 1 1 5.2798 1 10.551C1 16.6162 7.69264 26.2278 10.1501 29.5476C10.2521 29.6877 10.3858 29.8018 10.5403 29.8804C10.6947 29.959 10.8656 30 11.039 30C11.2123 30 11.3832 29.959 11.5376 29.8804C11.6921 29.8018 11.8258 29.6877 11.9278 29.5476C14.3853 26.2292 21.0779 16.621 21.0779 10.551C21.0779 5.2798 16.5813 1 11.039 1Z" stroke="white" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M11.0392 14.3855C12.8873 14.3855 14.3855 12.8873 14.3855 11.0392C14.3855 9.19107 12.8873 7.69287 11.0392 7.69287C9.19107 7.69287 7.69287 9.19107 7.69287 11.0392C7.69287 12.8873 9.19107 14.3855 11.0392 14.3855Z" stroke="white" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<p class="contact-footer__text"> <?php echo esc_html(get_theme_mod('address')); ?></p>
				</div>
				<div class="contact-footer__item _phone-cont">
					<svg width="24" height="27" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg" class="_phone">
						<path d="M22.3133 20.5898C21.4735 19.6283 19.4395 18.2251 18.4527 17.6596C17.1675 16.9241 17.0618 16.864 16.0516 17.7167C15.3779 18.2858 14.9299 18.7942 14.1414 18.6031C13.3529 18.412 11.6394 17.3345 10.139 15.6351C8.63861 13.9356 7.63537 11.9321 7.46666 11.0391C7.29796 10.1461 7.75277 9.64316 8.24884 8.87576C8.948 7.79408 8.89511 7.6138 8.2975 6.15352C7.83157 5.01775 6.56073 2.72819 5.71138 1.77871C4.8028 0.758923 4.8028 0.939203 4.21735 1.21563C3.74073 1.4435 3.28347 1.72049 2.85131 2.04312C2.00514 2.68192 1.53551 3.21254 1.20709 4.00998C0.878665 4.80743 0.731114 6.67694 2.42716 10.178C4.12322 13.679 5.31315 15.4692 7.77604 18.26C10.2389 21.0507 12.1328 22.5513 14.9014 24.3156C18.3263 26.4952 19.6399 26.0703 20.3439 25.6978C21.0478 25.3252 21.5169 24.7964 22.0801 23.8349C22.3648 23.3446 22.6091 22.8256 22.8099 22.2844C23.0537 21.6216 23.2124 21.6216 22.3133 20.5898Z" stroke="white" stroke-width="1.4" stroke-miterlimit="10" />
					</svg>
					<?php
					$phone = get_theme_mod('phone', '');
					// Очищаем значение телефона от всех символов, кроме цифр
					$phone_clean = preg_replace('/\D/', '', $phone);
					?>
					<a href="tel:+<?php echo $phone_clean; ?>" class="contact-footer__text"><?php echo esc_html(get_theme_mod('phone')); ?></a>
				</div>
				<div class="contact-footer__item _mail-cont">
					<svg width="26" height="21" viewBox="0 0 26 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="_mail">
						<path d="M22.6923 1H3.30769C2.03319 1 1 2.03319 1 3.30769V17.1538C1 18.4284 2.03319 19.4615 3.30769 19.4615H22.6923C23.9668 19.4615 25 18.4284 25 17.1538V3.30769C25 2.03319 23.9668 1 22.6923 1Z" stroke="white" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M4.69238 4.69141L13.0001 11.1529L21.3078 4.69141" stroke="white" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
					</svg>

					<a href="mailto: <?php echo esc_html(get_theme_mod('emails')); ?>" class="contact-footer__text"><?php echo esc_html(get_theme_mod('emails')); ?></a>
				</div>
			</div>
		</div>
		<p class="footer__info">Website development: Target Consult Company</p>
	</div>
</footer>

</body>

</html>