<?
// Подключение стилей
function metexim_custom_enqueue_styles()
{
	// wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.css');
	// wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css');

	wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'metexim_custom_enqueue_styles');


// Подключение скриптов
function metexim_custom_enqueue_scripts()
{
	wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js', array('jquery'), null, false);
	// wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js', array('jquery'), null, false);
	wp_enqueue_script('parallax', 'https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js', array('jquery'), null, false);
	wp_enqueue_script('app', get_stylesheet_directory_uri() . '/js/app.js');
	// wp_enqueue_script('scroll', get_stylesheet_directory_uri() . '/js/scroll.js');
	// wp_enqueue_script('burgerMenu', get_stylesheet_directory_uri() . '/js/burgerMenu.js');
	// wp_enqueue_script('parallax-custom', get_stylesheet_directory_uri() . '/js/parallax.js');
}
add_action('wp_enqueue_scripts', 'metexim_custom_enqueue_scripts');

// Регистрируем функцию my_theme_customize_register для работы с настройками темы WordPress
add_action('customize_register', 'my_theme_customize_register');

function my_theme_customize_register($wp_customize)
{
	// Добавляем раздел "Настройки темы"
	$wp_customize->add_section('my_theme_settings', array(
		'title' => 'Дополнительные сведения',
		'priority' => 200,
	));

	// Добавляем поле "Логотип header"
	$wp_customize->add_setting('header_logo', array(
		'default' => '',
		'sanitize_callback' => 'absint',
	));

	$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'header_logo_control', array(
		'label' => 'LOGO header',
		'section' => 'my_theme_settings',
		'settings' => 'header_logo',
		'mime_type' => 'image',
	)));
	// Добавляем поле "Логотип footer"
	$wp_customize->add_setting('footer_logo', array(
		'default' => '',
		'sanitize_callback' => 'absint',
	));

	$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'footer_logo_control', array(
		'label' => 'LOGO footer',
		'section' => 'my_theme_settings',
		'settings' => 'footer_logo',
		'mime_type' => 'image',
	)));

	// Добавляем поле "Почта"
	$wp_customize->add_setting('emails', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control('emails_control', array(
		'label' => 'Почта',
		'section' => 'my_theme_settings',
		'settings' => 'emails',
		'type' => 'text',
	));
	// Добавляем поле "Телефон"
	$wp_customize->add_setting('phone', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control('phone_control', array(
		'label' => 'Телефон',
		'section' => 'my_theme_settings',
		'settings' => 'phone',
		'type' => 'text',
	));
	// Добавляем поле "Адрес"
	$wp_customize->add_setting('address', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control('address_control', array(
		'label' => 'address',
		'section' => 'my_theme_settings',
		'settings' => 'address',
		'type' => 'text',
	));
}
// Регистрация меню
function register_custom_menus()
{
	register_nav_menus(
		array(
			'primary-menu' => __('Primary Menu'),
			'footer-menu' => 'Footer menu',
		)
	);
}
add_action('init', 'register_custom_menus');

function custom_menu_classes($classes, $item)
{
	// Добавляем кастомные классы для родительского элемента меню
	if ($item->menu_item_parent == 0 && in_array('menu-item-has-children', $classes)) {
		$classes[] = 'nav__uncover';
	}

	// Добавляем кастомные классы для дочерних элементов меню
	if ($item->menu_item_parent != 0) {
		$classes[] = 'second-nav__item';
	}

	return $classes;
}
add_filter('nav_menu_css_class', 'custom_menu_classes', 10, 2);

function allow_svg_upload($mimes)
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'allow_svg_upload');


