<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage La couveuse
 * @since La couveuse 1.0
 */

get_header();
?>
        <div class="container">
			<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentynineteen' ); ?></h1>
				</header><!-- .page-header -->

			</div><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
		</div>
	

<?php
get_footer();