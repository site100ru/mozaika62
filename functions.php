<?php
	
	// Bootstrap 5 wp_nav_menu walker
	class bootstrap_5_wp_nav_menu_walker extends Walker_Nav_menu {
		private $current_item;
		private $dropdown_menu_alignment_values = [
			'dropdown-menu-start',
			'dropdown-menu-end',
			'dropdown-menu-sm-start',
			'dropdown-menu-sm-end',
			'dropdown-menu-md-start',
			'dropdown-menu-md-end',
			'dropdown-menu-lg-start',
			'dropdown-menu-lg-end',
			'dropdown-menu-xl-start',
			'dropdown-menu-xl-end',
			'dropdown-menu-xxl-start',
			'dropdown-menu-xxl-end'
		];

		function start_lvl(&$output, $depth = 0, $args = null) {
			$dropdown_menu_class[] = '';
			foreach($this->current_item->classes as $class) {
				if(in_array($class, $this->dropdown_menu_alignment_values)) {
					$dropdown_menu_class[] = $class;
				}
			}
			$indent = str_repeat("\t", $depth);
			$submenu = ($depth > 0) ? ' sub-menu' : '';
			$output .= "\n$indent<ul class=\"dropdown-menu$submenu " . esc_attr(implode(" ",$dropdown_menu_class)) . " depth_$depth\">\n";
		}

		function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
			
			$this->current_item = $item;

			$indent = ($depth) ? str_repeat("\t", $depth) : '';

			$li_attributes = '';
			$class_names = $value = '';

			$classes = empty($item->classes) ? array() : (array) $item->classes;

			$classes[] = ($args->walker->has_children) ? 'dropdown' : '';
			$classes[] = 'nav-item';
			$classes[] = 'nav-item-' . $item->ID;
			if ($depth && $args->walker->has_children) {
				$classes[] = 'dropdown-menu dropdown-menu-end';
			}

			$class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
			$class_names = ' class="' . esc_attr($class_names) . '"';

			$id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
			$id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';
			
			
			$output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';


			$attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
			$attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
			$attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
			$attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

			$active_class = ($item->current || $item->current_item_ancestor || in_array("current_page_parent", $item->classes, true) || in_array("current-post-ancestor", $item->classes, true)) ? 'active' : '';
			$nav_link_class = ( $depth > 0 ) ? 'dropdown-item ' : 'nav-link ';
			$attributes .= ( $args->walker->has_children ) ? ' class="'. $nav_link_class . $active_class . ' dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="'. $nav_link_class . $active_class . '"';

			$item_output = $args->before;
			$item_output .= '<a' . $attributes . '>';
			$item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
			$item_output .= '</a>';
			$item_output .= $args->after;
			
			

			$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
			
			
			// Показываем точки в меню, первый вариант
			$item_title = $item->title;
			$dropdown = in_array( 'dropdown', $classes );
			if ( $item_title == 'Контакты' ) {
				$output .= '
					<li class="nav-item d-none">
						<span class="nav-link">
							<img src="'.get_stylesheet_directory_uri().'/img/ico/menu-decoration-point.svg" alt="">
						</span>
					</li>
				';
			} else if ( $dropdown == false AND $depth == 0 ) {
				$output .= '
					<li class="nav-item d-none d-xl-inline">
						<span class="nav-link">
							<img src="'.get_stylesheet_directory_uri().'/img/ico/menu-decoration-point.svg" alt="">
						</span>
					</li>
				';
			}
		}
	}

	
	
	/* Register a new menu */
	add_action( 'after_setup_theme', function() {
		register_nav_menus( [
			'main-menu' => 'Main menu',
			'mobail-header-collapse' => 'Mobail header collapse',
			'sliding-header-collapse' => 'Sliding header collapse',
			'contacts-desktop-menu' => 'Contacts desktop menu',
            'footer-right' => 'footer-right',
            'footer-left' => 'footer-left',
			//'menu-main-menu-2' => 'Menu main menu 2',
			//'menu-main-menu-3' => 'Menu main menu 3',
			//'contacts-menu-2' => 'Contacts menu 2',
			//'navbarSupportedContent2' => 'navbarSupportedContent2'

		] );
	} );
	
    wp_enqueue_script('jquery');
	
    function remove_wp_footer_credit() {
        remove_action('wp_footer', 'wp_admin_footer'); 
        remove_action('wp_footer', 'twentyseventeen_footer');
    }
    add_action('init', 'remove_wp_footer_credit');

	
	/* WooCommerce support */
	add_action( 'after_setup_theme', 'furniture_catalog_add_woocommerce_support' );
	function furniture_catalog_add_woocommerce_support() {
		add_theme_support( 'woocommerce' );
	}
	
	
	/* Изменяем размер миниатюр WooCommerce */
	add_filter('woocommerce_get_image_size_thumbnail','add_thumbnail_size',1,10);
	function add_thumbnail_size($size){
		$size['width'] = 600;
		//$size['height'] = 450;
		$size['crop']   = 1; //0 - не обрезаем, 1 - обрезка
		return $size;
	}
	
	/* Отключаем ненужные опции вывода настраницу */
	/* Отключаем название товара
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
	
	
	remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
	remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
	add_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 20);
	add_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 10);
	
	
	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 ); */
	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
	
	
	// Цена
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
	//add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 20 );
	
	// Кнопка
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);

    /* Изменям значек валюты */
	add_filter('woocommerce_currency_symbol', 'change_existing_currency_symbol', 10, 2);
	function change_existing_currency_symbol( $currency_symbol, $currency ) {
		 switch( $currency ) {
			  case 'RUB': $currency_symbol = '₽'; break;
		 }
		 return $currency_symbol;
	}
	
	
	
	/**
	 * Change several of the breadcrumb defaults
	 */
	add_filter( 'woocommerce_breadcrumb_defaults', 'jk_woocommerce_breadcrumbs' );
	function jk_woocommerce_breadcrumbs() {
		return array(
				'delimiter'   => ' &#47; ',
				'wrap_before' => '<nav class="woocommerce-breadcrumb" itemprop="breadcrumb"><a href="https://мозаика62.рф/"><img src="'.get_stylesheet_directory_uri().'/img/ico/breadcrumbs-icon.svg"></a> / ',
				'wrap_after'  => '</nav>',
				'before'      => '',
				'after'       => '',
				'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
			);
	}
	
	/**/
	// Убираем ссылку на главную страницу сайта в хлебных крошках, чтобы потом подставить вместо этого ссылку с изображением
	add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_home_text' );
	function wcc_change_breadcrumb_home_text( $defaults ) {
		// Change the breadcrumb home text from 'Home' to 'Apartment'
		$defaults['home'] = null;
		return $defaults;
	}
	
	
	/* Добавляем ссылку на главную страницу магазина в хлебных крошках */
	/* Изменил от первоначальной версии */
	add_filter( 'woocommerce_get_breadcrumb', function($crumbs, $Breadcrumb){
        //$shop_page_id = wc_get_page_id('shop'); //Get the shop page ID
        // Если это страница магазина, страница архива или таксономии продуктов, то добавляем впереде ссылку на страницу архива продуктов
		if ( is_post_type_archive( 'products' ) OR is_product_taxonomy( 'product-cat' ) ) { //Check we got an ID (shop page is set). Added check for is_shop to prevent Home / Shop / Shop as suggested in comments
            $new_breadcrumb = [
                _x( 'Продукция', 'breadcrumb', 'woocommerce' ), //Title
                get_permalink( wc_get_page_id( 'shop' ) ) // URL
            ];
            array_splice( $crumbs, 0, 0, [ $new_breadcrumb ] ); //Insert a new breadcrumb after the 'Home' crumb
        } else if ( is_tax( 'portfolio-cat' ) ) {
			$new_breadcrumb = [
                _x( 'Наши работы', 'breadcrumb', 'woocommerce' ), //Title
                'https://мозаика62.рф/portfolio/' // URL
            ];
            array_splice( $crumbs, 0, 1, [ $new_breadcrumb ] ); //Insert a new breadcrumb after the 'Home' crumb
		}
		return $crumbs;
    }, 10, 2 );
	
	
	/* WC 2.6.4: Изменить любой элемент "хлебных крошек" */
	add_filter( 'woocommerce_get_breadcrumb', 'my_woocommerce_get_breadcrumb' );
	function my_woocommerce_get_breadcrumb($breadcrumb) {
			
			foreach ( $breadcrumb as $key => $crumb ) {
				// заменяем "крошку" корня каталога "Каталог" на "Мой каталог"
				//if ($breadcrumb[$key][0] == 'Каталог') $breadcrumb[$key][0] = 'Мой каталог';
				// заменяем, если в "крошке" название 'Компьютеры Apple'
				if ($breadcrumb[$key][0] == 'Наша продукция') $breadcrumb[$key][0] = 'Продукция';
			}
			
		return $breadcrumb;
	}
	
	
	
	// Register taxonomy
	add_action( 'init', 'create_taxonomy' );
	function create_taxonomy() {
		
		// Таксономия - портфолио
		register_taxonomy( 'portfolio-cat', [ 'portfolio' ], [
			'label'                 => '', // определяется параметром $labels->name
			'labels'                => [
				'name'              => 'Наши работы',
				'singular_name'     => 'Категория портфолио',
				'search_items'      => 'Искать категорию портфолио',
				'all_items'         => 'Все категории портфолио',
				'view_item '        => 'View Genre',
				'parent_item'       => 'Parent Genre',
				'parent_item_colon' => 'Parent Genre:',
				'edit_item'         => 'Edit Genre',
				'update_item'       => 'Update Genre',
				'add_new_item'      => 'Add New Genre',
				'new_item_name'     => 'New Genre Name',
				'menu_name'         => 'Категории портфолио',
				'back_to_items'     => '← Вернуться к категориям портфолио',
			],
			'description'           => '', // описание таксономии
			'public'                => true,
			// 'publicly_queryable'    => null, // равен аргументу public
			// 'show_in_nav_menus'     => true, // равен аргументу public
			// 'show_ui'               => true, // равен аргументу public
			// 'show_in_menu'          => true, // равен аргументу show_ui
			// 'show_tagcloud'         => true, // равен аргументу show_ui
			// 'show_in_quick_edit'    => null, // равен аргументу show_ui
			'hierarchical'          => true,
			'rewrite'               => true,
			//'query_var'             => $taxonomy, // название параметра запроса
			'capabilities'          => array(),
			'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
			'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
			'show_in_rest'          => null, // добавить в REST API
			'rest_base'             => null, // $taxonomy
			// '_builtin'              => false,
			//'update_count_callback' => '_update_post_term_count',
		] );
	}
	
	
	// Register post type
	add_action( 'init', 'register_post_types' );
	function register_post_types() {
		
		// Add thumbnails
		add_theme_support('post-thumbnails');
		
		// Тип записи - наши работы (портфолио)
		register_post_type( 'portfolio', [
			'label'  => null,
			'labels' => [
				'name'               => 'Наши работы', // основное название для типа записи
				'singular_name'      => 'Наши работы', // название для одной записи этого типа
				'add_new'            => 'Добавить нашу работу', // для добавления новой записи
				'add_new_item'       => 'Добавление нашей работы', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Редактирование нашей работы', // для редактирования типа записи
				'new_item'           => 'Новая наша работа', // текст новой записи
				'view_item'          => 'Смотреть нашу работу', // для просмотра записи этого типа.
				'search_items'       => 'Искать нашу работу', // для поиска по этим типам записи
				'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
				'parent_item_colon'  => '', // для родителей (у древовидных типов)
				'menu_name'          => 'Наши работы', // название меню
			],
			'description'         => '',
			'public'              => true,
			// 'publicly_queryable'  => null, // зависит от public
			// 'exclude_from_search' => null, // зависит от public
			// 'show_ui'             => null, // зависит от public
			// 'show_in_nav_menus'   => null, // зависит от public
			'show_in_menu'        => null, // показывать ли в меню адмнки
			// 'show_in_admin_bar'   => null, // зависит от show_in_menu
			'show_in_rest'        => null, // добавить в REST API. C WP 4.7
			'rest_base'           => null, // $post_type. C WP 4.7
			'menu_position'       => null,
			'menu_icon'           => null,
			//'capability_type'   => 'post',
			//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
			//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
			'hierarchical'        => false,
			'supports'            => [ 'title', 'editor' ], // 'title','editor','author','trackbacks','comments', 'thumbnail', 'custom-fields','revisions','page-attributes','post-formats', 'excerpt'
			'taxonomies'          => [ 'portfolio-cat' ],
			'has_archive'         => true,
			'rewrite'             => true,
			'query_var'           => true,
		] );
	}
	
	
	
	/* Wijet область в сайдбаре */
	if ( function_exists( 'register_sidebar' ) ) {
		register_sidebar(
			array(
				'name'          => 'Виджет в сайдбаре Кухни', //название виджета в админ-панели
				'id'            => 'wsidebar-1', //идентификатор виджета
				'description'   => 'Показывается в категории Кухни', //описание виджета в админ-панели
				'before_widget' => '<aside id="%1$s" class="widget %2$s">', //открывающий тег виджета с динамичным идентификатором
				'after_widget'  => '<div class="clear"></div></aside>', //закрывающий тег виджета с очищающим блоком
				'before_title'  => '<span class="widget-title">', //открывающий тег заголовка виджета
				'after_title'   => '</span>',//закрывающий тег заголовка виджета
			)
		);

        // Виджет для шкафов
        register_sidebar(array(
            'name'          => 'Сайдбар Шкафы',
            'id'            => 'wsidebar-2',
            'description'   => 'Показывается в категории Шкафы',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '<div class="clear"></div></aside>',
            'before_title'  => '<span class="widget-title">',
            'after_title'   => '</span>',
        ));
	}
	
	
	
	// Подключаем функцию активации мета блока (my_extra_fields)
	add_action('add_meta_boxes', 'my_extra_fields', 1);

	function my_extra_fields() {
		add_meta_box( 'extra_fields', 'Галерея наших работ', 'extra_fields_box_func', 'portfolio', 'side', 'high' );
	}

	/* Код блока галереи */
	function extra_fields_box_func( $post ){
		for ($i=1; $i<=9; $i++) { ?>
			<label>URL&#160;изображения <?php echo $i; ?>:</label>
			<input type="text" name="extra[img-<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, '_img-'.$i, 1); ?>" style="width: 100%;">
			<div style="clear: both;"></div>
		<? } ?>
			<input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
		<?php
	}
	
	// включаем обновление полей при сохранении
	add_action( 'save_post', 'my_extra_fields_update', 0 );

	## Сохраняем данные, при сохранении поста
	function my_extra_fields_update( $post_id ){
		// базовая проверка
		if (
			   empty( $_POST['extra'] )
			|| ! wp_verify_nonce( $_POST['extra_fields_nonce'], __FILE__ )
			|| wp_is_post_autosave( $post_id )
			|| wp_is_post_revision( $post_id )
		)
			return false;

		// Все ОК! Теперь, нужно сохранить/удалить данные
		//$_POST['extra'] = array_map( 'sanitize_text_field', $_POST['extra'] ); // чистим все данные от пробелов по краям
		foreach( $_POST['extra'] as $key => $value ){
			if( empty($value) ){
				delete_post_meta( $post_id, '_'.$key ); // удаляем поле если значение пустое
				continue;
			}
			update_post_meta( $post_id, '_'.$key, $value ); // add_post_meta() работает автоматически
		}
		return $post_id;
	}
	
	
	/* Подключение стилей родительской темы
	add_action('wp_enqueue_scripts', 'enqueue_parent_styles', 0);
	function enqueue_parent_styles() {
		wp_enqueue_style( 'parent-bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css');
		wp_enqueue_style( 'parent-theme-css', get_template_directory_uri().'/css/theme.css' );
		wp_enqueue_style( 'parent-style-css', get_template_directory_uri().'/style.css' );
	}

	// Подключение стилей дочерней темы
	add_action('wp_enqueue_scripts', 'enqueue_child_styles', 5);
	function enqueue_child_styles() {
		wp_enqueue_style( 'child-theme-css', get_stylesheet_directory_uri() . '/css/theme.css', array( 'parent-theme-css' ) );
		wp_enqueue_style( 'child-style-css', get_stylesheet_directory_uri().'/style.css', array( 'parent-style-css' ) );
	}*/


