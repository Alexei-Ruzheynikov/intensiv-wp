<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package intensiv
 */
global $intensiv;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php if(is_front_page()){ ?>
	
	 <section class="top">
 <div class="slider">
	<!--<div class="flexslider">
  <ul class="slides">
    <li>
      <img src="images/slider-1.jpg" />
    </li>
	<li>
      <img src="images/slider-2.jpg" />
    </li>
    
  </ul>
</div>-->
<ul id="cbp-bislideshow" class="cbp-bislideshow">
    <li><img src="<?php echo get_template_directory_uri(); ?>/images/slider-1.jpg" alt="image01" /><div class="caption"><p class="cap-title">Contrary to popular belief
 <span>LIpsum is not simply text</span></p><div class="slider-ship"><img src="images/slider-ship.png" alt="" /></div></div></li>
    <li><img src="<?php echo get_template_directory_uri(); ?>/images/slider-2.jpg" alt="image02"/><div class="caption">
	<p class="cap-title">Contrary to popular belief
 <span>LIpsum is not simply text</span></p><div class="slider-ship"><img src="<?php echo get_template_directory_uri(); ?>/images/slider-ship.png" alt="" /></div></div></li>
</ul>
<div id="cbp-bicontrols" class="cbp-bicontrols">
    <span class="cbp-biprev"></span>
    <span class="cbp-bipause"></span>
    <span class="cbp-binext"></span>
</div>

 </div>
	<header class="home">
		<div class="container">
			<div class="line-top">
				<div class="wither-w">
					<span class="cloud"><img src="<?php echo get_template_directory_uri(); ?>/images/cloud.png" alt="" /></span>
					<span>18°c</span>
					<div class="city-wrap"><a href="javascript:void(0)" class="w-select">London <i class="fa fa-angle-down"></i></a>
						<div class="city-drop">
						<a href="#">Paris</a>
						<a href="#">Kopengagen</a>
						<a href="#">Berlin</a>
						</div>
					</div>
				</div>
				<div class="logo">
					<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" /></a>
				</div>
				<div class="contacts">
					<span><i class="fa fa-mobile"></i>8 800 346 10 79</span>
					<span><i class="fa fa-envelope"></i>mail@website.com</span>
				</div>
			</div>
			<nav class="main-nav">
				<ul class="nav-menu" >
					<li class="active" ><a href="index.html">Homepage</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="booking.html">Booking</a></li>
					<li class="dropdown"><a href="tour.html" >Tour<i class="fa fa-angle-down"></i></a>
						<ul class="drop-menu" id="drop-menu">
							<li><a href="#" >First menu</a></li>
							<li><a href="#" >Second menu</a></li>
							<li><a href="#" >Thirth menu</a></li>
						</ul>
					</li>
					<li><a href="blog.html">Blog</a></li>
					<li><a href="hot-deals.html">Hot deals</a></li>
					<li><a href="gallery.html">Gallery</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
				<div class="search">
					<input type="text" id="search-input" placeholder="Keywords"/>
					<button class="btn-search"><i class="fa fa-search"></i></button>
				</div>
			</nav>
		</div>
		<div class="q-search">
			<div class="container">
				<div class="q-search-wrap">
					<select id="location">
						<option>location</option>
					</select>
					<select id="type">
						<option>type</option>
					</select>
					<select id="coast">
						<option>150$-200$</option>
					</select>
					<button class="btn btn-yellow">quick Search</button>
				</div>
			</div>
		</div>
	</header>
 </section>


<?php } else { ?>
 	<section>
		 <?php $custom_logo = $intensiv['intensive-logo']['url']; ?>
		<header class="inner">
		<div class="container">
			<div class="line-top">
				<div class="wither-w">
					<span class="cloud"><img src="<?php echo get_template_directory_uri() ?>/images/cloud.png" alt="" /></span>
					<span>18°c</span>
					<div class="city-wrap"><a href="javascript:void(0)" class="w-select">London <i class="fa fa-angle-down"></i></a>
						<div class="city-drop">
						<a href="#">Paris</a>
						<a href="#">Kopengagen</a>
						<a href="#">Berlin</a>
						</div>
					</div>
				</div>
				<div class="logo">
					<a href="<?php echo home_url('/'); ?>"><?php if($custom_logo){ ?><img src="<?php echo esc_url($custom_logo); ?>" alt="" />
					<?php } ?></a>
				</div>
				<div class="contacts">
					<?php if($intensiv['header-phone']){ ?><span><i class="fa fa-mobile"></i><?php echo esc_attr($intensiv['header-phone']); ?></span><?php } ?>
					<?php if($intensiv['header-email']){ ?><span><i class="fa fa-envelope"></i><?php echo esc_attr($intensiv['header-email']); ?></span><?php } ?>
				</div>
			</div>
			<nav class="main-nav in">

			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_class'     => 'nav-menu',
					'container'      => 'ul',
				)
			);
			?>
				<!-- <ul class="nav-menu" >
					<li><a href="index.html">Homepage</a></li>
					<li class="active"><a href="about.html">About</a></li>
					<li><a href="booking.html">Booking</a></li>
					<li class="dropdown"><a href="tour.html" >Tour<i class="fa fa-angle-down"></i></a>
						<ul class="drop-menu" id="drop-menu">
							<li><a href="#" >First menu</a></li>
							<li><a href="#" >Second menu</a></li>
							<li><a href="#" >Thirth menu</a></li>
						</ul>
					</li>
					<li><a href="blog.html">Blog</a></li>
					<li><a href="hot-deals.html">Hot deals</a></li>
					<li><a href="gallery.html">Gallery</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul> -->
				<div class="search">
					<form method="GET" action="<?php echo home_url("/"); ?>" class="search-form">
					<input type="text" name="s" id="search-input" placeholder="Keywords"/>
					<button class="btn-search"><i class="fa fa-search"></i></button>
					</form>
				</div>
			</nav>
		</div>
		
	</header>
	
	</section>
<?php } ?>
