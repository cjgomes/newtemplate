<?php
/**
 * @package elementary OS Brasil
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('unit span-grid aligncenter'); ?>>
    		<div class="entry-meta">
			<span>Postado em <?php the_time('j');?> de <?php the_time('F');?> de <?php the_time('Y');?> por <a><?php the_author_posts_link(); ?></a></span>
		</div><!-- .entry-meta -->
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		<?php if ( 'post' == get_post_type() ) : ?>

		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php the_excerpt( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'eOSbr' ) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'eOSbr' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'eOSbr' ) );
				if ( $categories_list && eOSbr_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( 'Posted in %1$s', 'eOSbr' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'eOSbr' ) );
				if ( $tags_list ) :
			?>
			<span class="tags-links">
				<?php printf( __( 'Tagged %1$s', 'eOSbr' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'eOSbr' ), __( '1 Comment', 'eOSbr' ), __( '% Comments', 'eOSbr' ) ); ?></span>
		<?php endif; ?>

		<a href="<?php echo get_permalink(); ?>">Leia Mais</a>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
