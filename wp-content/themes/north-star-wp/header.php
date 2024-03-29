<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php if ( is_category() ) {
			echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
		} elseif ( is_tag() ) {
			echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
		} elseif ( is_archive() ) {
			wp_title(''); echo ' Archive | '; bloginfo( 'name' );
		} elseif ( is_search() ) {
			echo 'Search for &quot;'.esc_html($s).'&quot; | '; bloginfo( 'name' );
		} elseif ( is_home() || is_front_page() ) {
			bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
		}  elseif ( is_404() ) {
			echo 'Error 404 Not Found | '; bloginfo( 'name' );
		} elseif ( is_single() ) {
			wp_title('');
		} else {
			echo wp_title( ' | ', 'false', 'right' ); bloginfo( 'name' );
		} ?></title>
		
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ; ?>/css/app.css?v=1.123" />

		<link rel="icon" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/favicon.ico?v=1.125" type="image/x-icon">
<!-- 		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-144x144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-72x72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-precomposed.png"> -->
		
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
	<?php do_action('foundationPress_after_body'); ?>
	
	<div class="off-canvas-wrap" data-offcanvas>
	<div class="inner-wrap">
	
	<?php do_action('foundationPress_layout_start'); ?>
	
	<header class="row">
	  <!-- Mobile only sign in/up nav -->
   	  <nav class="sign-up-in small-12 columns hide-for-large-up">
    	<a href="https://northstarcounselling.privacemail.com/index.php?page=register" class="sign-up" onclick="ga('send', 'event', 'Header', 'Click', 'Sign up');">SIGN UP AND LET US HELP</a>
    	<a href="http://northstarcounselling.privacemail.com/" class="sign-in button tiny" onclick="ga('send', 'event', 'Header', 'Click', 'Sign in');">SIGN IN</a>
  	  </nav>
	  <div class="large-3 columns">
	    <h1 class="logo">
	      <a href="/">
	        <img src="/wp-content/uploads/2014/10/north-star-logo.png" alt="North Star Counselling">
	      </a>
	    </h1>
	  </div>
	  <div class="large-9 columns">
	    <div class="navigation row">
	      <!-- Large and up sign in/up nav -->
	      <nav class="sign-up-in small-12 hide-for-small-only hide-for-medium-only show-for-large-up columns">
	        <a href="https://northstarcounselling.privacemail.com/index.php?page=register" class="sign-up" onclick="ga('send', 'event', 'Header', 'Click', 'Sign up');">SIGN UP AND LET US HELP</a>
	        <a href="http://northstarcounselling.privacemail.com/" class="sign-in button tiny" onclick="ga('send', 'event', 'Header', 'Click', 'Sign in');">SIGN IN</a>
	      </nav>
	      <nav class="main small-12 columns">
	        <ul>
						<?php
							$args = array(
								'sort_column' => 'menu_order',
								'meta_key' => 'secondary_page',
								'meta_value' => 'yes',
							);
							$pages = get_pages( $args );
							foreach ($pages as $page) {
								$page_title = get_the_title($page);
								$pg_title = mb_convert_case( $page_title , MB_CASE_UPPER);
								$current_page_title = get_the_title();
								if ( $page_title == $current_page_title ) {
									$is_current = ' is-current';
								} else {
									// nothing
								}
								echo '<li><a href="' . get_page_link($page) . ' " class="navlink-' . $page->menu_order . $is_current . '">' . $pg_title . '</a></li>';
								$is_current = "";
							};
						?>
	        </ul>
	      </nav>
	    </div>
	  </div>
	</header>

	<?php do_action('foundationPress_after_header'); ?>