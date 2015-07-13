<?php get_header(); ?>

<section class="pure-g">
	
	<div class="pure-u pure-u-md-1-4">
		<h2 class="ui">projects</h2>
	</div>
	<div class="pure-u pure-u-md-3-4 main-content">
		<ol class="all-projects">
		<?php
			 $args = array(
	'show_option_all'    => '',
	'orderby'            => 'name',
	'order'              => 'ASC',
	'style'              => 'list',
	'show_count'         => 0,
	'hide_empty'         => 0,
	'use_desc_for_title' => 1,
	'title_li'           => __( '' ),
	'show_option_none'   => __( '' ),
	'number'             => null,
	'echo'               => 1,
	'depth'              => 0,
	'current_category'   => 0,
	'pad_counts'         => 0,
	'taxonomy'           => 'category'
    );
			wp_list_categories($args);
			?>
		</ol>
	</div>
</section>
<?php get_footer(); ?>