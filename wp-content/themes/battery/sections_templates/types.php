<section class="types scroll">
    <div class="types__container">
        <h2 class="types__title">Battery Types</h2>
        <div class="battery-list">
            <?php
            $field_group_data = cfs()->get('types');

            // Проверяем, есть ли данные в группе полей
            if ($field_group_data) {
                $total_items = count($field_group_data);
                $items_per_column = ceil($total_items / 3); // Количество элементов в каждой колонке

                // Делим массив на три части
                $columns = array_chunk($field_group_data, $items_per_column);

                // Создаем три колонки
                foreach ($columns as $column) {
                    echo '<div class="battery-list__column">';
                    foreach ($column as $field_data) {
                        ?>
                        <div class="battery-list__item">
                            <div class="battery-list__header<?php if (isset($field_data['sublist']) && is_array($field_data['sublist'])) {
                                echo ' _open';
                            } ?>">
                                <?php
                                if (isset($field_data['sublist']) && is_array($field_data['sublist'])) { ?>
                                    <p><?php echo esc_html($field_data['header']); ?></p>
                                <?php } else {
                                    echo esc_html($field_data['header']);
                                } ?>
                            </div>

                            <?php
                            if (isset($field_data['sublist']) && is_array($field_data['sublist'])) { ?>
                                <div class="battery-list__body">
                                    <div class="battery-list__content">
                                        <ul class="battery-list__sublist">
                                            <?php
                                            foreach ($field_data['sublist'] as $sublist_item) { ?>
                                                <li><?php echo esc_html($sublist_item['item']); ?></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                    <?php
                    }
                    echo '</div>';
                }
            }
            ?>
        </div>
    </div>
</section>
