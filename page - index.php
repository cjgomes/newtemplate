<?php
/**
 * The template for displaying all pages.
 * 
 Template Name: Página Inicial
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package elementary OS Brasil
 */

get_header(); ?>
    <section id="banner">
        <div class="container">
            <h1 class="index-h1 unit span-grid">Lorem Ipsum</h1>
            <h2 class="index-h2 unit three-of-five">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut scelerisque purus. Donec diam nunc, pharetra vitae erat in, suscipit hendrerit quam.</h2>
            <div class="clearfix"></div>
            <div class="button big-index unit one-of-five">Saiba mais</div>
        </div>
        
    </section>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
