<?php
/**
 * Template Name: Left Sidebar
 * Description: A template with the sidebar on the left
 *
 *
 */

get_header(); ?>

<?php get_sidebar(); ?>

<section class="content mod item ">

	<?php the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
					<header class="entry-header">
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
						
						<?php if ( ! is_admin() ) { edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); } ?>
					</div><!-- .entry-content -->
				</article><!-- #post-<?php the_ID(); ?> -->

			
			</section>

<?php get_footer(); ?>