<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_to_WordPress
 */

?>




<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h2 class="entry-title">', '</h2>' );
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
			<div class="post-details">
				<i class="fa fa-user"></i>&nbsp;<?php the_author(); ?>
				<i class="fa fa-clock-o"></i>&nbsp;<time><?php the_date(); ?></time>
				<i class="fa fa-folder"></i>&nbsp; <?php the_category(' | '); ?>
				<i class="fa fa-tags"></i>&nbsp;<?php the_tags(); ?>
				<div class="post-comments-badge">
					<a href="<?php comments_link(); ?>"><i class="fa fa-comments"></i>&nbsp; <?php comments_number(0, 1, '%'); ?></a>
				</div>
				<!-- post-comments-badge -->
				
				<?php edit_post_link('Edit', '&nbsp;<span><i class="fa fa-pencil"></i>&nbsp;', '</span>'); ?>
				
			</div>
			<!-- post-details -->

		<?php endif; ?>
	</header><!-- .entry-header -->

	
	<?php if(has_post_thumbnail()) : //check for feature image ?>
	<div class="post-image">
		<?php the_post_thumbnail(); ?>
	</div>
	<?php endif; ?>

	<!-- post-image -->
	<div class="post-excerpt">
		<?php the_excerpt(); ?>
	</div>
	<!-- post-excerpt -->

	


</article><!-- #post-<?php the_ID(); ?> -->
