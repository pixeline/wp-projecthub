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
				<p class="brand-name">
					<a href="/">pixeline</a>
				</p>
			</div>
			<div class="pure-u-1 pure-u-md-1-2">
				<p class="breadcrumb">
					<?php the_breadcrumb();?>
				</p>
			</div>
			<div class="pure-u-1 pure-u-md-1-4">
				<p><?php 
					get_currentuserinfo();
					global $user_ID;
					if (” != $user_ID) {
						?>
						<a href="
						<?
						echo get_edit_profile_url( $user_ID->ID);
					 ?>">My account</a> 
					 <a href="<?php echo wp_logout_url(); ?>">Log out</a>
					 <?php
						 }
						 ?> </p>
			</div>
		</header>