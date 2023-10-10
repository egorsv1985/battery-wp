<section class="types scroll">
	<div class="types__container">
		<h2 class="types__title">Battery Types</h2>
		<div class="battery-list">
			<?php
			// Получаем данные группы полей "types" для текущего поста
			$field_group_data = cfs()->get('types');

			// Проверяем, есть ли данные в группе полей
			if ($field_group_data) {
				foreach ($field_group_data as $field_data) { ?>
					<div class="battery-list__item">
						<div class="battery-list__header<?php if (isset($field_data['sublist']) && is_array($field_data['sublist'])) {
															echo ' _open';
														} ?>">
							<?php
							// Выводим заголовок в зависимости от наличия 'sublist'
							if (isset($field_data['sublist']) && is_array($field_data['sublist'])) { ?>
								<p><?php echo esc_html($field_data['header']); ?></p>
							<?php } else {
								echo esc_html($field_data['header']);
							} ?>
						</div>

						<?php
						// Если есть дополнительные данные в группе полей "sublist"
						if (isset($field_data['sublist']) && is_array($field_data['sublist'])) { ?>
							<div class="battery-list__body">
								<div class="battery-list__content">
									<ul class="battery-list__sublist">
										<?php
										// Выводим значения из подгруппы полей "sublist"
										foreach ($field_data['sublist'] as $sublist_item) { ?>
											<li><?php echo esc_html($sublist_item['item']); ?></li>
										<?php } ?>
									</ul>
								</div>
							</div>
						<?php } ?>

					</div>
			<?php }
			}
			?>

		</div>
	</div>
</section>