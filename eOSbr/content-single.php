<?php
/**
 * @package elementary OS Brasil
 */
?>
	<div id="content" class="site-content container">
<article id="post-<?php the_ID(); ?>" <?php post_class('unit span-grid aligncenter'); ?>>
	<header class="entry-header">
        		<div class="entry-meta">
			<?php eOSbr_posted_on(); ?>
		</div><!-- .entry-meta -->
		<h1 class="entry-title"><?php the_title(); ?></h1>


	</header><!-- .entry-header -->

	<div class="entry-content">
        
		<?php the_content(); ?>
        <div class="author"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo get_avatar( get_the_author_meta( 'ID' ), 80 ); ?></a><p class="author">Escrito por <?php the_author(); ?></p></div>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'eOSbr' ),
				'after'  => '</div>',
			) );
		?>
    
        
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', 'eOSbr' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'eOSbr' ) );

			if ( ! eOSbr_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was tagged %2$s.', 'eOSbr' );
				} else {
					$meta_text = __( '', 'eOSbr' );
				}

			} else {
				// But this blog has loads of categories so we should probably display them here
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was posted in %1$s and tagged %2$s.', 'eOSbr' );
				} else {
					$meta_text = __( 'This entry was posted in %1$s.', 'eOSbr' );
				}

			} // end check for categories on this blog

			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink(),
				the_title_attribute( 'echo=0' )
			);
		?>

		<?php edit_post_link( __( 'Edit', 'eOSbr' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
