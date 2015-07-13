<?php get_header(); ?>

<section class="hero pure-g">
	<div class="pure-u pure-u-md-1-4">
		<h2 class="ui">abstract</h2>
	</div>
	
	<div class="pure-u pure-u-md-3-4 main-content">
		<?php
			echo '<h1>';
			single_cat_title();
			echo '</h1>';
			the_archive_description( '<div class="taxonomy-description">', '</div>' );
							?>
	</div>
	
</section>

<section class="pure-g timeline-section">
	<div class="pure-u pure-u-md-1-4">
		<h2 class="ui">timeline</h2>
	</div>
	<div class="pure-u pure-u-md-3-4 main-content">
		
		<ol class="timeline">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<li class="tl-node">
				<h3 class="tl-title"><?php the_title(); ?></h3>
				<div class="tl-stamp">					
			<?php printf( __( 'Posted', 'bonestheme').' <time class="updated" datetime="%1$s" itemprop="datePublished">%2$s</time> '.__( 'by',  'bonestheme').' <span class="author">%3$s</span>', get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( 'ID' ) )); ?>
				</div>
				<div class="tl-content"><?php the_content(); ?></div>
				<div class="tl-attachments"><?php
			$args = array(
			'post_type' => 'attachment',
			'numberposts' => null,
			'post_status' => null,
			'post_parent' => $post->ID
		); 
		$attachments = get_posts($args);
		if ($attachments) {
			?><ol><?
			foreach ($attachments as $attachment) {
				?><li><? the_attachment_link($attachment->ID, false); ?></li><?
			}
			?></ol><?
		}
?>
				</div>
			</li>
<?php endwhile; endif; ?>
		</ol>
	</div>
</section>
<?php get_footer(); ?>