/* Подключение стилей родительской темы
add_action('wp_enqueue_scripts', 'enqueue_parent_styles', 0);
function enqueue_parent_styles() {
    // Подключаем только то, что реально есть в родительской теме
    wp_enqueue_style( 'parent-style-css', get_template_directory_uri().'/style.css' );
}

// Подключение стилей дочерней темы
add_action('wp_enqueue_scripts', 'enqueue_child_styles', 20);
function enqueue_child_styles() {
    // Подключаем Bootstrap из дочерней темы
    wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );
    
    // Подключаем style.css дочерней темы
    wp_enqueue_style( 
        'child-style-css', 
        get_stylesheet_directory_uri() . '/style.css', 
        array( 'child-theme-css' ) 
    );
	
	// Подключаем основной CSS дочерней темы
    wp_enqueue_style( 
        'child-theme-css', 
        get_stylesheet_directory_uri() . '/css/theme.css', 
        array( 'bootstrap-css' ) 
    );
    
    
}*/


// Полностью отключаем все автоматические подключения родительских стилей
add_action('wp_enqueue_scripts', 'disable_all_parent_styles', 0);
function disable_all_parent_styles() {
    // Отключаем все возможные варианты подключения родительского style.css
    wp_deregister_style('parent-style');
    wp_dequeue_style('parent-style');
    wp_deregister_style('parent');
    wp_dequeue_style('parent');
    wp_deregister_style('mozaika-style');
    wp_dequeue_style('mozaika-style');
    wp_deregister_style('Mozaika-style');
    wp_dequeue_style('Mozaika-style');
}

