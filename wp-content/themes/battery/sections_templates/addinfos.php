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