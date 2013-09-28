<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package elementary OS Brasil
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
        <div class="footer-widget-area">
            <div class="container">
                <div class="footer-widget unit one-of-four">
                    <h1>Sobre</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nibh urna, venenatis sit amet dolor vel, bibendum vehicula enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="footer-widget unit one-of-four">
                    <h1>Categorias</h1>
                    <?php wp_list_categories('title_li='); ?>
                </div>
                <div class="footer-widget unit one-of-four">
                    <h1>Artigos recentes</h1>
                    <?php $args = array( 'numberposts' => '4' );
	                      $recent_posts = wp_get_recent_posts( $args );
	                      foreach( $recent_posts as $recent ){
		                      echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
	                       }
                    ?>
                </div>
                <div class="footer-widget unit one-of-four">
                    <div class="footer-widget-social">
                        <p>Siga-nos:</p>
                        <ul>
                            <li><a href="http://plus.google.com" class="icon-gplus">Teste</a></li>
                            <li><a href="http://plus.google.com" class="icon-fb">Teste</a></li>
                            <li><a href="http://plus.google.com" class="icon-twitter">Teste</a></li>
                            <li><a href="http://plus.google.com" class="icon-youtube">Teste</a></li>
                        </ul>
                        <div class="clearfix"></div>
                        <div>
                            <p>Conte&uacute;do sob a licen&ccedil;a:</p>
                            <p>2013 - Comunidade Brasileira do elementary OS | Orgulhosamente desenvolvida com <a href="http://br.wordpress.org/">Wordpress</a></p>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
		<div class="site-info">
			<?php do_action( 'eOSbr_credits' ); ?>
            <div class="container">
            <div class="unit span-grid">2013 - Comunidade Brasileira do elementary OS | Orgulhosamente desenvolvida com <a href="http://br.wordpress.org/">Wordpress</a></div>
        </div>
            </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>