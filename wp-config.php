<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'battery' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'b^q@p8nt*UVyvLJQZ/fS}YSQcm^ZbKC~&+rgt3Dz@Y670mzO{?.~Q%NA[8U?<xy,' );
define( 'SECURE_AUTH_KEY',  '_%:~0y*9$]h#e3p],1%~EafH2hc?qp_V&&zNHN?i;K,#_@skUIF~)C2|NfF`ic{X' );
define( 'LOGGED_IN_KEY',    '$47GV?ybtGW^kPPy3vYFO8Y&HUnE8@=,-BZ`~@}oj_Kc=AmQ0Q*_?t,0mtCANjj%' );
define( 'NONCE_KEY',        '7 uI?X?j]3dXr%Q.>atsnO@?n%G(W|-:UBk4w2L%(;G:90bBfw5(y]?mr!w:a3~h' );
define( 'AUTH_SALT',        'CNMu6$Ju;%s-~v2K(-s#0y@B*WpXry]:u}I-gRG,vX ||OSoV,MJl)9P1*yOSP|B' );
define( 'SECURE_AUTH_SALT', 'Is?aNrlhQ=B#4f.@)2M)G[*S;e3t139PjY9[,#Rs$wi>|4.=)9+:w*Fv;*hmBev<' );
define( 'LOGGED_IN_SALT',   ')tca%>)-kuY&W#y.G*GTN+7LtdAbK4un<qqUN(Db^_XdTxKZCvQW|8zDiX*VuQxE' );
define( 'NONCE_SALT',       'Zyu`ma+ygRy|?VqT#|wr{Nm_dWV3Rbz.L.~TCz%FEG?FJBv>@e@f_hp11><hAa]F' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