// Подключение стилей родительской темы
add_action('wp_enqueue_scripts', 'enqueue_parent_styles', 5);
function enqueue_parent_styles() {
    // Проверяем существует ли файл перед подключением
    if (file_exists(get_template_directory() . '/style.css')) {
        wp_enqueue_style( 
            'parent-main-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get('Version')
        );
    }
}

// Подключение стилей дочерней темы
add_action('wp_enqueue_scripts', 'enqueue_child_styles', 20);
function enqueue_child_styles() {
    // Подключаем Bootstrap из дочерней темы
    if ( file_exists( get_stylesheet_directory() . '/css/bootstrap.min.css' ) ) {
        wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', array(), wp_get_theme()->get('Version') );
    }
    
    // Подключаем основной CSS дочерней темы
    if (file_exists(get_stylesheet_directory() . '/css/theme.css')) {
        wp_enqueue_style( 
            'child-theme-css', 
            get_stylesheet_directory_uri() . '/css/theme.css', 
            array( 'bootstrap-css' ),
            wp_get_theme()->get('Version')
        );
    }
    
    // Подключаем style.css дочерней темы
    if (file_exists(get_stylesheet_directory() . '/style.css')) {
        wp_enqueue_style( 
            'child-style-css', 
            get_stylesheet_directory_uri() . '/style.css', 
            array( 'child-theme-css' ),
            wp_get_theme()->get('Version')
        );
    }
}






	
	
	/*** ДЕЛАЕМ ПРАВИЛЬНЫЙ DESCRIPTION ДЛЯ КАЖДОЙ СТРАНИЦЫ ***/
	function echo_description() {
		
		// Если страница стандартной категории поста
		if ( is_category() ) {
			echo wp_strip_all_tags( category_description() );
		
		// Если страница продукта woocommerce
		} elseif ( is_product() ) {
			$product = wc_get_product( get_the_ID() ); 
			$short_description = $product->get_short_description();
			echo wp_strip_all_tags( $short_description );
		
		// Если страница категории продукта woocommerce
        } elseif ( is_product_category() ) {
            $term = get_queried_object(); // Получаем текущую категорию
            if( $term && !empty( $term->description ) ){
                echo wp_strip_all_tags( $term->description ); // Описание только текущей категории
            }
		
		// Если страница портфолио
		} elseif ( is_post_type_archive( 'portfolio' ) ) {
			echo 'Наши выполненные работы';
		
		// Если страница категорий портфолио
		} elseif ( is_tax( 'portfolio-cat' ) ) {
			$term = get_queried_object(); // Получаем текущий термин
			echo wp_strip_all_tags( $term->description );
			//echo 'Категория портфолио';
		
		// Если страница магазина	
		} elseif ( is_shop() ) {
			$shop_page_id = wc_get_page_id('shop');
			echo wp_strip_all_tags( get_the_excerpt($shop_page_id) );
		
		// Если обычная страница
		} else {
			echo wp_strip_all_tags( get_the_excerpt() );
		}
	}
	/*** END ДЕЛАЕМ ПРАВИЛЬНЫЙ DESCRIPTION ДЛЯ КАЖДОЙ СТРАНИЦЫ ***/
	
	
	
	/*** ВКЛЮЧАЕМ EXCERPT FOR PAGES (ОПИСАНИЕ ДЛЯ СТРАНИЦ) ***/
	add_action('init', 'add_excerpt_to_pages');
	function add_excerpt_to_pages() {
		add_post_type_support('page', 'excerpt');
	}
	
    // Фильтр для виджета категорий товаров
    function filter_product_categories_widget($list_args)
    {
        // Получаем текущую категорию
        if (is_product_category()) {
            $current_cat = get_queried_object();

            // Если это подкатегория, берем родительскую
            if ($current_cat->parent != 0) {
                $parent_cat = get_term($current_cat->parent, 'product_cat');
                $list_args['child_of'] = $parent_cat->term_id;
            } else {
                // Если это родительская категория, показываем её дочерние
                $list_args['child_of'] = $current_cat->term_id;
            }

            // Не показываем пустые категории
            $list_args['hide_empty'] = true;
        }

        return $list_args;
    }
    add_filter('woocommerce_product_categories_widget_args', 'filter_product_categories_widget');



// КЛАССЫ В BODY_CLASS
// add_filter('body_class', 'custom_body_classes');

// function custom_body_classes($classes) {
// 	// Добавить класс для всех страниц
// 	$classes[] = 'b-new-year';
// 	return $classes;
// }



/*** ДЕЛАЕМ ФАЙЛ ROBOTS.TXT ***/
add_filter('robots_txt', 'custom_robots_txt');
function custom_robots_txt($output)
{
    $output = "User-agent: *\n";
    $output .= "Disallow: *?add-to-cart=*\n";
	$output .= "Disallow: *?filter_*\n";
	$output .= "Disallow: *filter_*\n";
	$output .= "Disallow: */page/*\n\n";
	$output .= "https://мозаика62.рф/sitemap.xml";
    return $output;
}
/*** END ДЕЛАЕМ ФАЙЛ ROBOTS.TXT ***/

