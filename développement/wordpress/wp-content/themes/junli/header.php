<?php
/**
 * The Header for Junli.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php echo get_the_subtitle();?> | <?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> | junli.fr</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/normalize.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/main.css"/>
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/icon.png" />
<link rel="stylesheet" media="screen and (max-width:999px)" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/mobile.css"/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
<script src="<?php bloginfo('template_directory'); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
<script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATd6hPdQifTJhGXZENCy5sdOQY1O15yXQ&sensor=true">
</script>
<script type="text/javascript">
      function initialize() {
    	  var myLatlng = new google.maps.LatLng(50.6120540, 3.0402251);
    	  var mapOptions = {
    	    zoom: 16,
    	    center: myLatlng,
    	    mapTypeId: google.maps.MapTypeId.ROADMAP
    	  }
    	  var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

    	  var marker = new google.maps.Marker({
    	      position: myLatlng,
    	      map: map,
    	  });
    	}
      google.maps.event.addDomListener(window, 'load', initialize);
</script>
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body>
<div id="page" class="hfeed site">
	<div id=main>
	<header class="site-header">
		<div id="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"></a></div>
			<h1 class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</h1>
			<nav class="menu-header">
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu','container_class' => 'menu') ); ?>
			</nav>
	</header>
	<div id=menubar>
		<a class="menubar_item1 menubackground1 <?php echo (get_the_ID() =='14') ? 'current1' : '';?>" href="<?php echo get_home_url()?>/?page_id=14"><span class="menutexte1">Massage</span><span class="menutexte2">Tui-Na</span></a>
		<a class="menubar_item2 menubackground2 <?php echo (get_the_ID() =='15') ? 'current2' : '';?>" href="<?php echo get_home_url()?>/?page_id=15"><span class="menutexte1">Réfléxologie</span><span class="menutexte2">plantaire</span></a>
		<a class="menubar_item3 menubackground3 <?php echo (get_the_ID() =='89') ? 'current3' : '';?>" href="<?php echo get_home_url()?>/?page_id=89"><span class="menutexte1">Drainage</span><span class="menutexte2">lymphatique</span></a>
		<a class="menubar_item4 menubackground4 <?php echo (get_the_ID() =='16') ? 'current4' : '';?>" href="<?php echo get_home_url()?>/?page_id=16"><span class="menutexte1">Irrigation</span><span class="menutexte2">du côlon</span></a>
		</div>
	<div id="content">