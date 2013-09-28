<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package elementary OS Brasil
 */
?>
	<div id="content" class="site-content container">
        
<article id="post-<?php the_ID(); ?>" <?php post_class('unit span-grid aligncenter'); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'eOSbr' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'eOSbr' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
