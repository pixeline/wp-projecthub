<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<title><?php wp_title(''); ?></title>
		<?php include('header.app-icons.php'); ?>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>
		
		<header class="pure-g">
			<div class="pure-u-1 pure-u-md-1-4">
				<p class="brand-name" itemscope itemtype="http://schema.org/Organization">
					<a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
				</p>
			</div>
			<div class="pure-u-1 pure-u-md-1-2">
				<p class="breadcrumb">
					<?php the_breadcrumb();?>
				</p>
			</div>
			<div class="pure-u-1 pure-u-md-1-4">
				<p class="user-menu">
					<a href="<?php echo wp_logout_url(); ?>">Log out</a>
				</p>
			</div>
		</header>