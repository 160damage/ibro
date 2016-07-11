<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<link rel="stylesheet" href="wp-content\themes\bones\library\css\fonts\firasans.css">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

<header class='header'>
 <div class="container">
	<div class="row">
		<div class="col-md-1 text_center">
		<div class="logo-container">
			<a href="<?php echo esc_url( home_url( '/' ) ) ?>" class="logo">
				<img class="logo__img" src="wp-content\themes\bones\library\css\img\logo2.png" alt="ibro-store">
			</a>
			<!--<h1 class="header__h1">
				Магазин техники Apple
			</h1>-->
		</div>
		</div>
		<div class="col-md-5">
		 <div class="contacts header__contacts">
			<select name="" id="" class="contacts__select">
				<option value="Евпатория"> Евпатория </option>
				<option value="Саки">Саки</option>
			</select>
			<div class="contacts__info">
				<span class="contacts__adress">ул.Какая-то, 24</span><span class="contacts__phone">+7-978-70-33-220</span>
				<span class="contacts__worktime">Пн-Пт 11:00 - 21:00, Сб-Вс 10:00 - 20:00</span>
			 </div>
			</div>
		</div>
		<div class="col-md-6 text_center">
		 <div class="flex-wrap">
			 <a href="#" class="callback header__callback">Обратный звонок</a>
			<nav class="mini-nav">
				<ul class="mini-nav__ul">
					<li class="mini-nav__li"><a href="#" class="mini-nav__link">Оплата и доставка</a></li>
					 <li class="mini-nav__li"><a href="#" class="mini-nav__link">Ремонт и сервис</a></li>
						<li class="mini-nav__li"><a href="#" class="mini-nav__link">Вакансии</a></li>
				</ul>
			</nav>
		 </div>
				 <div class="flex-wrap">
					 <nav class='navigation' role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
 						<?php wp_nav_menu(array(
     					         'container' => false,                           // remove nav container
     					         'container_class' => 'navigation__ul',                 // class of container (should you choose to use it)
     					         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
     					         'menu_class' => 'navigation__ul',               // adding custom nav class
     					         'theme_location' => 'main-nav',                 // where it's located in the theme
     					         'before' => '',                                 // before the menu
         			               'after' => '',                                  // after the menu
         			               'link_before' => '',                            // before each link
         			               'link_after' => '',                             // after each link
         			               'depth' => 0,                                   // limit the depth of the nav
     					         'fallback_cb' => ''                             // fallback function (if there is one)
 						)); ?>

 					</nav>
						<?php if( function_exists( 'WC' ) ) { ?>

					<div class="search__wrap">
						<a href="#" class="search__trigger" title="<?php _e( 'Поиск по товарам','bones' ); ?>">
						</a>
						<form class="search__triggered" role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
							<input class="search__field" type="search"  placeholder="<?php echo esc_attr_x( 'Поиск по товарам&hellip;', 'placeholder', 'azera-shop' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'azera-shop' ); ?>" />
							<input class="search__submit" type="submit" value="<?php echo esc_attr_x( '', 'submit button', 'azera-shop' ); ?>" />
							<input class="search__product" type="hidden" name="post_type" value="product" />
						</form>
					</div>
		 			<a class="cart" href="<?php echo WC()->cart->get_cart_url() ?>" title="<?php _e( 'Показать вашу корзину','bones' ); ?>"><div class="cart__counter"><?php echo trim( WC()->cart->get_cart_contents_count() ); ?></div></a>
					<?php } ?>
				 </div>
		</div>
	</div>
	</div>
</header>
